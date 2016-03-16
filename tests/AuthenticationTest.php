<?php

use Illuminate\Foundation\Testing\WithoutMiddleware;
use Illuminate\Foundation\Testing\DatabaseMigrations;
use Illuminate\Foundation\Testing\DatabaseTransactions;

class AuthenticationTest extends TestCase
{

    public function testAuthenticationCheck()
    {
        $user = factory(App\Models\Access\User\User::class)->create();
        $this->actingAs($user)
            ->visit('/')
            ->see($user->name);
    }

}
