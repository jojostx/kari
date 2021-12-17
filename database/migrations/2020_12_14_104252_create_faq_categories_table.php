<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Artisan;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    public function up()
    {
        Schema::create('faq_categories', function (Blueprint $table) {
            $table->id();
            $table->string('name');
            $table->timestamps();
        });

        Artisan::call('db:seed', [
            '--class' => 'FaqCategorySeeder',
            '--force' => true
        ]);
    }

    public function down(): void
    {
        Schema::dropIfExists('faq_categories');
    }
};