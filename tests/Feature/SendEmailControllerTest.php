<?php

namespace Tests\Feature;

use Illuminate\Foundation\Testing\RefreshDatabase;
use Illuminate\Foundation\Testing\WithFaker;
use Tests\TestCase;

class SendEmailControllerTest extends TestCase
{
    /**
     * A basic feature test example for welcome page.
     *
     * @return void
     */
    public function testWelcomePage()
    {
        $response = $this->get('/');

        $response->assertStatus(200)
        ->assertViewIs('welcome');
    }

    public function testSendMailPage()
    {
        $response = $this->get('/sendemail');

        $response->assertStatus(200)
        ->assertViewIs('sendemail.index');
    }

    // public function testsendEmailErrorIfEmailHasAtSign(){
    //    $this->markTestIncomlete('this test hasnt not been implemented);
    // }
}