<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    public function up(): void
    {
        Schema::rename("varishai_pattern", "varishai_patterns");
    }

    public function down(): void
    {
        Schema::rename("varishai_patterns", "varishai_pattern");
    }
};
