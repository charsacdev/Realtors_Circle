<?php

namespace App\Livewire\Agency\Homepages;

use App\Models\User;
use Livewire\Component;
use App\Models\Property;
use Livewire\WithPagination;
use App\Models\AgencyRealtor;
use Livewire\WithoutUrlPagination;

class Properties extends Component
{
    use WithPagination, WithoutUrlPagination;
    
    public $agency;
    public $settings;
    public $keyword;


    public function mount()
    {
        //Capture the agency slug from the url
        $slug = request()->segment(2);
        $this->agency = User::where('slug', $slug)->first();
        $this->settings = json_decode($this->agency->settings->settings);

    }


    public function searchFilter()
    {
        $this->resetPage();
    }


    public function query()
    {
        
        $realtor_ids = AgencyRealtor::where('agency_id', $this->agency->id)->pluck('realtor_id')->toArray();

        $ids = array_merge($realtor_ids, [$this->agency->id]);
        shuffle($ids);

        $query = Property::whereIn('user_id', $ids)
                        ->where('status', 1)
                        ->inRandomOrder();
        

        return $query;
    }


    public function render()
    {
        $query = $this->query();

        if ($this->keyword) {
            $query->where(function ($subquery) {
                $subquery->where('name', 'like', '%' . $this->keyword . '%')
                         ->orWhere('description', 'like', '%' . $this->keyword . '%')
                         ->orWhere('transaction_info', 'like', '%' . $this->keyword . '%')
                         ->orWhere('payment_mode', 'like', '%' . $this->keyword . '%')
                         ->orWhere('location', 'like', '%' . $this->keyword . '%')
                         ->orWhere('country', 'like', '%' . $this->keyword . '%');
            });
        }

        $properties = $query->simplePaginate(12);
        
        return view('livewire.agency.homepages.properties', ['properties' => $properties]);
    }
}
