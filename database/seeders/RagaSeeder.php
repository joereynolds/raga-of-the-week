<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class RagaSeeder extends Seeder
{
    public function run(): void
    {
        DB::table('ragas')->insert([
            'number' => 29,
            'name' => 'Śankarābharaṇaṃ',
            'theory' => json_encode(
                [
                    "arohanam" => ["S", "R2", "G3", "M1", "P", "D2", "N3", "Ṡ"],
                    "avarohanam" => ["Ṡ", "N3", "D2", "P", "M1", "G3", "R2", "S"],
                    "formula" => [1, 2, 3, 4, 5, 6, 7],
                    "notes"=> ["C", "D", "E", "F", "G", "A", "B"]
                ]
            )
        ]);
    }
}
