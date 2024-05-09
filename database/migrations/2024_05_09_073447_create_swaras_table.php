<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    public function up(): void
    {
        Schema::create('swaras', function (Blueprint $table) {
            $table->id();
            $table->string('notation');
            $table->string('name_short');
            $table->string('name_full')->nullable();
            $table->string('note');
            $table->string('interval');
            $table->timestamps();
        });
    }

    public function down(): void
    {
        Schema::dropIfExists('swaras');
    }
};
