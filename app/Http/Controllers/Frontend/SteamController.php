<?php

namespace App\Http\Controllers\Frontend;


use App\Models\Access\User\User;
use Illuminate\Http\Request;

use App\Http\Requests;
use App\Http\Controllers\Controller;

class SteamController extends Controller
{
    public function confirmLogin()
    {
        $steam_id = \SteamLogin::validate();
        $user = User::where('steam_id',$steam_id)->first();
        if (is_null($user)) {
            return view('frontend.auth.register')->with('steam_id',$steam_id);
        } else {
            \Auth::login($user,true);
            \Log::info('User has logged in.', ['user'=> [$user->id,$user->email]]);
            return redirect('/');
        }
    }
}
