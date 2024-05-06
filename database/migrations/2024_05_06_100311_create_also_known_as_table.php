<?php

use App\Models\Raga;
use App\Models\WesternScale;
use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    public function up(): void
    {
        Schema::create('also_known_as', function (Blueprint $table) {
            $table->foreignIdFor(Raga::class)->constrained();
            $table->foreignIdFor(WesternScale::class)->constrained();
        });
    }

    public function down(): void
    {
        Schema::dropIfExists('also_known_as');
    }
};
