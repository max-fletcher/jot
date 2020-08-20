<?php

/** @var \Illuminate\Database\Eloquent\Factory $factory */

use App\Contact;
use App\User;
use Faker\Generator as Faker;

$factory->define(Contact::class, function (Faker $faker) {
    return [
        // laravel is smart enough to know that if a user_id is passed when making new contacts,
        // it will not create a new user as per the line below.
        // ( i.e factory( Contact::class)->create(['user_id'=>4]) )
        // It will simply use that user_id that was passed to create a contact
        // BTW for some reason the User class needs to be imported at the top
        'user_id' => factory(User::class),
        'name' => $faker->name,
        'email' => $faker->email,
        'birthday' => '05/14/1988',
        'company' => $faker->company,
    ];
});
