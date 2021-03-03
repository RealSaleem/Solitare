<?php

namespace App\Http\Controllers;

use App\Models\Banners;
use App\Models\Solutions;
use Illuminate\Http\Request;

class SolutionController extends Controller
{
    public function index(){
        $lang            = app()->getLocale();

        $solutions      = Solutions::withTranslation([$lang])->orderBy('id' , 'desc')->get()->translate($lang);

        $banners      = Banners::withTranslation([$lang])->where('slug' , 'solutions')->firstorFail()->translate($lang);
        // dd($banners);
        // dd($solutions);
        return view('solution-list', compact('solutions' , 'banners'));
    }


    public function detail($slug){

        $lang            = app()->getLocale();

        $solutions = Solutions::where('slug', $slug)->firstorFail();
        $solutions = $solutions->translate($lang);

        $banners      = Banners::withTranslation([$lang])->where('slug' , 'solutions')->firstorFail()->translate($lang);


        return view('solution', compact('solutions' , 'banners'));
    }
}

