<?php

namespace Database\Seeders;

use App\Models\User;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Str;

class UserSeeder extends Seeder
{
    public function run()
    {
        DB::table('users')->insert([
            'first_name' => 'onyedika',
            'middle_name' => 'john',
            'last_name' => 'ikuru',
            'phone_number' => '08034081360',
            'phone_number_e164' => '+2348034081360',
            'email' => 'ikuskid7@kariinvestment.com',
            'email_verified_at' => \now(),
            'phone_verified_at' => \now(),
            'password' => '$2y$10$92IXUNpkjO0rOQ5byMi.Ye4oKoEa3Ro9llC/.og/at2.uheWG/igi', // password
            'remember_token' => Str::random(10),
        ]);
    }
}
