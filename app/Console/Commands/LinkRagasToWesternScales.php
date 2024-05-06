<?php

namespace App\Console\Commands;

use App\Models\AlsoKnownAs;
use App\Models\Raga;
use App\Models\WesternScale;
use Illuminate\Console\Command;

class LinkRagasToWesternScales extends Command
{
    protected $signature = 'app:link-ragas-to-western-scales';

    protected $description = 'Command description';

    /**
     * Execute the console command.
     */
    public function handle()
    {

        foreach (Raga::all() as $raga) {
            foreach (WesternScale::all() as $scale) {

                if ($raga->formula->list == $scale->list) {
                    $this->line("$raga->name is also known as $scale->name");

                    AlsoKnownAs::create([
                        'raga_id' => $raga->id,
                        'western_scale_id' => $scale->id,
                    ]);
                }

            }
        }
    }
}
