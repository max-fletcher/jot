<?php

namespace Tests\Feature;

use Illuminate\Foundation\Testing\RefreshDatabase;
use Illuminate\Foundation\Testing\WithFaker;
use Tests\TestCase;
use App\Contact;

class ContactsTest extends TestCase
{
    /**
     * A basic feature test example.
     *
     * @return void
     */
    use RefreshDatabase;

    public function test_a_contact_can_be_added()
    {
        $response = $this->post('/api/contacts', [
            'name' => 'Test User',
            'email' => 'testuser@test.test',
            'birthday' => '19/7/1970',
            'company' => 'ABC company',
        ]);

        $this->assertCount(1 , Contact::all());
        
        $contact = Contact::first();
        $this->assertEquals('Test User' , $contact->name);
        $this->assertEquals('testuser@test.test' , $contact->email);
        $this->assertEquals('19/7/1970' , $contact->birthday);
        $this->assertEquals('ABC company' , $contact->company);
        
    }

    public function test_a_name_is_required(){

        $response = $this->post('/api/contacts', [
            'email' => 'testuser@test.test',
            'birthday' => '19/7/1970',
            'company' => 'ABC company',
        ]);

        $response->assertSessionHasErrors('name');
        $this->assertCount(0 , Contact::all());   

    }

    public function test_an_email_is_required(){

        $response = $this->post('/api/contacts', [
            'name' => 'Test User',
            'birthday' => '19/7/1970',
            'company' => 'ABC company',
        ]);

        $response->assertSessionHasErrors('email');
        $this->assertCount(0 , Contact::all());   

    }
}
