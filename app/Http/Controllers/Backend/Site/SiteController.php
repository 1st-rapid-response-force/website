<?php

namespace App\Http\Controllers\Backend\Site;

use App\Models\Site\faq;
use App\Repositories\Backend\Site\SiteContract;
use Illuminate\Http\Request;

use App\Http\Requests;
use App\Http\Controllers\Controller;

class SiteController extends Controller
{
    protected $site;

    public function __construct(SiteContract $site)
    {
        $this->site = $site;
    }

    public function faq()
    {
        return view('backend.site.faq.index')
            ->with('faqs',$this->site->getAllFAQs());
    }
}
