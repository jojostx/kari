<?php

use App\Models\Newsfeed;
use App\Models\NewsfeedSubscription;
use App\Models\Payment;
use App\Models\Subscription;
use App\Models\User;
use Illuminate\Foundation\Inspiring;
use Illuminate\Support\Facades\Artisan;

/*
|--------------------------------------------------------------------------
| Console Routes
|--------------------------------------------------------------------------
|
| This file is where you may define all of your Closure based console
| commands. Each Closure is bound to a command instance allowing a
| simple approach to interacting with each command's IO methods.
|
*/

Artisan::command('inspire', function () {
    $this->comment(Inspiring::quote());
})->purpose('Display an inspiring quote');

Artisan::command('setup:prod', function () {
    $this->info("setting up database for feature preview");

    $users = User::factory()
        ->verified()
        ->verified_phone()
        ->count(50)
        ->create();


    $users->each(function (User $user) {
        $payment = Payment::factory()->create(['user_id' => $user->id]);

        $subscription = Subscription::factory()->create(['user_id' => $user->id, 'payment_id' => $payment->id, 'refcode' => $payment->refcode, 'ends_at' => now()->addYear()]);

        $subscription->customer()->associate($user);

        $payment->customer()->associate($user);
    });

    $users->each(function (User $user) {
        $payment = Payment::factory()->create(['user_id' => $user->id]);

        $subscription = Subscription::factory()->create(['user_id' => $user->id, 'payment_id' => $payment->id, 'refcode' => $payment->refcode, 'ends_at' => now()->addYear()]);

        $subscription->customer()->associate($user);

        $payment->customer()->associate($user);
    });

    $users->each(function (User $user) {
        $payment = Payment::factory()->create(['user_id' => $user->id, 'status' => false, 'refcode' => null]);

        $payment->customer()->associate($user);
    });

    Newsfeed::factory()
        ->count(20)
        ->create();

    NewsfeedSubscription::factory()
        ->count(20)
        ->create();

    $this->info('The command was successful!');
})->purpose('sets up the database for feature preview by seeding fake data');
