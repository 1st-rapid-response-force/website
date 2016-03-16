<?php

namespace App\Http\Controllers\Frontend;


use App\Models\Access\User\Steam;
use App\Models\Access\User\User;
use App\Repositories\Frontend\User\UserContract;
use Illuminate\Http\Request;

use App\Http\Requests;
use App\Http\Controllers\Controller;

/**
 * Class SteamController
 * @package App\Http\Controllers\Frontend
 */
class SteamController extends Controller
{
    /**
     * @var
     */
    protected $user;

    /**
     * SteamController constructor.
     * @param UserContract $user
     */
    public function __construct(UserContract $user)
    {
        $this->user = $user;
    }


    /**
     * @return $this|\Illuminate\Http\RedirectResponse|\Illuminate\Routing\Redirector
     */
    public function confirmLogin()
    {
        $steam_id = \SteamLogin::validate();
        $steam = Steam::where('steam_id',$steam_id)->first();
        if (is_null($steam)) {
            return view('frontend.auth.register')->with('steam_id',$steam_id);
        } else {
            \Auth::login($steam->user,true);
            \Log::info('User has logged in.', ['user'=> [$steam->user->id,$steam->user->email]]);
            return redirect('/');
        }

    }

    /**
     * @param Request $request
     * @return \Illuminate\Http\RedirectResponse|\Illuminate\Routing\Redirector
     */
    public function postRegister(Request $request)
    {
        $validator = \Validator::make($request->all(), [
            'email' => 'required|unique:users|max:255',
            'steam_id' => 'required',
        ]);

        if ($validator->fails()) {
            return redirect(route('frontend.index'));
        }

        try {
            $user = $this->user->create($request->all());
            \Auth::login($user,true);
            \Log::info('User has logged in.', ['user'=> [$user->id,$user->email]]);
            \Notification::success('We have sent you an email to confirm your account.');
            return redirect(route('frontend.apply'));
        } catch (\ErrorException $e) {
            \Notification::error('There was an error creating your account, please try again later.');
            if(env('APP_DEBUG', false))
                \Notification::error($e->getCode().' - '.$e->getMessage());
            return redirect(route('frontend.index'));
        }


    }
}
