<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('newsfeeds', function (Blueprint $table) {
            $table->id();

            $table->string('tag')->index();

            $table->string('slug')->index();

            $table->text('content');
            $table->fulltext('content');

            $table->string('author_email');

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
        Schema::dropIfExists('newsfeeds');
    }
};
