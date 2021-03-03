<?php

namespace App\Http\Controllers;

use App\Models\Banners;
use App\Models\Partners;
use Illuminate\Http\Request;

class PartnersController extends Controller
{
    public function index(){
        $lang            = app()->getLocale();

        $partners       = Partners::withTranslation([$lang])->where('status', 'PUBLISHED')->orderBy('id' , 'desc')->get();
        $partners       = $partners->translate($lang);

        $banners      = Banners::withTranslation([$lang])->where('slug' , 'partners')->firstorFail()->translate($lang);
        // dd($banners);
        return view('partners', compact('partners' , 'banners'));
    }


    public function detail($slug){

        $lang            = app()->getLocale();

        $partners = Partners::withTranslation([$lang])->where('slug', $slug)->firstorFail();
        $partners = $partners->translate($lang);

        $banners      = Banners::withTranslation([$lang])->where('slug' , 'partners')->firstorFail()->translate($lang);

        return view('partner-detail', compact('partners' , 'banners'));
    }
}


