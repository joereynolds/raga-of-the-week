<?php

namespace App\Console\Commands;

use App\Models\Raga;
use Illuminate\Console\Command;

class ValidateRaga extends Command
{
    /**
     * The name and signature of the console command.
     *
     * @var string
     */
    protected $signature = 'app:validate-raga';

    /**
     * The console command description.
     *
     * @var string
     */
    protected $description = 'Command description';

    /**
     * Execute the console command.
     */
    public function handle()
    {
        foreach (Raga::all() as $raga) {
            foreach (Raga::all() as $otherRaga) {
                if ($raga->id === $otherRaga->id) {
                    continue;
                }

                if ($this->checkNameIsntUsedElsewhere($raga, $otherRaga)) {
                    $this->warn($raga->id . " has the same name as " . $otherRaga->id);
                }

                if ($this->checkRagaHasBadlyCasedName($raga)) {
                    $this->warn($raga->id . " has a lower case name");
                }
            }
        }
    }

    private function checkArohanaAndAvarohanaAreIdenticalWhenSorted()
    {

    }

    private function checkArohanaOrAvarohanaDoesNotBelongToAnotherRaga()
    {

    }

    private function checkNameIsntUsedElsewhere(Raga $raga, Raga $otherRaga)
    {
        return $raga->name === $otherRaga->name;
    }

    private function checkRagaHasBadlyCasedName(Raga $raga)
    {
        $char = mb_substr($raga->name, 0, 1, "UTF-8") ;

        return mb_strtolower($char, "UTF-8") == $char;
    }
}
