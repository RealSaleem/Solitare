<?php

namespace App\Http\Controllers;

use App\Models\AboutUs;
use App\Models\NewsEvents;
use App\Models\Partners;
use App\Models\Services;
use App\Models\Slider;
use Illuminate\Http\Request;

class HomeController extends Controller
{
    public function index()
    {

        $lang            = app()->getLocale();

        $slider       = Slider::withTranslation([$lang])->where('status', 'PUBLISHED')->orderBy('id', 'desc')->limit('5')->get();
        $slider       = $slider->translate($lang);
        // dd($slider);

        $services       = Services::withTranslation([$lang])->where('status', 'PUBLISHED')->orderBy('order', 'desc')->limit('6')->get();
        $services       = $services->translate($lang);
        // dd($services);

        $aboutus       = AboutUs::withTranslation([$lang])->firstOrFail()->translate($lang);

        $partners       = Partners::withTranslation([$lang])->where('status', 'PUBLISHED')->orderBy('id', 'desc')->limit('5')->get();
        $partners       = $partners->translate($lang);
        // dd($partners);

        $newsevents       = NewsEvents::withTranslation([$lang])->orderBy('id', 'desc')->limit('3')->get()->translate($lang);
        // dd($newsevents);

        return view('index', compact('services', 'aboutus', 'partners', 'newsevents', 'slider'));
    }
}
