<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    public function up(): void
    {
        Schema::create('western_scales', function (Blueprint $table) {
            $table->id();
            $table->string('name')->nullable();
            $table->string('first')->nullable();
            $table->string('second')->nullable();
            $table->string('third')->nullable();
            $table->string('fourth')->nullable();
            $table->string('fifth')->nullable();
            $table->string('sixth')->nullable();
            $table->string('seventh')->nullable();
        });
    }

    public function down(): void
    {
        Schema::dropIfExists('western_scales');
    }
};
