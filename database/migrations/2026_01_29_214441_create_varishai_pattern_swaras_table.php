<?php

use App\Models\Swara;
use App\Models\VarishaiPattern;
use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    public function up(): void
    {
        Schema::create('varishai_pattern_swaras', function (Blueprint $table) {
            $table->id();
            $table->foreignIdFor(VarishaiPattern::class)->constrained();
            $table->foreignIdFor(Swara::class)->constrained();
            $table->integer("order");
        });
    }

    public function down(): void
    {
    }
};
