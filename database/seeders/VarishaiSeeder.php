<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class VarishaiSeeder extends Seeder
{
    public function run(): void
    {
        $varishais = [
            ["varishai" => "Sarali"],
            ["varishai" => "Jantai"],
            ["varishai" => "Melsthayi"],
            ["varishai" => "Datu"]
        ];

        DB::table('varishais')->insert($varishais);
    }
}
