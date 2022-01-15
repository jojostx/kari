<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreatePlansTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('plans', function (Blueprint $table) {
            $table->id();
            $table->uuid('tag');
            $table->text('icon')->nullable();
            $table->string('name')->unique();
            $table->unsignedInteger('principal')->unique();
            $table->float(column: 'interest', total: 4, places: 3, unsigned: true);
            $table->float(column: 'bonus', total: 4, places: 3, unsigned: true);
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('plans');
    }
}
