<?php

use Illuminate\Foundation\Testing\WithoutMiddleware;
use Illuminate\Foundation\Testing\DatabaseMigrations;
use Illuminate\Foundation\Testing\DatabaseTransactions;

class PageTest extends TestCase
{
    /**
     * A basic test example.
     *
     * @return void
     */
    public function testPublic()
    {
        $this->visit('/')->see('Home');
        $this->visit('/about')->see('About');
        $this->visit('/servers')->see('Servers');
        $this->visit('/modpack')->see('Modpack');
        $this->visit('/structure-assignments')->see('Structure and Assignments');
        $this->visit('/apply')->see('Apply');
        $this->visit('/faq')->see('FAQs');
        $this->visit('/contact')->see('Contact Us');
    }

}
