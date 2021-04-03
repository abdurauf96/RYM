<?php

namespace App\Http\Livewire;
use Livewire\WithPagination;

use Livewire\Component;
use App\Models\News;

class NewsComponent extends Component
{
    use WithPagination;

    public $news;
    public $sort;
    public $q='';

    public function sortNews($sort)
    {
        $this->sort=$sort;
        $this->q='';
    }

    public function render()
    {
        $news=News::query();
        
        if($this->sort=='old'){
            $news->orderBy('created_at', 'asc');
        }elseif($this->sort=='best'){
            $news->where('featured', 1);
        }else{
            $news->latest();
        }
   
        if($this->q!=''){
            $news->where('title', 'like', '%'.$this->q.'%')
            ->orWhere('description', 'like', '%'.$this->q.'%')
            ->orWhere('body', 'like', '%'.$this->q.'%');
        }
        
        $news=$news->paginate(6);
        
        return view('livewire.news-component', ['newss'=>$news]);
    }
}
