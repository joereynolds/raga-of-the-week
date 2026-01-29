<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class VarishaiPatternSeeder extends Seeder
{
    public function run(): void
    {
        DB::table('varishai_patterns')->delete();

        $patterns = [
            # Sarali
            ["varishai_id" => 1, "pattern_number" => 1],
            ["varishai_id" => 1, "pattern_number" => 2],
            ["varishai_id" => 1, "pattern_number" => 3],
            ["varishai_id" => 1, "pattern_number" => 4],
            ["varishai_id" => 1, "pattern_number" => 5],
            ["varishai_id" => 1, "pattern_number" => 6],
            ["varishai_id" => 1, "pattern_number" => 7],
            ["varishai_id" => 1, "pattern_number" => 8],
            ["varishai_id" => 1, "pattern_number" => 9],
            ["varishai_id" => 1, "pattern_number" => 10],
        ];

        DB::table('varishai_patterns')->insert($patterns);
    }
}
