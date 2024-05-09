<?php

namespace App\Console\Commands;

use App\Models\Raga;
use Illuminate\Console\Command;

class FindSimilarRagas extends Command
{
    /**
     * @var string
     */
    protected $signature = 'app:find-similar-ragas';

    /**
     * @var string
     */
    protected $description = 'Links ragas that differ by one note in their formulas';

    /**
     * Execute the console command.
     */
    public function handle()
    {
        $this->line("Linking similar ragas...");
        foreach (Raga::all() as $raga) {
            foreach (Raga::all() as $otherRaga) {
                if ($raga->name === $otherRaga->name) {
                    continue;
                }

                /* $this->line("Comparing $raga->name against $otherRaga->name"); */

                $formula = [
                    $raga->formula->first,
                    $raga->formula->second,
                    $raga->formula->third,
                    $raga->formula->fourth,
                    $raga->formula->fifth,
                    $raga->formula->sixth,
                    $raga->formula->seventh,
                ];

                $otherFormula = [
                    $otherRaga->formula->first,
                    $otherRaga->formula->second,
                    $otherRaga->formula->third,
                    $otherRaga->formula->fourth,
                    $otherRaga->formula->fifth,
                    $otherRaga->formula->sixth,
                    $otherRaga->formula->seventh,
                ];

                $diff = array_diff($formula, $otherFormula);

                if (count($diff) === 1) {
                    /* $this->line("Linking $raga->name and $otherRaga->name together"); */

                    $raga->similarRaga()->create([
                        'raga_id' => $raga->id,
                        'linked_raga_id' => $otherRaga->id,
                    ]);
                }
            }
        }
    }
}
