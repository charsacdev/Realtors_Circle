<?php

namespace App\Livewire\Agency\Homepages;

use App\Models\User;
use Livewire\Component;
use App\Models\Property;
use App\Models\AgencyRealtor;
use App\Models\Team;

class IndexHome extends Component
{
    public $agency;
    public $settings;
    public $faqs;
    public $properties;
    public $realtors;
    public $testimonials;
    public $realtors_properties;
    public $teams;

    public function mount()
    {
        //Capture the agency slug from the url
        $slug = request()->segment(2);
        $this->agency = User::where('slug', $slug)->first();


        $this->settings = json_decode($this->agency->settings->settings);
        $this->faqs = $this->agency->faqs;
        $this->properties = Property::where('user_id', $this->agency->id)
                ->where('status', 1)
                ->inRandomOrder()
                ->limit(6)
                ->get();
        $this->realtors = User::whereIn('id', $this->getIds(8))->get();
        $this->testimonials = $this->agency->testimonials;

        $this->teams = Team::where('user_id', $this->agency->id)->where('status', 1)->get();

        //Fetch six records of agency realtors properties
        $this->realtors_properties = Property::whereIn('user_id', $this->getIds(6))->limit(6)->get();

    }


    public function getIds($limit)
    {
        $ids = json_decode(AgencyRealtor::where('agency_id', $this->agency->id)->inRandomOrder()->limit($limit)->pluck('realtor_id'));
        return $ids;
    }


    public function render()
    {
        return view('livewire.agency.homepages.index-home');
    }
}
