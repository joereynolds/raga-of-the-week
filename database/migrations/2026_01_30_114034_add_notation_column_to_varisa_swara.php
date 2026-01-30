<?php

use App\Models\Swara;
use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    public function up(): void
    {
        Schema::table('varishai_pattern_swaras', function (Blueprint $table) {
            $table->string("notation");
            $table->dropConstrainedForeignIdFor(Swara::class);
        });
    }

    public function down(): void
    {
        Schema::table('varishai_pattern_swaras', function (Blueprint $table) {
            $table->dropColumn("notation");
            $table->foreignIdFor(Swara::class)->constrained();
        });
    }
};
