<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class WesternScalesSeeder extends Seeder
{
    public function run(): void
    {
        $scales = json_decode(
            file_get_contents(__DIR__ . '/data/scales/scales.json'),
            flags: JSON_OBJECT_AS_ARRAY|JSON_THROW_ON_ERROR

        );
        foreach ($scales as $scale) {
            DB::table('western_scales')->insert($scale);
        }
    }
}
