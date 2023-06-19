<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class QuestionController extends Controller
{
    public function getFAQPage(){
        return view('faq');
    }

    public function getSubmitFAQ(){
        return view('submitQuestion');
    }

    public function getFAQFinal(){
        return view('faq-final');
    }
}
