<?php

namespace App\Console\Commands;

use App\Models\Raga;
use Illuminate\Console\Command;

class FindSimilarRagas extends Command
{
    /**
     * The name and signature of the console command.
     *
     * @var string
     */
    protected $signature = 'app:find-similar-ragas';

    /**
     * The console command description.
     *
     * @var string
     */
    protected $description = 'Links ragas that differ by one note in their formulas';

    /**
     * Execute the console command.
     */
    public function handle()
    {
        foreach (Raga::all() as $raga) {
            foreach (Raga::all() as $otherRaga) {

            }

        }
    }
}
