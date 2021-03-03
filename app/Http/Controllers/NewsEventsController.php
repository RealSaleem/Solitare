<?php

namespace App\Http\Controllers;

use App\Models\Banners;
use App\Models\Category;
use App\Models\Events;
use App\Models\NewsEvents;
use Illuminate\Http\Request;

class NewsEventsController extends Controller
{
    public function index(Request $request)
    {

        $lang            = app()->getLocale();

        $banners      = Banners::withTranslation([$lang])->where('slug', 'news-and-events')->firstorFail()->translate($lang);
        // dd($banners);
        $category       = Category::withTranslation([$lang])->get();
        $category       = $category->translate($lang);
        // dd($category);

        // $params = $request->all();
        // $category_id = null;
        // $basenewsevents   = NewsEvents::withTranslation([$lang]);
        // if($params != null){
        //     if(isset($params['category_id'])){
        //     $category_id = $params['category_id'];
        //     $basenewsevents = $basenewsevents->where('category_id', $category_id);
        //     }
        // }
        // $newsevents       = $basenewsevents->get();
        // dd($newsevents);
        $newsevents       = NewsEvents::withTranslation([$lang])->orderBy('id', 'desc')->get()->translate($lang);
        // dd($newsevents);

        $events       = Events::withTranslation([$lang])->orderBy('id', 'desc')->get()->translate($lang);
        // dd($events);

        return view('news-and-events', compact('banners', 'newsevents', 'category' , 'events'));
    }


    public function detail($id)
    {

        $lang            = app()->getLocale();

        $newsevents = NewsEvents::withTranslation([$lang])->where('id', $id)->firstorFail();
        $newsevents->views = $newsevents->views + 1;
        $newsevents->save();
        $newsevents = $newsevents->translate($lang);

        return view('news-detail', compact('newsevents'));
    }


    public function eventsdetail($id)
    {

        $lang            = app()->getLocale();

        $events = Events::withTranslation([$lang])->where('id', $id)->firstorFail();
        $events->views = $events->views + 1;
        $events->save();
        $events = $events->translate($lang);

        return view('events-detail', compact('events'));
    }
}
