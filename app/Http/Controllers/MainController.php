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

        $events=\App\Models\Event::withTranslation(\App::getLocale())
        ->where('featured', 1)
        ->limit(3)
        ->get();
        

        return view('welcome', compact('sliders', 'latest_news', 'offer', 'best_courses', 'features', 'opinion', 'numbers', 'news', 'events'));
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

    public function viewEvent($slug)
    {
        $event=\App\Models\Event::whereSlug($slug)->withTranslation(\App::getLocale())->first();
        $event->view=$event->view+1;
        $event->save();

        $other_events=\App\Models\Event::where('slug', '!=', $slug)
        ->withTranslation(\App::getLocale())
        ->get();
        return view('viewEvent', compact('event', 'other_events'));
    }

    public function news()
    {
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
        $post=\App\Models\Post::whereSlug($slug)->withTranslation(\App::getLocale())->first();
        $post->view=$post->view+1;
        $post->save();

        $other_posts=\App\Models\Post::where('slug', '!=', $slug)
        ->withTranslation(\App::getLocale())
        ->get();
        return view('viewPost', compact('post', 'other_posts'));
    }

    public function oav()
    {
        $oavs=\App\Models\Oav::withTranslation(\App::getLocale())->latest()->get();
        return view('oav', compact('oavs'));
    }

    public function viewOav($slug)
    {
        $oav=\App\Models\Oav::whereSlug($slug)->withTranslation(\App::getLocale())->first();
        $oav->view=$oav->view+1;
        $oav->save();

        $other_oavs=\App\Models\Oav::where('slug', '!=', $slug)
        ->withTranslation(\App::getLocale())
        ->get();
        return view('viewOav', compact('oav', 'other_oavs'));
    }


    public function regions()
    {
        return view('regions');
    }

    public function viewDistrict($slug)
    {
        $district=\App\Models\District::whereSlug($slug)->withTranslation(\App::getLocale())->first();
        return view('viewRegion', compact('district'));
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
