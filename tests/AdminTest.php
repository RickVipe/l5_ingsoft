<?php

use Illuminate\Foundation\Testing\WithoutMiddleware;
use Illuminate\Foundation\Testing\DatabaseMigrations;
use Illuminate\Foundation\Testing\DatabaseTransactions;

class AdminTest extends TestCase
{
    /**
     * A basic test example.
     *
     * @return void
     */
    public function testExample()
    {
        $this->assertTrue(true);
    }

    /**
     * 
     * @group view
     */

    public function testIndexStudent()
    {
        $this->visit('/admins')
        	 ->see('Admin')
        	 ->dontSee('Something went wrong!');
    }
}
