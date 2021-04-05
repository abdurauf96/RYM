<?php

namespace App\Http\Livewire;

use Livewire\Component;
use App\Models\Course;
use App\Models\Region;
use App\Models\District;

class CoursesBlockComponent extends Component
{
    public $courses;
    public $regions;
    public $districts;
    public $limit;
    public $region_id;
    public $district_id;
   

    public function mount()
    {
        $this->limit=4;
        $this->courses=Course::limit($this->limit)->get();
        $this->regions=Region::all();
        $this->districts=District::all();
        
    }

    public function getCourse($title)
    {
        $this->course_name=$title;
    }

    public function sortByRegion($region_id)
    {
        if($region_id){
            $this->region_id=$region_id;
            $this->courses=Course::where('region_id', $region_id)->get();
            $this->districts=District::where('region_id', $region_id)->get();
        }else{
            $this->courses=Course::all();
            $this->districts=District::all();
        }
        
    }

    public function sortByDistrict($district_id)
    {
        $this->district_id=$district_id;
        $this->courses=Course::where('district_id', $district_id)->get();
        
    }

    public function loadMore()
    {
        $this->limit+=2;
        $region_id=$this->region_id;
        $district_id=$this->district_id;
        $this->courses=Course::when($region_id, function($query, $region_id) {
            return $query->where('region_id', $region_id);
        })
        ->when($district_id, function($query, $district_id) {
            return $query->where('district_id', $district_id);
        })
        ->limit($this->limit)
        ->get();
    }


    public function render()
    {
        return view('livewire.courses-block-component');
    }
}
