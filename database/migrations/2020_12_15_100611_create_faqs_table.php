<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Artisan;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    public function up(): void
    {
        Schema::create('faqs', function (Blueprint $table) {
            $table->id();
            $table->foreignId('faq_category_id')->constrained()->onDelete('cascade');
            
            $table->string('question');
            $table->fulltext('question');

            $table->string('answer');
            $table->fulltext('answer');
            $table->timestamps();
        });

        Artisan::call('db:seed', [
            '--class' => 'FaqSeeder',
            '--force' => true
        ]);
    }

    public function down(): void
    {
        Schema::dropIfExists('faqs');
    }
};
