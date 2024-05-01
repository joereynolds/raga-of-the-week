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
        Schema::create('melakarta_janya_links', function (Blueprint $table) {
            $table->foreignIdFor(Raga::class)->constrained();
            $table->foreignId('janya_id')->constrained('ragas');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('melakarta_janya_links');
    }
};
