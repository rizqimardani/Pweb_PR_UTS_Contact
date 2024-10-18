<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Faker\Factory as Faker;


class contactsController extends Controller
{
    //
    public function index()
    {
        $faker = Faker::create();

        $users = [];
        for($i = 0; $i <8 ; $i++ ){
            $users[] = [
                'name' => $faker->name,
                'email' => $faker->unique()->safeEmail,
                'phone' => $faker->phoneNumber,
                'address' => $faker->address,
            ];
        };

        return view('contact', ['users'=>$users]);
}
}
