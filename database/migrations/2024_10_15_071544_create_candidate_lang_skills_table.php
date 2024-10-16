<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    public function up(): void
    {
        Schema::create('candidate_lang_skills', function (Blueprint $table) {
            $table->id();

            $table->foreignId('candidate_id')
                ->constrained()
                ->cascadeOnDelete();

            $table->string('lang');

            $table->string('level');
        });
    }

    public function down(): void
    {
        Schema::dropIfExists('candidate_lang_skills');
    }
};
