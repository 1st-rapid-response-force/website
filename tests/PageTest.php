<?php

use Illuminate\Foundation\Testing\WithoutMiddleware;
use Illuminate\Foundation\Testing\DatabaseMigrations;
use Illuminate\Foundation\Testing\DatabaseTransactions;

class PageTest extends TestCase
{
    public function testViewHome()
    {
        $this->visit('/')->see('Home');
    }

    public function testViewAbout()
    {
        $this->visit('/about')->see('About');
    }

    public function testViewServers()
    {
        $this->visit('/servers')->see('Servers');
    }

    public function testViewModpack()
    {
        $this->visit('/modpack')->see('Modpack');
    }

    public function testViewStructure()
    {
        $this->visit('/structure-assignments')->see('Structure and Assignments');
    }

    public function testViewApply()
    {
        $this->visit('/apply')->see('Apply');
    }

    public function testViewFAQ()
    {
        $this->visit('/faq')->see('FAQs');
    }

    public function testViewContact()
    {
        $this->visit('/contact')->see('Contact Us');
    }

}
