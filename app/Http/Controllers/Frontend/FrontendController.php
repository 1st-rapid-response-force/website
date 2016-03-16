<?php

namespace App\Http\Controllers\Frontend;

use App\Http\Controllers\Controller;
use App\Models\Access\User\User;
use App\Models\File\Rank;
use App\Repositories\Frontend\User\Steam\SteamContract;

/**
 * Class FrontendController
 * @package App\Http\Controllers
 */
class FrontendController extends Controller
{
    protected $steam;

    public function __construct(SteamContract $steam)
    {
        $this->steam = $steam;
    }

    /**
     * @return \Illuminate\View\View
     */
    public function index()
    {
        $video = ['/videos/intro1.mp4','/videos/intro3.mp4'];
        $key = array_rand($video,1);
        return view('frontend.index')->with('video',$video[$key]);
    }

    /**
     * @return \Illuminate\Contracts\View\Factory|\Illuminate\View\View
     */
    public function about()
    {
        return view('frontend.about');
    }

    /**
     * @return \Illuminate\Contracts\View\Factory|\Illuminate\View\View
     */
    public function servers()
    {
        return view('frontend.servers');
    }

    /**
     * @return \Illuminate\Contracts\View\Factory|\Illuminate\View\View
     */
    public function modpack()
    {
        return view('frontend.modpack');
    }

    /**
     * @return \Illuminate\Contracts\View\Factory|\Illuminate\View\View
     */
    public function structure()
    {
        $enlistedRanks = Rank::whereIn('id', array(2,3,4,5,6,7,8,9,10,11,12,13))->get();
        $warrantRanks = Rank::whereIn('id', array(14,15,16,17,18))->get();
        $officerRanks = Rank::whereIn('id', array(19,20,21,22,23,24))->get();
        return view('frontend.structure')
            ->with('enlistedRanks',$enlistedRanks)
            ->with('warrantRanks',$warrantRanks)
            ->with('officerRanks',$officerRanks);

    }

    /**
     * @return \Illuminate\Contracts\View\Factory|\Illuminate\View\View
     */
    public function apply()
    {
        $user = \Auth::User();
        $eligible = collect();

        if(\Auth::check())
        {
            if($user->steam->vac_ban)
            {
                $eligible->push('vac_ban');
            } else {
                $eligible->push('no_vac_ban');
            }

            if(!$user->steam->arma3)
            {
                $eligible->push('arma3');
            } else {
                $eligible->push('owns_arma3');
            }

        }
        return view('frontend.apply')->with('eligible',$eligible);
    }

    /**
     * @return \Illuminate\Contracts\View\Factory|\Illuminate\View\View
     */
    public function faq()
    {
        return view('frontend.faq');
    }

    /**
     * @return \Illuminate\Contracts\View\Factory|\Illuminate\View\View
     */
    public function contact()
    {
        return view('frontend.contact');
    }
}
