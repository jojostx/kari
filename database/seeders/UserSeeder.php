<?php

namespace Database\Seeders;

use App\Notifications\AdminCreatedNotification;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Notification;
use Illuminate\Support\Str;

class UserSeeder extends Seeder
{
    public function run()
    {
        $name = 'Kariinvestment [Support]';
        $email = 'support@kariinvestment.com';
        $password = Str::random();

        DB::table('users')->insert([
            'first_name' => 'support',
            'middle_name' => 'support',
            'last_name' => 'kariinvestment',
            'phone_number' => '07725948803',
            'phone_number_e164' => '+447725948803',
            'email' => $email,
            'email_verified_at' => \now(),
            'phone_verified_at' => \now(),
            'password' => Hash::make($password),
            'remember_token' => Str::random(10),
            'is_admin' => true,
        ]);

        Notification::route('mail', [$email => $name])
            ->notify(new AdminCreatedNotification($name, $email, $password));
    }
}
