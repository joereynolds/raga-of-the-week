<?php

use App\Models\Raga;
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
        Schema::create('formulas', function (Blueprint $table) {
            $table->foreignIdFor(Raga::class)->constrained();
            $table->string('first')->nullable();
            $table->string('second')->nullable();
            $table->string('third')->nullable();
            $table->string('fourth')->nullable();
            $table->string('fifth')->nullable();
            $table->string('sixth')->nullable();
            $table->string('seventh')->nullable();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('formula');
    }
};
