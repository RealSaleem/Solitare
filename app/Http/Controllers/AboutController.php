<?php

namespace App\Http\Controllers;

use App\Models\AboutUs;
use App\Models\Banners;
use App\Models\Qualities;
use App\Models\Services;
use App\Models\Team;
use App\Models\Testimonials;
use Illuminate\Http\Request;

class AboutController extends Controller
{
    public function index(){
        $lang            = app()->getLocale();
        $aboutus       = AboutUs::withTranslation([$lang])->firstOrFail()->translate($lang);
    
        $qualities      = Qualities::withTranslation([$lang])->orderBy('id' , 'desc')->get()->translate($lang);
        // dd($qualities);

        $services       = Services::withTranslation([$lang])->where('status', 'PUBLISHED')->orderBy('id' , 'desc')->limit('6')->get();
        $services       = $services->translate($lang);
        // dd($services);

        $team       = Team::withTranslation([$lang])->where('status', 'PUBLISHED')->orderBy('order' , 'desc')->limit('6')->get();
        $team       = $team->translate($lang);
        // dd($team);

        $testimonials       = Testimonials::withTranslation([$lang])->orderBy('id' , 'desc')->limit('3')->get()->translate($lang);
        // dd($testimonials);

        $banners      = Banners::withTranslation([$lang])->where('slug' , 'about-us')->firstorFail()->translate($lang);
        // dd($banners);

        return view('about-us', compact('aboutus' , 'qualities' , 'services' , 'team' , 'testimonials' , 'banners'));
    }
}

