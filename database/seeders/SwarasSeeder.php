<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class SwarasSeeder extends Seeder
{
    public function run(): void
    {
        $swaras = json_decode(
            file_get_contents(__DIR__ . '/data/swaras/swaras.json'),
            flags: JSON_OBJECT_AS_ARRAY|JSON_THROW_ON_ERROR
        );


        DB::table('swaras')->insert($swaras);
    }
}
