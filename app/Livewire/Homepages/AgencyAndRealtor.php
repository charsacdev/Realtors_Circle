<?php

namespace App\Livewire\Homepages;

use App\Models\User;
use Livewire\Component;
use Livewire\WithoutUrlPagination;
use Livewire\WithPagination;

class AgencyAndRealtor extends Component
{
    use WithPagination, WithoutUrlPagination;

    public $keyword;

    public function searchFilter()
    {
        $this->resetPage();
    }


    public function query()
    {
        $query = User::whereNot('role', 'admin')
            ->whereNotNull('email_verified_at')
            ->where(function ($subquery){
                $subquery->whereNotNull('company_name')
                ->orWhereNotNull('first_name');
            })
            ->inRandomOrder();

        return $query;
    }


    public function render()
    {
        $query = $this->query();
        
         // Apply keyword search across multiple fields if a keyword is provided
         if ($this->keyword) {
            $query->where(function ($subquery) {
                $subquery->where('first_name', 'like', '%' . $this->keyword . '%')
                         ->orWhere('last_name', 'like', '%' . $this->keyword . '%')
                         ->orWhere('city', 'like', '%' . $this->keyword . '%')
                         ->orWhere('state', 'like', '%' . $this->keyword . '%')
                         ->orWhere('role', 'like', '%' . $this->keyword . '%');
            });
        }
            


    $users = $query->simplePaginate(16);

    
        return view('livewire.homepages.agency-and-realtor', ['users' => $users]);
    }
}
