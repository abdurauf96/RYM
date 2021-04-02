<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class MainController extends Controller
{
    public function home()
    {
        return view('welcome');
    }

    public function about()
    {
        return view('about');
    }

    public function leadership()
    {
        return view('leadership');
    }

    public function documents()
    {
        return view('documents');
    }

    public function viewDocument($slug)
    {
        return view('viewDocument');
    }
    
    public function rules()
    {
        return view('rules');
    }

    public function structure()
    {
        return view('structure');
    }

    public function contact()
    {
        return view('contact');
    }

    public function news()
    {
        return view('news');
    }

    public function posts()
    {
        return view('posts');
    }

    public function oav()
    {
        return view('oav');
    }

    public function detail($slug)
    {
        return view('detail');
    }

    public function regions()
    {
        return view('regions');
    }

    public function viewRegion($slug)
    {
        return view('viewRegion');
    }

    public function faq()
    {
        return view('faq');
    }

    public function cources()
    {
        return view('cources');
    }

    public function viewCource($slug)
    {
        return view('viewCource');
    }

    public function search()
    {
        return view('search');
    }

    public function gallery()
    {
        return view('gallery');
    }

    public function videos()
    {
        return view('videos');
    }
}
