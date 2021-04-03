<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class MainController extends Controller
{
    public function home()
    {
        $sliders=\App\Models\Slider::withTranslation(\App::getLocale())->get();
        $latest_news=\App\Models\News::withTranslation(\App::getLocale())->limit(3)->latest()->get();
        $offer=\App\Models\Offer::withTranslation(\App::getLocale())->first();
        $best_courses=\App\Models\Course::where('featured', 1)->withTranslation(\App::getLocale())->get();
        $features=\App\Models\Feature::withTranslation(\App::getLocale())->get();
        $numbers=\App\Models\Number::withTranslation(\App::getLocale())->get();
        $opinion=\App\Models\Opinion::withTranslation(\App::getLocale())->first();
        $news=\App\Models\News::withTranslation(\App::getLocale())->where('featured', 1)->get();
        return view('welcome', compact('sliders', 'latest_news', 'offer', 'best_courses', 'features', 'opinion', 'numbers', 'news'));
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
        //$news=\App\Models\News::withTranslation(\App::getLocale())->paginate(1);
        return view('news');
    }

    public function viewNews($slug)
    {
        $news=\App\Models\News::whereSlug($slug)->withTranslation(\App::getLocale())->first();
        $news->view=$news->view+1;
        $news->save();
        $other_news=\App\Models\News::where('category_id', $news->category_id)->where('slug', '!=', $slug)->withTranslation(\App::getLocale())->get();
        return view('viewNews', compact('news', 'other_news'));
    }

    public function posts()
    {
        return view('posts');
    }

    public function viewPost($slug)
    {
        return view('viewPost');
    }

    public function oav()
    {
        return view('oav');
    }

    public function viewOav()
    {
        return view('viewOav');
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
        $course=\App\Models\Course::whereSlug($slug)->withTranslation(\App::getLocale())->first();
        return view('viewCource', compact('course'));
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
