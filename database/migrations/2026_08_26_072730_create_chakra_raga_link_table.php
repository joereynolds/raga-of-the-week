<?php

use App\Models\Chakra;
use App\Models\Raga;

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    public function up(): void
    {
        Schema::create('chakra_raga_links', function (Blueprint $table) {
            $table->foreignIdFor(Chakra::class)->constrained();
            $table->foreignIdFor(Raga::class)->constrained();
        });
    }

    public function down(): void
    {
        Schema::dropIfExists('chakra_raga_link');
    }
};
