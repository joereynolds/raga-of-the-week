<?php

namespace App\Console\Commands;

use App\Models\Raga;
use App\Models\Week;
use Illuminate\Console\Command;

class AddRandomWeeklyRaga extends Command
{
    protected $signature = 'app:add-random-weekly-raga';

    protected $description = 'Adds a new random weekly raga into the table (this will eventually be automated)';

    public function handle()
    {
        $raga = Raga::all()->random(1)->first();
        $name = $raga->name;

        $this->line("$name is our new weekly raga!");

        Week::create([
            'week' => now()->addDay()->toDateString(),
            'raga_id' => $raga->id
        ]);
    }
}
