<?php

use App\Models\Varishai;
use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    public function up(): void
    {
        Schema::create('varishai_pattern', function (Blueprint $table) {
            $table->id();
            $table->integer('pattern_number');
            $table->foreignIdFor(Varishai::class)->constrained();
        });
    }

    public function down(): void
    {
        Schema::dropIfExists('varishai_pattern');
    }
};
