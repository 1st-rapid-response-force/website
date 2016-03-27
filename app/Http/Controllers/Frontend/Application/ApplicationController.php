<?php

namespace App\Http\Controllers\Frontend\Application;

use App\Repositories\Frontend\User\ApplicationContract;
use Illuminate\Http\Request;

use App\Http\Requests;
use App\Http\Controllers\Controller;

class ApplicationController extends Controller
{
    protected $application;

    public function __construct(ApplicationContract $application)
    {
        $this->application = $application;
    }

    public function index()
    {
        if(isset(\Auth::user()->application))
        {
            \Notification::warning('You need to apply before you can view your application.');
            return redirect(route('frontend.apply'));
        }
        return view('frontend.applications.index')
            ->with('application', \Auth::user()->application);
    }

    public function create()
    {
        if(isset(\Auth::user()->application))
        {
            return view('frontend.applications.create');
        }
        \Notification::warning('You have already applied.');
        return redirect(route('application.index'));

    }

    public function store(Request $request)
    {
        $user = \Auth::user();
        $this->application->create($user,$request->all());
        \Notification::success('You have submitted your application, we will keep you up to date via email and you can manually check the status of your application via this site.');
        return redirect(route('application.index'));
    }

}
