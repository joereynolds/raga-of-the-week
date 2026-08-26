<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    public function run(): void
    {
        // Order matters, don't mess with this.
        $this->call(SwaraRelativeNotationsSeeder::class);
        $this->call(SwarasSeeder::class);
        $this->call(RagaSeeder::class);
        $this->call(WesternScalesSeeder::class);
        $this->call(VarishaiSeeder::class);
        $this->call(VarishaiPatternSeeder::class);
        $this->call(VarishaiPatternSwarasSeeder::class);
        $this->call(PreviousWeeksSeeder::class);
        $this->call(ChakrasSeeder::class);
        $this->call(ChakraRagaLinkSeeder::class);
    }
}
