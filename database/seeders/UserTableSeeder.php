<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class UserTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('users')->insert([
            'name' => 'user1',
            'email' => 'user1@gmail.com',
            'password' => bcrypt('12345678'),
            'phoneNumber' => '998938044321',
            'postalCode' => '1234567',
            'cityName' => 'Tashkent',
            'dateOfBirth' => '2000-04-26',
            'passportNumber' => 'AB1233211',
        ]);
    }
}
