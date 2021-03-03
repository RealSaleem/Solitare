<?php

namespace App\Http\Controllers;

use App\Models\GeneralQueries;
use Carbon\Carbon;
use Illuminate\Http\Request;

class GeneralQueriesController extends Controller
{
    public function index(){
        return view('general-queries');
    }

    public function general_qu(Request $request)
    {
        $data = [
            'name'          =>  $request->name,
            'email'         =>  $request->email,
            'phone'         =>  $request->phone,
            'message'       =>  $request->message,
            'created_at'    =>  Carbon::now(),
        ];
        GeneralQueries::insert($data);
        return redirect('general-queries')->withSuccess('Your Message Sent Successfully');
    }
}
