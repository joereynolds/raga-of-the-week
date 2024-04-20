<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class RagaSeeder extends Seeder
{
    public function run(): void
    {
        DB::table('ragas')->insert([
            'id' => 1,
            'number' => 29,
            'name' => 'Śankarābharaṇaṃ',
        ]);

        DB::table('notes')->insert([
            'raga_id' => 1,
            'first' => 'C',
            'second' => 'D',
            'third' => 'E',
            'fourth' => 'F',
            'fifth' => 'G',
            'sixth' => 'A',
            'seventh' => 'B',
        ]);

        DB::table('arohanas')->insert([
            'raga_id' => 1,
            'shadja' => 'S',
            'rishabha' => 'R2',
            'gandhara' => 'G3',
            'madhyama' => 'M1',
            'panchama' => 'P',
            'dhaivata' => 'D2',
            'nishada' => 'N3',
        ]);

        DB::table('avarohanas')->insert([
            'raga_id' => 1,
            'shadja' => 'S',
            'nishada' => 'N3',
            'dhaivata' => 'D2',
            'panchama' => 'P',
            'madhyama' => 'M1',
            'gandhara' => 'G3',
            'rishabha' => 'R2',
        ]);

        DB::table('formulas')->insert([
            'raga_id' => 1,
            'first' => '1',
            'second' => '2',
            'third' => '3',
            'fourth' => '4',
            'fifth' => '5',
            'sixth' => '6',
            'seventh' => '7',
        ]);
    }
}
