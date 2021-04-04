<?php

namespace App\Http\Livewire;
use Livewire\WithPagination;

use Livewire\Component;
use App\Models\Post;

class PostComponent extends Component
{
    use WithPagination;

   
    public $sort;
    public $q='';

    public function sortPosts($sort)
    {
        $this->sort=$sort;
        $this->q='';
    }

    public function render()
    {
        $posts=Post::query();
        
        if($this->sort=='old'){
            $posts->orderBy('created_at', 'asc');
        }elseif($this->sort=='best'){
            $posts->where('featured', 1);
        }else{
            $posts->latest();
        }
   
        if($this->q!=''){
            $posts->where('title', 'like', '%'.$this->q.'%')
            ->orWhere('description', 'like', '%'.$this->q.'%')
            ->orWhere('body', 'like', '%'.$this->q.'%');
        }
        
        $posts=$posts->paginate(6);
        
        return view('livewire.post-component', ['posts'=>$posts]);
    }
}
