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
    }
}
