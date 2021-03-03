<?php

namespace App\Http\Controllers;

use App\Models\Banners;
use App\Models\Career;
use App\Models\JobRoles;
use Carbon\Carbon;
use Illuminate\Http\Request;

class CareerController extends Controller
{
    public function index()
    {
        $lang            = app()->getLocale();

        $banners      = Banners::withTranslation([$lang])->where('slug' , 'career')->firstorFail()->translate($lang);

        $jobroles       = JobRoles::withTranslation([$lang])->orderBy('id' , 'desc')->get();
        $jobroles       = $jobroles->translate($lang);
        // dd($jobroles);
        return view('career', compact('banners' , 'jobroles'));
    }

    public function career(Request $request)
    {
        $file = $request->file('resume');
        $path = $request->resume->store('public/career');

        $data = [
            'email'             =>  $request->email,
            'phone'             =>  $request->phone,
            'first_name'        =>  $request->first_name,
            'last_name'         =>  $request->last_name,
            'role'              =>  $request->role,
            'city'              =>  $request->city,
            'experience'        =>  $request->experience,
            'notice_period'     =>  $request->notice_period,
            'current_salary'    =>  $request->current_salary,
            'expected_salary'   =>  $request->expected_salary,
            'resume'            =>  str_replace("public/",'',$path),
            'portfolio_url'     =>  $request->portfolio_url,
            'reason'            =>  $request->reason,
            'job_type'          =>  $request->job_type,
            'created_at'        =>  Carbon::now(),
        ];
        Career::insert($data);
        return redirect('career')->withSuccess('Your Message Sent Successfully');
    }
}
