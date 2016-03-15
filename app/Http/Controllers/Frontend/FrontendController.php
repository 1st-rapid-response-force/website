<?php

namespace App\Http\Controllers\Frontend;

use App\Http\Controllers\Controller;

/**
 * Class FrontendController
 * @package App\Http\Controllers
 */
class FrontendController extends Controller
{
    /**
     * @return \Illuminate\View\View
     */
    public function index()
    {
        javascript()->put([
            'test' => 'it works!',
        ]);

        $video = ['/videos/intro1.mp4','/videos/intro3.mp4'];
        $key = array_rand($video,1);
        return view('frontend.index')->with('video',$video[$key]);
    }

    public function about()
    {
        return view('frontend.about');
    }

    public function servers()
    {
        return view('frontend.servers');
    }

    public function modpack()
    {
        return view('frontend.modpack');
    }

    public function structure()
    {
        return view('frontend.structure');
    }

    public function apply()
    {
        return view('frontend.apply');
    }

    public function faq()
    {
        return view('frontend.faq');
    }

    public function contact()
    {
        return view('frontend.contact');
    }

    /**
     * @return \Illuminate\View\View
     */
    public function macros()
    {
        return view('frontend.macros');
    }
}
