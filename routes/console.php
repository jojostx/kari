<?php

use App\Models\BankAccount;
use App\Models\Newsfeed;
use App\Models\NewsfeedSubscription;
use App\Models\Payment;
use App\Models\Payout;
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

    $users_2 = User::factory()
        ->verified()
        ->verified_phone()
        ->count(4)
        ->create();

    // creates approved payments, subscription and payouts
    $users->each(function (User $user) {

        //assign bank account to users whose first name start with 'a'
        if (str_starts_with($user->first_name, 'a')) {
            $bank_account = BankAccount::factory()->create(['user_id' => $user->id]);
        }

        $payment = Payment::factory()->create(['user_id' => $user->id]);

        $subscription = Subscription::factory()->create([
            'user_id' => $user->id,
            'tag' => $payment->tag,
            'payment_id' => $payment->id,
            'refcode' => $payment->refcode,
        ]);
        $subscription->customer()->associate($user);
        $payment->customer()->associate($user);


        $payment_2 = Payment::factory()->create(['user_id' => $user->id]);

        $subscription_2 = Subscription::factory()->create([
            'tag' => $payment->tag,
            'user_id' => $user->id,
            'payment_id' => $payment_2->id,
            'refcode' => $payment_2->refcode,
        ]);
        $payment_2->customer()->associate($user);
        $subscription_2->customer()->associate($user);

        Payout::factory()->create([
            'tag' => $subscription_2->tag,
            'amount' => $subscription_2->biannual_payout_amount,
            'subscription_id' => $subscription_2->id,
            'status' => Payout::REQUESTED,
            'refcode' => null,
            'user_id' => $user->id,
        ]);

        Payout::factory()->create([
            'tag' => $subscription_2->tag,
            'amount' => $subscription_2->biannual_payout_amount,
            'subscription_id' => $subscription_2->id,
            'refcode' => null,
            'status' => Payout::CREATED,
            'user_id' => $user->id,
        ]);

        Payout::factory()->create([
            'tag' => $subscription_2->tag,
            'amount' => $subscription_2->biannual_payout_amount,
            'subscription_id' => $subscription_2->id,
            'refcode' => $subscription_2->refcode,
            'status' => Payout::WITHDRAWN,
            'user_id' => $user->id,
        ]);
    });

    //creates unapproved payments
    $users->each(function (User $user) {
        $payment = Payment::factory()->create(['user_id' => $user->id, 'status' => false]);

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
