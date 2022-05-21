<?php

namespace App\Http\Controllers\Front;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class HomeController extends Controller
{
   public function home(){

       return view('front.pages.home');
   }

   public function services(){
        $data['title'] = trans('lang.Services');
       return view('front.pages.services',$data);
   }

   public function projects(){
        $data['title'] = trans('lang.Projects');
       return view('front.pages.projects',$data);
   }

   public function about(){
        $data['title'] = trans('lang.AboutUs');
       return view('front.pages.about',$data);
   }

   public function contact(){
        $data['title'] = trans('lang.Contact');
       return view('front.pages.contact',$data);
   }
}
