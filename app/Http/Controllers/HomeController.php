<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class HomeController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
   /*  public function __construct()
    {
        $this->middleware('auth');
    } */

     public function index(){
        return view('index');
    }
   public function download(){
        return view('download');
    }
  
     public function about(){
        return view('about');
    }
     public function contact(){
        return view('contact');
    }
     public function vendor(){
        return view('vendor');
    }
     public function faq(){
        return view('faq');
    }
      public function carrier(){
        return view('carrier');
    }
     public function terms(){
        return view('terms');
    }
     public function privacy(){
        return view('privacy');
    }
     public function guide(){
        return view('guide');
    }
}
