<?php

use Illuminate\Foundation\Testing\WithoutMiddleware;
use Illuminate\Foundation\Testing\DatabaseMigrations;
use Illuminate\Foundation\Testing\DatabaseTransactions;

class StudentTest extends TestCase
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
        $this->visit('/students')
        	 ->see('Students')
        	 ->dontSee('Something went wrong!');
    }
}
