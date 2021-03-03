<?php

namespace App\Http\Controllers;

use App\Models\Banners;
use App\Models\SuccessStory;
use Illuminate\Http\Request;

class SuccessStoriesController extends Controller
{
    public function index()
    {

        $lang            = app()->getLocale();

        $banners         = Banners::withTranslation([$lang])->where('slug', 'success-stories')->firstorFail()->translate($lang);

        $successstory       = SuccessStory::withTranslation([$lang])->orderBy('id' , 'desc')->get()->translate($lang);
        // dd($successstory);

        return view('success-stories' , compact('banners' , 'successstory'));
    }


    public function detail($slug)
    {

        $lang            = app()->getLocale();

        $successstory = SuccessStory::where('slug', $slug)->firstorFail();
        $successstory = $successstory->translate($lang);
// dd($successstory);
        return view('success-stories-detail', compact('successstory'));
    }
}
