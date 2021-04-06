<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use MetaTag;

class MainController extends Controller
{

    public function __construct()
    {
        // Defaults
        MetaTag::set('title', 'Respublika yoshlar markazi');
        MetaTag::set('description', 'Respublika yoshlar markazi');
        
    }

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
        
        $link=\App\Models\Link::withTranslation(\App::getLocale())->first();
        MetaTag::set('title', $link->getTranslatedAttribute('seo_title', \App::getLocale()));
        MetaTag::set('description', $link->getTranslatedAttribute('seo_description', \App::getLocale()));
        MetaTag::set('keywords', $link->getTranslatedAttribute('seo_keywords', \App::getLocale()));

        return view('welcome', compact('sliders', 'latest_news', 'offer', 'best_courses', 'features', 'opinion', 'numbers', 'news', 'events'));
    }

    public function about()
    {
        $about=\App\Models\AboutPage::withTranslation(\App::getLocale())->first();
        $histories=\App\Models\BlockHistory::withTranslation(\App::getLocale())->get();
        $teams=\App\Models\Team::withTranslation(\App::getLocale())->get();
        $opinions=\App\Models\SliderOpinion::withTranslation(\App::getLocale())->get();
        $features=\App\Models\Feature::withTranslation(\App::getLocale())->get();
        MetaTag::set('title', $about->getTranslatedAttribute('seo_title', \App::getLocale()));
        MetaTag::set('description', $about->getTranslatedAttribute('seo_description', \App::getLocale()));
        MetaTag::set('keywords', $about->getTranslatedAttribute('seo_keywords', \App::getLocale()));
        return view('about', compact('about','histories', 'teams', 'opinions', 'features'));
    }

    public function leadership()
    {
        $leaders=\App\Models\Leader::withTranslation(\App::getLocale())->get();
        $leaderPage=\App\Models\LeadershipPage::withTranslation(\App::getLocale())->first();
        MetaTag::set('title', $leaderPage->getTranslatedAttribute('seo_title', \App::getLocale()));
        MetaTag::set('description', $leaderPage->getTranslatedAttribute('seo_description', \App::getLocale()));
        MetaTag::set('keywords', $leaderPage->getTranslatedAttribute('seo_keywords', \App::getLocale()));
        return view('leadership', compact('leaders', 'leaderPage'));
    }

    public function documents()
    {
        $documentPage=\App\Models\DocumentPage::withTranslation(\App::getLocale())->first();
        MetaTag::set('title', $documentPage->getTranslatedAttribute('seo_title', \App::getLocale()));
        MetaTag::set('description', $documentPage->getTranslatedAttribute('seo_description', \App::getLocale()));
        MetaTag::set('keywords', $documentPage->getTranslatedAttribute('seo_keywords', \App::getLocale()));
        return view('documents', compact('documentPage'));
    }

    public function viewDocument($slug)
    {
        $document=\App\Models\Document::whereSlug($slug)->withTranslation(\App::getLocale())->first();
        $document->viewed=$document->viewed+1;
        $document->save();
        
        MetaTag::set('title', $document->getTranslatedAttribute('seo_title', \App::getLocale()));
        MetaTag::set('description', $document->getTranslatedAttribute('seo_description', \App::getLocale()));
        MetaTag::set('keywords', $document->getTranslatedAttribute('seo_keywords', \App::getLocale()));
        return view('viewDocument', compact('document'));
    }
    
    public function rules()
    {
        $rules=\App\Models\Rule::withTranslation(\App::getLocale())->get();
        $rulePage=\App\Models\RulePage::withTranslation(\App::getLocale())->first();
        MetaTag::set('title', $rulePage->getTranslatedAttribute('seo_title', \App::getLocale()));
        MetaTag::set('description', $rulePage->getTranslatedAttribute('seo_description', \App::getLocale()));
        MetaTag::set('keywords', $rulePage->getTranslatedAttribute('seo_keywords', \App::getLocale()));
        return view('rules', compact('rules', 'rulePage'));
    }

    public function structure()
    {
        $structure=\App\Models\StructurePage::withTranslation(\App::getLocale())->first();
        MetaTag::set('title', $structure->getTranslatedAttribute('seo_title', \App::getLocale()));
        MetaTag::set('description', $structure->getTranslatedAttribute('seo_description', \App::getLocale()));
        MetaTag::set('keywords', $structure->getTranslatedAttribute('seo_keywords', \App::getLocale()));
        return view('structure', compact('structure'));
    }

    public function contact()
    {
        $link=\App\Models\Link::withTranslation(\App::getLocale())->first();
        $contact=\App\Models\ContactPage::withTranslation(\App::getLocale())->first();
        MetaTag::set('title', $contact->getTranslatedAttribute('seo_title', \App::getLocale()));
        MetaTag::set('description', $contact->getTranslatedAttribute('seo_description', \App::getLocale()));
        MetaTag::set('keywords', $contact->getTranslatedAttribute('seo_keywords', \App::getLocale()));
        return view('contact', compact('link', 'contact'));
    }

    public function viewEvent($slug)
    {
        $event=\App\Models\Event::whereSlug($slug)->withTranslation(\App::getLocale())->first();
        $event->view=$event->view+1;
        $event->save();
        
        MetaTag::set('title', $event->getTranslatedAttribute('seo_title', \App::getLocale()));
        MetaTag::set('description', $event->getTranslatedAttribute('seo_description', \App::getLocale()));
        MetaTag::set('keywords', $event->getTranslatedAttribute('seo_keywords', \App::getLocale()));
        $other_events=\App\Models\Event::where('slug', '!=', $slug)
        ->withTranslation(\App::getLocale())
        ->get();
        return view('viewEvent', compact('event', 'other_events'));
    }

    public function news()
    {
        $newsPage=\App\Models\NewsPage::withTranslation(\App::getLocale())->first();
        MetaTag::set('title', $newsPage->getTranslatedAttribute('seo_title', \App::getLocale()));
        MetaTag::set('description', $newsPage->getTranslatedAttribute('seo_description', \App::getLocale()));
        MetaTag::set('keywords', $newsPage->getTranslatedAttribute('seo_keywords', \App::getLocale()));
        return view('news' , compact('newsPage'));
    }

    public function viewNews($slug)
    {
        $news=\App\Models\News::whereSlug($slug)->withTranslation(\App::getLocale())->first();
        $news->view=$news->view+1;
        $news->save();
      
        MetaTag::set('title', $news->getTranslatedAttribute('seo_title', \App::getLocale()));
        MetaTag::set('description', $news->getTranslatedAttribute('seo_description', \App::getLocale()));
        MetaTag::set('keywords', $news->getTranslatedAttribute('seo_keywords', \App::getLocale()));
        $other_news=\App\Models\News::where('category_id', $news->category_id)->where('slug', '!=', $slug)->withTranslation(\App::getLocale())->get();
        return view('viewNews', compact('news', 'other_news'));
    }

    public function posts()
    {
        $postPage=\App\Models\LeadershipPage::withTranslation(\App::getLocale())->first();
        MetaTag::set('title', $postPage->getTranslatedAttribute('seo_title', \App::getLocale()));
        MetaTag::set('description', $postPage->getTranslatedAttribute('seo_description', \App::getLocale()));
        MetaTag::set('keywords', $postPage->getTranslatedAttribute('seo_keywords', \App::getLocale()));
        return view('posts', compact('postPage'));
    }

    public function viewPost($slug)
    {
        $post=\App\Models\Post::whereSlug($slug)->withTranslation(\App::getLocale())->first();
        $post->view=$post->view+1;
        $post->save();
       
        MetaTag::set('title', $post->getTranslatedAttribute('seo_title', \App::getLocale()));
        MetaTag::set('description', $post->getTranslatedAttribute('seo_description', \App::getLocale()));
        MetaTag::set('keywords', $post->getTranslatedAttribute('seo_keywords', \App::getLocale()));
        $other_posts=\App\Models\Post::where('slug', '!=', $slug)
        ->withTranslation(\App::getLocale())
        ->get();
        return view('viewPost', compact('post', 'other_posts'));
    }

    public function oav()
    {
        $oavs=\App\Models\Oav::withTranslation(\App::getLocale())->latest()->get();
        $oavPage=\App\Models\OavPage::withTranslation(\App::getLocale())->first();
        MetaTag::set('title', $oavPage->getTranslatedAttribute('seo_title', \App::getLocale()));
        MetaTag::set('description', $oavPage->getTranslatedAttribute('seo_description', \App::getLocale()));
        MetaTag::set('keywords', $oavPage->getTranslatedAttribute('seo_keywords', \App::getLocale()));
        return view('oav', compact('oavs', 'oavPage'));
    }

    public function viewOav($slug)
    {
        $oav=\App\Models\Oav::whereSlug($slug)->withTranslation(\App::getLocale())->first();
        $oav->view=$oav->view+1;
        $oav->save();
       
        MetaTag::set('title', $oav->getTranslatedAttribute('seo_title', \App::getLocale()));
        MetaTag::set('description', $oav->getTranslatedAttribute('seo_description', \App::getLocale()));
        MetaTag::set('keywords', $oav->getTranslatedAttribute('seo_keywords', \App::getLocale()));
        $other_oavs=\App\Models\Oav::where('slug', '!=', $slug)
        ->withTranslation(\App::getLocale())
        ->get();
        return view('viewOav', compact('oav', 'other_oavs'));
    }


    public function regions()
    {
        $regionPage=\App\Models\RegionPage::withTranslation(\App::getLocale())->first();
        MetaTag::set('title', $regionPage->getTranslatedAttribute('seo_title', \App::getLocale()));
        MetaTag::set('description', $regionPage->getTranslatedAttribute('seo_description', \App::getLocale()));
        MetaTag::set('keywords', $regionPage->getTranslatedAttribute('seo_keywords', \App::getLocale()));
        return view('regions', compact('regionPage'));
    }

    public function viewDistrict($slug)
    {
        $district=\App\Models\District::whereSlug($slug)->withTranslation(\App::getLocale())->first();
      
        MetaTag::set('title', $district->getTranslatedAttribute('seo_title', \App::getLocale()));
        MetaTag::set('description', $district->getTranslatedAttribute('seo_description', \App::getLocale()));
        MetaTag::set('keywords', $district->getTranslatedAttribute('seo_keywords', \App::getLocale()));
        return view('viewRegion', compact('district'));
    }

    public function faq()
    {
        $faqs=\App\Models\Faq::withTranslation(\App::getLocale())->get();
        $faqPage=\App\Models\FaqPage::withTranslation(\App::getLocale())->first();
        MetaTag::set('title', $faqPage->getTranslatedAttribute('seo_title', \App::getLocale()));
        MetaTag::set('description', $faqPage->getTranslatedAttribute('seo_description', \App::getLocale()));
        MetaTag::set('keywords', $faqPage->getTranslatedAttribute('seo_keywords', \App::getLocale()));
        return view('faq',compact('faqs', 'faqPage'));
    }

    public function cources()
    {
        $coursePage=\App\Models\CoursePage::withTranslation(\App::getLocale())->first();
        MetaTag::set('title', $coursePage->getTranslatedAttribute('seo_title', \App::getLocale()));
        MetaTag::set('description', $coursePage->getTranslatedAttribute('seo_description', \App::getLocale()));
        MetaTag::set('keywords', $coursePage->getTranslatedAttribute('seo_keywords', \App::getLocale()));
        return view('cources', compact('coursePage'));
    }

    public function viewCource($slug)
    {
        $course=\App\Models\Course::whereSlug($slug)->withTranslation(\App::getLocale())->first();
      
        MetaTag::set('title', $course->getTranslatedAttribute('seo_title', \App::getLocale()));
        MetaTag::set('description', $course->getTranslatedAttribute('seo_description', \App::getLocale()));
        MetaTag::set('keywords', $course->getTranslatedAttribute('seo_keywords', \App::getLocale()));
        return view('viewCource', compact('course'));
    }

    public function search(Request $request)
    {
        $query=$request->q;
        
        $courses=\App\Models\Course::where('title', 'like', '%'.$query.'%')
        ->orWhere('description', 'like', '%'.$query.'%')
        ->orWhere('body', 'like', '%'.$query.'%')
        ->get();

        $events=\App\Models\Event::where('title', 'like', '%'.$query.'%')
        ->orWhere('description', 'like', '%'.$query.'%')
        ->orWhere('body', 'like', '%'.$query.'%')
        ->get();

        $posts=\App\Models\Post::where('title', 'like', '%'.$query.'%')
        ->orWhere('description', 'like', '%'.$query.'%')
        ->orWhere('body', 'like', '%'.$query.'%')
        ->get();

        $oavs=\App\Models\Oav::where('title', 'like', '%'.$query.'%')
        ->orWhere('description', 'like', '%'.$query.'%')
        ->orWhere('body', 'like', '%'.$query.'%')
        ->get();

        $news=\App\Models\News::where('title', 'like', '%'.$query.'%')
        ->orWhere('description', 'like', '%'.$query.'%')
        ->orWhere('body', 'like', '%'.$query.'%')
        ->get();

        return view('search', compact('query', 'courses', 'news', 'posts', 'events', 'oavs'));
    }

    public function gallery()
    {
        $galleryPage=\App\Models\GalleryPage::withTranslation(\App::getLocale())->first();
        MetaTag::set('title', $galleryPage->getTranslatedAttribute('seo_title', \App::getLocale()));
        MetaTag::set('description', $galleryPage->getTranslatedAttribute('seo_description', \App::getLocale()));
        MetaTag::set('keywords', $galleryPage->getTranslatedAttribute('seo_keywords', \App::getLocale()));
        return view('gallery', compact('galleryPage'));
    }

    public function videos()
    {
        $videos=\App\Models\Video::withTranslation(\App::getLocale())->get();
        $videoPage=\App\Models\VideoPage::withTranslation(\App::getLocale())->first();
        MetaTag::set('title', $videoPage->getTranslatedAttribute('seo_title', \App::getLocale()));
        MetaTag::set('description', $videoPage->getTranslatedAttribute('seo_description', \App::getLocale()));
        MetaTag::set('keywords', $videoPage->getTranslatedAttribute('seo_keywords', \App::getLocale()));
        return view('videos', compact('videos', 'videoPage'));
    }

    public function signIn(Request $request)
    {
        $name=$request->name;
        $phone=$request->phone;
        $email=$request->email;
        $body=$request->body;
        $course=$request->course;

        $message=<<<TEXT
        Murojat qoldirildi!

        Murojat turi: Kursga a'zo bo'lish
        Kurs nomi: {$course}
        Telefon: {$phone}
        Ismi: {$name}
        Pochta manzili: {$email}
        Qiziqishlari: {$body}
TEXT;
        
        $apiToken = "768420781:AAEzzh0nDnr3o067TNOBnafxm1QTe4fbilo";
        $data = [
            'chat_id' => '-1001194799621',
            'text' => $message
        ];
        $response = file_get_contents("https://api.telegram.org/bot$apiToken/sendMessage?" . http_build_query($data) );
    }

    public function like(Request $request)
    {
        $user_ip=$request->user_ip;
        $type=$request->type;
        $id=$request->id;
        $like=\App\Models\Like::where('user_ip', $user_ip)->where($type, $id)->first();
        if(!$like){
            $like=new \App\Models\Like();
            $like->user_ip=$user_ip;
            $like->$type=$id;
            $like->save();
           return true;
        }else{
            return false;
        }
    }

    public function subscribe(Request $request)
    {
        
        $email=$request->email;
        $message=<<<TEXT
        Murojat qoldirildi!

        Murojat turi: Haftalik yangilanishlarga a'zo bo'lish uchun
        Pochta manzili: {$email}
TEXT;
        
        $apiToken = "768420781:AAEzzh0nDnr3o067TNOBnafxm1QTe4fbilo";
        $data = [
            'chat_id' => '-1001194799621',
            'text' => $message
        ];
        $response = file_get_contents("https://api.telegram.org/bot$apiToken/sendMessage?" . http_build_query($data) );
    }
}
