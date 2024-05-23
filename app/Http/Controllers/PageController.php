<?php

namespace App\Http\Controllers;

use App\Models\CareerJob;
use Illuminate\Http\Request;
use Illuminate\Routing\Controller;

class PageController extends Controller
{
    public function about(){
        return view('web.default.view.pages.about');
    }

    public function contact(){
        return view('web.default.view.pages.contact');
    }
    public function privacyPolicy(){
        return view('web.default.view.pages.privacy');
    }
    public function termsCondition(){
        return view('web.default.view.pages.condition');
    }
    public function faq(){
        return view('web.default.view.pages.faq');
    }
    public function career(){
      $jobs = CareerJob::whereStatus('active')
                     ->where('end_date','>=' ,now()->format('Y-m-d'))
                     ->get();
        return view('web.default.view.pages.career', compact('jobs'));
    }

    public function careerJob($careerJob){
        $job = CareerJob::whereStatus('active')
                       ->where('end_date','>=' ,now()->format('Y-m-d'))
                       ->findOrFail($careerJob);
          return view('web.default.view.pages.job', compact('job'));
    }

    public function userManual(){
        return view('web.default.view.pages.userManual');
    }
    public function talent(){
        return view('web.default.view.pages.talentAcquisition');
    }
}
