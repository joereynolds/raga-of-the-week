<?php

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
        Schema::table('varishai_patterns', function (Blueprint $table) {
            // Use the id instead, duh
            $table->dropColumn("pattern_number");
        });
    }

    public function down(): void
    {
        Schema::table('varishai_patterns', function (Blueprint $table) {
            $table->integer('pattern_number');
        });
    }
};
