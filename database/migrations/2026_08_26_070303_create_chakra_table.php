<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    public function up(): void
    {
        Schema::create('chakras', function (Blueprint $table) {
            $table->id();
            $table->string('name');
            $table->string('description');
        });
    }

    public function down(): void
    {
        Schema::dropIfExists('chakras');
    }
};
