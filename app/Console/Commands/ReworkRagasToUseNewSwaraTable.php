<?php

namespace App\Console\Commands;

use App\Models\Swara;
use Exception;
use Illuminate\Console\Command;

class ReworkRagasToUseNewSwaraTable extends Command
{
    protected $signature = 'app:rework-ragas';

    protected $description = 'Command description';

    public function handle()
    {
        $ragas = array_diff(
            scandir(database_path() . '/seeders/data/ragas'),
            [
            '..', '.', 'janyas'
            ]
        );

        foreach ($ragas as $raga) {
            $this->line("reworking $raga...");
            $config = json_decode(
                file_get_contents(database_path(). "/seeders/data/ragas/$raga"),
                flags: JSON_OBJECT_AS_ARRAY|JSON_THROW_ON_ERROR
            );

            $swaras = [
                "shadja",
                "rishabha",
                "gandhara",
                "madhyama",
                "panchama",
                "dhaivata",
                "nishada",
            ];

            $reverseSwaras = [
                "nishada",
                "dhaivata",
                "panchama",
                "madhyama",
                "gandhara",
                "rishabha",
                "shadja",
            ];

            $newArohana = [];
            $newAvarohana = [];

            for ($i=0; $i < count($swaras); $i++) {
                $newArohana[] = [
                    'raga_id' => $config['ragas']['id'],
                    'swara_id' => Swara::where(
                        'notation', $config['arohanas'][$swaras[$i]]
                    )->first()->id,
                    'order' => $i,
                ];
                $newAvarohana[] = [
                    'raga_id' => $config['ragas']['id'],
                    'swara_id' => Swara::where(
                        'notation', $config['avarohanas'][$reverseSwaras[$i]]
                    )->first()->id,
                    'order' => $i,
                ];
            }

            $config['arohanas'] = $newArohana;
            $config['avarohanas'] = $newAvarohana;
            file_put_contents(
                database_path(). "/seeders/data/ragas/$raga",

                json_encode($config, JSON_PRETTY_PRINT)

            );
        }
    }
}
