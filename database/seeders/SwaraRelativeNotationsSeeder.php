<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class SwaraRelativeNotationsSeeder extends Seeder
{
    public function run(): void
    {
        DB::table('swara_relative_notations')->delete();

        $notation = [
            ["id" => "1", "notation" => "s"],
            ["id" => "2", "notation" => "r"],
            ["id" => "3", "notation" => "g"],
            ["id" => "4", "notation" => "m"],
            ["id" => "5", "notation" => "p"],
            ["id" => "6", "notation" => "d"],
            ["id" => "7", "notation" => "n"],
            ["id" => "8", "notation" => "S"],
        ];

        DB::table('swara_relative_notations')->insert($notation);
    }
}
