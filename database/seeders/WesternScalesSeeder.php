<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class WesternScalesSeeder extends Seeder
{
    public function run(): void
    {
        # Move to json
        $scales = [
            [
                'name' => 'Ionian',
                'first' => '1',
                'second' => '2',
                'third' => '3',
                'fourth' => '4',
                'fifth' => '5',
                'sixth' => '6',
                'seventh' => '7',
            ],
            [
                'name' => 'Lydian',
                'first' => '1',
                'second' => '2',
                'third' => '3',
                'fourth' => '#4',
                'fifth' => '5',
                'sixth' => '6',
                'seventh' => '7',
            ]
        ];

        foreach ($scales as $scale) {
            DB::table('western_scales')->insert($scale);
        }
    }
}
