<?php

namespace App\Livewire\Agency\Homepages;

use App\Models\AgencyRealtor;
use App\Models\User;
use Livewire\Component;
use Livewire\WithoutUrlPagination;
use Livewire\WithPagination;

class Realtors extends Component
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
        $ids = AgencyRealtor::where('agency_id', $this->agency->id)->pluck('realtor_id')->toArray();

        $query = User::whereIn('id', $ids)
                ->inRandomOrder();
                
        return $query;
    }


    public function render()
    {
        $query = $this->query();

        if ($this->keyword) {
            $query->where(function ($subquery) {
                $subquery->where('first_name', 'like', '%' . $this->keyword . '%')
                         ->orWhere('last_name', 'like', '%' . $this->keyword . '%')
                         ->orWhere('username', 'like', '%' . $this->keyword . '%')
                         ->orWhere('city', 'like', '%' . $this->keyword . '%')
                         ->orWhere('state', 'like', '%' . $this->keyword . '%');
            });
        }

        $realtors = $query->simplePaginate(12);

        return view('livewire.agency.homepages.realtors', ['realtors' => $realtors]);
    }
}
