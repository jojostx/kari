<?php

namespace Database\Seeders;

use App\Models\Newsfeed;
use App\Models\NewsfeedSubscription;
use App\Models\Payment;
use App\Models\Subscription;
use App\Models\User;
use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    public function run(): void
    {
        $this->call([
            UserSeeder::class,
            FaqCategorySeeder::class,
            FaqSeeder::class,
            PlanSeeder::class,
        ]);

        $users =  User::factory()
            ->verified()
            ->verified_phone()
            ->count(50)
            ->create();
        
        
        $users->each(function (User $user) {
            $payment = Payment::factory()->create(['user_id' => $user->id]);
            
            $subscription = Subscription::factory()->create(['user_id' => $user->id, 'payment_id' => $payment->id, 'refcode' => $payment->refcode, 'ends_at'=> now()->addYear()]);

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
    }
}
