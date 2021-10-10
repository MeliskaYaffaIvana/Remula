<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Hash;
use DB;
class UserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('users')->insert([
            'username' => 'Provider',
            'phone' => '082234567654',
            'email' => 'provider@gmail.com',
            'address' => 'Malang',
            'password' => Hash::make('provider123'),
            'role' => 'provider',
            'created_at' => \Carbon\Carbon::now(),
            'email_verified_at' => \Carbon\Carbon::now()
        ]);
        DB::table('users')->insert([
            'username' => 'Customer',
            'phone' => '085379865430',
            'email' => 'customer@gmail.com',
            'address' => 'Malang',
            'password' => Hash::make('customer123'),
            'role' => 'customer',
            'created_at' => \Carbon\Carbon::now(),
            'email_verified_at' => \Carbon\Carbon::now()
        ]);
    }
}
