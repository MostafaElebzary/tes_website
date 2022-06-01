<?php

namespace App\Http\Controllers\Front;

use App\Http\Controllers\Controller;
use App\Models\Category;
use App\Models\Page;
use App\Models\Partener;
use App\Models\Project;
use App\Models\Service;
use App\Models\Slider;
use App\Models\Team;
use App\Models\Testimonials;
use App\Models\WorkProcess;
use Illuminate\Http\Request;

class HomeController extends Controller
{
    public function home()
    {
        $data['slider'] = Slider::first();
        $data['services'] = Service::all();
        $data['about'] = Page::findOrFail(2);
        $data['vision'] = Page::findOrFail(3);
        $data['mission'] = Page::findOrFail(4);
        $data['projects'] = Project::all();
        $data['partners'] = Partener::all();

        return view('front.pages.home', $data);
    }

    public function services()
    {
        $data['title'] = trans('lang.Services');
        $data['services'] = Service::all();
        return view('front.pages.services', $data);
    }

    public function projects()
    {
        $data['title'] = trans('lang.Projects');
        $data['projects'] = Project::with('category')->get();
        $data['categories'] = Category::all();
        return view('front.pages.projects', $data);
    }

    public function about()
    {
        $data['title'] = trans('lang.AboutUs');
        $data['about'] = Page::findOrFail(2);
        $data['vision'] = Page::findOrFail(3);
        $data['mission'] = Page::findOrFail(4);
        return view('front.pages.about', $data);
    }

    public function contact()
    {
        $data['title'] = trans('lang.Contact');
        return view('front.pages.contact', $data);
    }
}
