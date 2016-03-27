<?php namespace App\Http\Controllers\Backend\Access\Application;

use App\Repositories\Backend\User\ApplicationContract;
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
        return view('backend.access.application.index')
            ->with('applications',$this->application->getAllActive());
    }
    public function index_declined()
    {
        return view('backend.access.application.index_declined')
            ->with('applications',$this->application->getAllDeclined());
    }
    public function index_accepted()
    {
        return view('backend.access.application.index_accepted')
            ->with('applications',$this->application->getAllAccepted());
    }

    public function edit($id)
    {
        return view('backend.access.application.edit')
            ->with('application',$this->application->find($id));
    }

    public function update($id, Request $request)
    {
        $this->application->update($id,$request->all());
        \Notification::success('Application updated successfully.');
        return redirect()->back();
    }

    public function destroy($id)
    {
        $this->site->delete($id);
        \Notification::success('Application deleted successfully.');
        return redirect(route('admin.site.faq.index'));
    }
}
