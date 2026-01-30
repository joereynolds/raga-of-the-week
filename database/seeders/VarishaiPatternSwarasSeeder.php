<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class VarishaiPatternSwarasSeeder extends Seeder
{
    public function run(): void
    {
        $varishais = array_diff(scandir(__DIR__ . '/data/varishai/'), [
            '..', '.'
        ]);

        foreach ($varishais as $varishai) {

            $patterns = array_diff(scandir(__DIR__ . "/data/varishai/$varishai"), [
                '..', '.'
            ]);

            foreach ($patterns as $pattern) {

                $swaras = json_decode(
                    file_get_contents(__DIR__ . "/data/varishai/$varishai/$pattern"),
                    flags: JSON_OBJECT_AS_ARRAY|JSON_THROW_ON_ERROR
                );

                var_dump($swaras);
                /* DB::table('varishai_pattern_swaras')->insert($swaras); */
            }
        }
    }
}
