<?php

namespace App\Http\Controllers;

use App\Models\Banners;
use App\Models\Services;
use Illuminate\Http\Request;

class ServicesController extends Controller
{
    public function index(){
        $lang            = app()->getLocale();

        $services       = Services::withTranslation([$lang])->where('status', 'PUBLISHED')->orderBy('order' , 'desc')->get();
        $services       = $services->translate($lang);

        $banners      = Banners::withTranslation([$lang])->where('slug' , 'services')->firstorFail()->translate($lang);
        // dd($banners);
        return view('services', compact('services' , 'banners'));
    }


    public function detail($slug){

        $lang            = app()->getLocale();

        $services = Services::where('slug', $slug)->firstorFail();
        $services = $services->translate($lang);

        $banners      = Banners::withTranslation([$lang])->where('slug' , 'services')->firstorFail()->translate($lang);

        return view('services-detail', compact('services' , 'banners'));
    }
}

