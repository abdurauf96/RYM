<?php

namespace App\Http\Livewire;

use Livewire\Component;
use App\Models\Region;

class RegionsComponent extends Component
{
    public $regions;
    public $region;

    public function mount()
    {
        $this->regions=Region::all();
        $this->region=Region::first();
    }

    public function sortDistricts($id)
    {
        $this->region=Region::find($id);
    }

    public function render()
    {
        return view('livewire.regions-component');
    }
}
