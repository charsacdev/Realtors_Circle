<?php

namespace App\Livewire\Agency;

use Carbon\Carbon;
use App\Models\User;
use Livewire\Component;
use App\Models\Property;
use App\Models\Schedule;
use Livewire\Attributes\On;
use App\Models\AgencyRealtor;
use Illuminate\Support\Facades\Auth;

class Dashboard extends Component
{
    public $propertyCount;
    public $listedPropertyPercentageChange;
    public $realtorCount;
    public $realtorPercentageChange;
    public $bookingCount;
    public $bookingPercentageChange;
    public $availablePropertyCount;
    public $availablePropertyPercentageChange;
    public $user;
    public $schedules;

    //Chart js 
    public $filter = 'yearly'; // Default filter
    public $chartData = [];
    public $realtorData;
    public $propertyData;
    public $labels;
    public $selectedDate;

    public function mount()
    {
        $this->user = Auth::guard('web')->user();

        //Counts
        $this->propertyCount = count($this->user->properties);
        $this->realtorCount = count($this->user->realtors);
        $this->bookingCount = count($this->user->schedules);
        $this->availablePropertyCount = count($this->user->availableProperties);

        //Percentage Changes compared to last month
        $this->listedPropertyPercentageChange = percentageChange('properties', null, null, $this->user->id, 'user_id');
        $this->availablePropertyPercentageChange = percentageChange('properties', 1, 'status', $this->user->id, 'user_id');
        $this->bookingPercentageChange = percentageChange('schedules', null, null, $this->user->id, 'user_id');
        $this->realtorPercentageChange = percentageChange('agency_realtors', null, null, $this->user->id, 'agency_id');

        
        $this->schedules = Schedule::where(['user_id' => $this->user->id])
        ->orderBy('id', 'DESC')
        ->limit(4)
        ->get();


        //Chart js
        $this->chartData = $this->fetchData($this->filter);
        $this->realtorData = $this->chartData['realtorData'];
        $this->propertyData = $this->chartData['propertyData'];
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
        $propertyData = [];
        $labels = [];

        if($date)
        {
            for ($i = 0; $i < 24; $i++) {
                
                $start = Carbon::parse($date)->addHours($i);
                $end = Carbon::parse($date)->addHours($i + 1);
                $realtorData[] = AgencyRealtor::where('agency_id', $user_id)->whereBetween('created_at', [$start, $end])->count();
                $propertyData[] = Property::where('user_id', $user_id)->whereBetween('created_at', [$start, $end])->count();
                $labels[] = $start->format('g:iA'); // Labels: "12:00AM", "1:00AM", etc.
            }
        }else{
            switch ($filter) {
                case 'daily':
                    // Fetch data for 24 hours (e.g., 12:00AM - 11:00PM)
                    for ($i = 0; $i < 24; $i++) {
                        $start = Carbon::today()->addHours($i);
                        $end = Carbon::today()->addHours($i + 1);
                        $realtorData[] = AgencyRealtor::where('agency_id', $user_id)->whereBetween('created_at', [$start, $end])->count();
                        $propertyData[] = Property::where('user_id', $user_id)->whereBetween('created_at', [$start, $end])->count();
                        $labels[] = $start->format('g:iA'); // Labels: "12:00AM", "1:00AM", etc.
                    }
                    break;
    
                case 'weekly':
                    // Fetch data for the last 7 days
                    for ($i = 0; $i < 7; $i++) {
                        $start = Carbon::now()->startOfWeek()->addDays($i);
                        $end = $start->copy()->endOfDay();
                        $realtorData[] = AgencyRealtor::where('agency_id', $user_id)->whereBetween('created_at', [$start, $end])->count();
                        $propertyData[] = Property::where('user_id', $user_id)->whereBetween('created_at', [$start, $end])->count();
                        $labels[] = "Day " . ($i + 1); // Labels: "Day 1", "Day 2", etc.
                    }
                    break;
    
                case 'monthly':
                    // Fetch data for 30 days (assumes 30-day month)
                    for ($i = 1; $i <= 30; $i++) {
                        $start = Carbon::now()->startOfMonth()->addDays($i - 1);
                        $end = $start->copy()->endOfDay();
                        $realtorData[] = AgencyRealtor::where('agency_id', $user_id)->whereBetween('created_at', [$start, $end])->count();
                        $propertyData[] = Property::where('user_id', $user_id)->whereBetween('created_at', [$start, $end])->count();
                        
                        $labels[] = getOrdinal($i); // Labels: "1st", "2nd", etc.
                    }
                    break;
    
                case 'yearly':
                    // Fetch data for each month in the year (Jan - Dec)
                    for ($i = 1; $i <= 12; $i++) {
                        $start = Carbon::createFromDate(null, $i, 1)->startOfMonth();
                        $end = $start->copy()->endOfMonth();
                        $realtorData[] = AgencyRealtor::where('agency_id', $user_id)->whereBetween('created_at', [$start, $end])->count();
                        $propertyData[] = Property::where('user_id', $user_id)->whereBetween('created_at', [$start, $end])->count();
                        $labels[] = $start->format('M'); // Labels: "Jan", "Feb", etc.
                    }
                    break;
            }
        }




        return [
            'realtorData' => $realtorData,
            'propertyData' => $propertyData,
            'labels' => $labels,
        ];

    }

    
    public function render()
    {
        return view('livewire.agency.dashboard');
    }
}

