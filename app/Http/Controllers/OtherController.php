<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class OtherController extends Controller
{
    public function FAQ()
    {
        return view('Pages.Others.faq');
    }

    public function Career()
    {
        return view('Pages.Others.career');
    }
    public function JobDetails()
    {
        return view('Pages.Others.job-details');
    }
    public function PrivacyPolicy()
    {
        return view('Pages.Others.privacy-policy');
    }
    public function TermsAndCondition()
    {
        return view('Pages.Others.terms-and-condition');
    }
}
