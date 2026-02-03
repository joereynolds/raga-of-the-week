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
            ["id" => 1, "varishai_id" => 1],
            ["id" => 2, "varishai_id" => 1],
            ["id" => 3, "varishai_id" => 1],
            ["id" => 4, "varishai_id" => 1],
            ["id" => 5, "varishai_id" => 1],
            ["id" => 6, "varishai_id" => 1],
            ["id" => 7, "varishai_id" => 1],
            ["id" => 8, "varishai_id" => 1],
            ["id" => 9, "varishai_id" => 1],
            ["id" => 10, "varishai_id" => 1],
            ["id" => 11, "varishai_id" => 1],
            ["id" => 12, "varishai_id" => 1],
            ["id" => 13, "varishai_id" => 1],
            ["id" => 14, "varishai_id" => 1],
        ];

        DB::table('varishai_patterns')->insert($patterns);
    }
}
