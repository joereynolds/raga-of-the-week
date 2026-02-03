<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    public function run(): void
    {
        $this->call(SwaraRelativeNotationsSeeder::class);
        $this->call(SwarasSeeder::class);
        $this->call(RagaSeeder::class);
        $this->call(WesternScalesSeeder::class);
        $this->call(VarishaiSeeder::class);
        $this->call(VarishaiPatternSeeder::class);
        $this->call(VarishaiPatternSwarasSeeder::class);
    }
}
