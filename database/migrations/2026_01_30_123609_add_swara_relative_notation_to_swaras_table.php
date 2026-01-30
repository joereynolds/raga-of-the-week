<?php

use App\Models\SwaraRelativeNotation;
use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    public function up(): void
    {
        Schema::table('swaras', function (Blueprint $table) {
            $table->foreignIdFor(SwaraRelativeNotation::class)->default(1)->constrained();
        });
    }

    public function down(): void
    {
        Schema::table('swaras', function (Blueprint $table) {
            $table->dropConstrainedForeignIdFor(SwaraRelativeNotation::class);
        });
    }
};
