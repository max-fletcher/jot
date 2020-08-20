<?php

namespace Tests\Feature;

use App\User;
use App\Contact;
use Illuminate\Foundation\Testing\RefreshDatabase;
use Illuminate\Foundation\Testing\WithFaker;
use Tests\TestCase;

class BirthdaysTest extends TestCase
{   

    /**
     * A basic feature test example.
     *
     * @return void
     */

    use RefreshDatabase;

    public function test_contacts_with_birthdays_in_the_current_month_can_be_fetched()
    {   
        $user = factory(User::class)->create();
        
        // create a contact that has a birthday 1 year prior (subYear subtracts 1 year from now)
        $birthdayContact = factory(Contact::class)->create([
            'user_id' => $user->id,
            'birthday' => now()->subYear(),
        ]);

        // create a contact that has a birthday 1 year prior (subMonth subtracts 1 month from now)
        $noBirthdayContact = factory(Contact::class)->create([
            'user_id' => $user->id,
            'birthday' => now()->subMonth(),
        ]);

        $this->get('/api/birthdays?api_token='. $user->api_token)
        ->assertJsonCount(1)
        ->assertJson([
            'data' => [
                [
                    "data" => [
                        'contact_id' => $birthdayContact->id
                    ]
                ]
            ]
        ]);
        
    }
    
}
