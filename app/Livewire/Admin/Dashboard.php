<?php

namespace App\Livewire\Admin;

use Carbon\Carbon;
use App\Models\User;
use Livewire\Component;
use App\Models\Customer;
use App\Models\Property;
use Livewire\Attributes\On;
use App\Models\ContactMessage;
use Illuminate\Support\Facades\DB;

class Dashboard extends Component
{
    public $listedPropertyCount;
    public $listedPropertyPercentageChange;
    public $availablePropertyCount;
    public $availablePropertyPercentageChange;
    public $customerCount;
    public $customerPercentageChange;
    public $userCount;
    public $userPercentageChange;
    public $contactMessages;

    //Chart js 
    public $filter = 'yearly'; // Default filter
    public $chartData = [];
    public $realtorData;
    public $agencyData;
    public $labels;
    public $selectedDate;



    public function mount()
    {
        //counts
        $this->availablePropertyCount = count(Property::where('status', 1)->get());
        $this->listedPropertyCount = count(Property::all());
        $this->customerCount = count(Customer::all());
        $this->userCount = count(User::all());


        //Percentage Changes compared to last month
        $this->availablePropertyPercentageChange = percentageChange('properties', 1, 'status');
        $this->listedPropertyPercentageChange = percentageChange('properties');
        $this->customerPercentageChange = percentageChange('customers');
        $this->userPercentageChange = percentageChange('users');

        $this->contactMessages = ContactMessage::where(['user_id' => 0, 'is_read' => 0])
                    ->orderBy('id', 'DESC')
                    ->limit(4)
                    ->get();

        
        //Chart js
        $this->chartData = $this->fetchData($this->filter);
        $this->realtorData = $this->chartData['realtorData'];
        $this->agencyData = $this->chartData['agencyData'];
        $this->labels = $this->chartData['labels'];

    }


    #[On('updateChartData')]
    public function updateChartData($filter)
    {
        if($filter == 'daily' || $filter == 'weekly' || $filter == 'monthly' || $filter == 'yearly')
        {
            $this->chartData = $this->fetchData($filter, $this->selectedDate);

        }else{

            $this->chartData = $this->fetchData($this->filter, $filter);
        }
        $this->dispatch('updateChart', $this->chartData);
    }



    public function fetchData($filter, $date = null)
    {

        $user_id = auth('web')->user()->id;
        $realtorData = [];
        $agencyData = [];
        $labels = [];

        if($date)
        {
            for ($i = 0; $i < 24; $i++) {
                
                $start = Carbon::parse($date)->addHours($i);
                $end = Carbon::parse($date)->addHours($i + 1);
                $realtorData[] = User::where('role', 'realtor')->whereBetween('created_at', [$start, $end])->count();
                $agencyData[] = User::where('role', 'agency')->whereBetween('created_at', [$start, $end])->count();
                $labels[] = $start->format('g:iA'); // Labels: "12:00AM", "1:00AM", etc.
            }
        }else{
            switch ($filter) {
                case 'daily':
                    // Fetch data for 24 hours (e.g., 12:00AM - 11:00PM)
                    for ($i = 0; $i < 24; $i++) {
                        $start = Carbon::today()->addHours($i);
                        $end = Carbon::today()->addHours($i + 1);
                        $realtorData[] = User::where('role', 'realtor')->whereBetween('created_at', [$start, $end])->count();
                        $agencyData[] = User::where('role', 'agency')->whereBetween('created_at', [$start, $end])->count();
                        $labels[] = $start->format('g:iA'); // Labels: "12:00AM", "1:00AM", etc.
                    }
                    break;
    
                case 'weekly':
                    // Fetch data for the last 7 days
                    for ($i = 0; $i < 7; $i++) {
                        $start = Carbon::now()->startOfWeek()->addDays($i);
                        $end = $start->copy()->endOfDay();
                        $realtorData[] = User::where('role', 'realtor')->whereBetween('created_at', [$start, $end])->count();
                        $agencyData[] = User::where('role', 'agency')->whereBetween('created_at', [$start, $end])->count();
                        $labels[] = "Day " . ($i + 1); // Labels: "Day 1", "Day 2", etc.
                    }
                    break;
    
                case 'monthly':
                    // Fetch data for 30 days (assumes 30-day month)
                    for ($i = 1; $i <= 30; $i++) {
                        $start = Carbon::now()->startOfMonth()->addDays($i - 1);
                        $end = $start->copy()->endOfDay();
                        $realtorData[] = User::where('role', 'realtor')->whereBetween('created_at', [$start, $end])->count();
                        $agencyData[] = User::where('role', 'agency')->whereBetween('created_at', [$start, $end])->count();
                        $labels[] = getOrdinal($i); // Labels: "1st", "2nd", etc.
                    }
                    break;
    
                case 'yearly':
                    // Fetch data for each month in the year (Jan - Dec)
                    for ($i = 1; $i <= 12; $i++) {
                        $start = Carbon::createFromDate(null, $i, 1)->startOfMonth();
                        $end = $start->copy()->endOfMonth();
                        $realtorData[] = User::where('role', 'realtor')->whereBetween('created_at', [$start, $end])->count();
                        $agencyData[] = User::where('role', 'agency')->whereBetween('created_at', [$start, $end])->count();
                        $labels[] = $start->format('M'); // Labels: "Jan", "Feb", etc.
                    }
                    break;
            }
        }




        return [
            'realtorData' => $realtorData,
            'agencyData' => $agencyData,
            'labels' => $labels,
        ];

    }


    public function render()
    {
        return view('livewire.admin.dashboard');
    }
}
