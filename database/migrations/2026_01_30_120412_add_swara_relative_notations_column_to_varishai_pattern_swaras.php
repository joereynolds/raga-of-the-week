<?php

use App\Models\SwaraRelativeNotation;
use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    public function up(): void
    {
        Schema::table('varishai_pattern_swaras', function (Blueprint $table) {
            $table->foreignIdFor(SwaraRelativeNotation::class);
            $table->dropColumn("notation");
        });
    }

    public function down(): void
    {
        Schema::table('varishai_pattern_swaras', function (Blueprint $table) {
            $table->string("notation");
            $table->dropConstrainedForeignId(SwaraRelativeNotation::class);
        });
    }
};
