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

    public function testsendEmailErrorIfEmailHasAtSign(){
       $response = $this->post('/sendmail',['name'=>"ati",'friend_name'=>so,'friend_email'=>'abc@']);
       $response->assertStatus(200);
    }
}