<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    public function up(): void
    {
        Schema::create('ragas', function (Blueprint $table) {
            $table->id();
            $table->smallInteger('number');
            $table->string('name');
            $table->json('theory');
        });
    }

    public function down(): void
    {
        Schema::dropIfExists('ragas');
    }
};
