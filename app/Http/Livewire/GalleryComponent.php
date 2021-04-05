<?php

namespace App\Http\Livewire;
use Livewire\WithPagination;

use Livewire\Component;
use App\Models\Image;

class GalleryComponent extends Component
{
    use WithPagination;

   
    public $sort;

    public function sortImages($sort)
    {
        $this->sort=$sort;
    }

    public function render()
    {
        $images=Image::query();
        
        if($this->sort=='old'){
            $images->orderBy('created_at', 'asc');
        }elseif($this->sort=='best'){
            $images->where('featured', 1);
        }else{
            $images->latest();
        }
   
        
        $images=$images->paginate(1);
        
        return view('livewire.gallery-component', ['images'=>$images]);
    }
}
