<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     */
    public function up(): void
    {
        Schema::create('faqs', function (Blueprint $table) {
            $table->id();
            $table->string('question');
            $table->text('paragraph');
            $table->text('enroll')->nullable();
            $table->string('cta');
            $table->enum('program', ['general question', 'short course', 'dts program', 'senior high', 'gt foundation', 'tesda-twsp', 'others scholarship'])->default('general question');
            $table->timestamps();

        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('faqs');
    }
};
