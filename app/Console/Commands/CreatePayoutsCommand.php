<?php

namespace App\Console\Commands;

use App\Models\Subscription;
use Illuminate\Console\Command;
use Illuminate\Support\Facades\Log;

class CreatePayoutsCommand extends Command
{
    /**
     * The name and signature of the console command.
     *
     * @var string
     */
    protected $signature = 'create:payouts';

    /**
     * The console command description.
     *
     * @var string
     */
    protected $description = 'scans for subscriptions with pending payouts and creates them';

    /**
     * Create a new command instance.
     *
     * @return void
     */
    public function __construct()
    {
        parent::__construct();
    }

    /**
     * Execute the console command.
     *
     * @return int
     */
    public function handle()
    {
        $subscriptions = Subscription::hasUncreatedPayouts()->get();

        if ($subscriptions->isEmpty()) {
            $this->info('There are no subscriptions with pending payouts');
            
            return;
        }

        $unsuccessful_payouts = collect([]);

        foreach ($subscriptions as $sub) {
            $next_payout_at = $sub->next_payout_at;

            $sub->createPayout();

            if ($sub->refresh()->next_payout_at == $next_payout_at) {
                $unsuccessful_payouts->push($sub);
            }
        }

        if ($unsuccessful_payouts->isNotEmpty()) {
            Log::emergency('Failed to create payouts for the following subscriptions', $unsuccessful_payouts);
        }

        $count = $subscriptions->count() - $unsuccessful_payouts->count();

        $this->info("Successfully created {$count} payouts");

        return Command::SUCCESS;
    }
}
