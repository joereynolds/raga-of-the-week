<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class RagaSeeder extends Seeder
{
    public function run(): void
    {
        $ragas = array_diff(scandir(__DIR__ . '/data/ragas'), [
            '..', '.', 'janyas'
        ]);

        foreach ($ragas as $raga) {
            $config = json_decode(
                file_get_contents(__DIR__ . "/data/ragas/$raga"),
                flags: JSON_OBJECT_AS_ARRAY|JSON_THROW_ON_ERROR
            );

            DB::table('ragas')->insert($config['ragas']);
            DB::table('notes')->insert($config['notes']);
            DB::table('formulas')->insert($config['formulas']);
            DB::table('arohanas')->insert($config['new-arohanas']);
            DB::table('avarohanas')->insert($config['new-avarohanas']);
        }

        $janyas = array_diff(scandir(__DIR__ . '/data/ragas/janyas'), [
            '..', '.'
        ]);

        foreach ($janyas as $janya) {
            $config = json_decode(
                file_get_contents(__DIR__ . "/data/ragas/janyas/$janya"),
                flags: JSON_OBJECT_AS_ARRAY|JSON_THROW_ON_ERROR
            );

            DB::table('ragas')->insert($config['ragas']);
            DB::table('notes')->insert($config['notes']);
            DB::table('formulas')->insert($config['formulas']);
            DB::table('arohanas')->insert($config['arohanas']);
            DB::table('avarohanas')->insert($config['avarohanas']);

            DB::table('melakarta_janya_links')->insert(
                $config['melakarta_janya_links']
            );
        }
    }
}
