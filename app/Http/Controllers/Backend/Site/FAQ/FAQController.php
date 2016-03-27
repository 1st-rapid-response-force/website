<?php

namespace App\Http\Controllers\Backend\Site\FAQ;

use App\Repositories\Backend\Site\SiteContract;
use Illuminate\Http\Request;

use App\Http\Requests;
use App\Http\Controllers\Controller;

class FAQController extends Controller
{
    protected $site;

    public function __construct(SiteContract $site)
    {
        $this->site = $site;
    }

    public function index()
    {
        return view('backend.site.faq.index')
            ->with('faqs',$this->site->getAllFAQs());
    }

    public function create()
    {
        return view('backend.site.faq.create');
    }

    public function store(Request $request)
    {
        $this->validate($request, [
            'question' => 'required',
            'order' => 'required|integer',
            'answer' => 'required',
        ]);
        $this->site->createFAQ($request->all());
        \Notification::success('FAQ created successfully.');
        return redirect(route('admin.site.faq.index'));
    }

    public function edit($id)
    {
        return view('backend.site.faq.edit')
            ->with('faq',$this->site->getFAQ($id));
    }

    public function update($id, Request $request)
    {
        $this->site->update($id,$request->all());
        \Notification::success('FAQ updated successfully.');
        return redirect()->back();
    }

    public function destroy($id)
    {
        $this->site->deleteFAQ($id);
        \Notification::success('FAQ deleted successfully.');
        return redirect(route('admin.site.faq.index'));
    }
}
