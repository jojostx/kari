<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateSubscriptionsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('subscriptions', function (Blueprint $table) {
            $table->id();
            $table->uuid('refcode');
            $table->unsignedInteger(column: 'principal');
            $table->float(column: 'interest', total: 4, places: 3, unsigned: true);
            $table->foreignId('user_id')->constrained();
            $table->foreignId('plan_id')->constrained();
            $table->foreignId('payment_id')->constrained();
            $table->timestamp('ends_at');
            $table->timestamps();
            $table->softDeletes();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('subscriptions');
    }
}
