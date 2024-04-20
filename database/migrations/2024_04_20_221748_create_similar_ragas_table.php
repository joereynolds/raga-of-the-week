<?php

use App\Models\Raga;
use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    public function up(): void
    {
        Schema::create('similar_ragas', function (Blueprint $table) {
            $table->foreignIdFor(Raga::class)->constrained();
            $table->foreignId('linked_raga_id')->constrained(
                table: 'ragas'
            );
        });
    }

    public function down(): void
    {
        Schema::dropIfExists('similar_ragas');
    }
};
