<?php

namespace App\Console\Commands;

use App\Models\Raga;
use Illuminate\Console\Command;

class LinkSimilarRagas extends Command
{
    protected $signature = 'app:link-similar-ragas';

    protected $description = 'Links ragas that differ by one note in their formulas';

    public function handle()
    {
        $this->line("Linking similar ragas...");
        foreach (Raga::all() as $raga) {
            foreach (Raga::all() as $otherRaga) {
                if ($raga->name === $otherRaga->name) {
                    continue;
                }

                /* $this->line("Comparing $raga->name against $otherRaga->name"); */

                $formula = [];
                foreach ($raga->arohana as $arohana) {
                    $formula[] = $arohana->swara->interval;
                }

                $otherFormula = [];
                foreach ($otherRaga->arohana as $arohana) {
                    $otherFormula[] = $arohana->swara->interval;
                }

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
