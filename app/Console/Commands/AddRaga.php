<?php

namespace App\Console\Commands;

use App\Models\Swara;
use Exception;
use Illuminate\Console\Command;

/**
 * @example
 * ./artisan.sh app:add-raga --id=37 --name="Salagam" --arohana="S,R1,G1,M2,P,D1,N1,S" --avarohana="S,N1,D1,P,M2,G1,R1,S" --relates-to-raga=3000
 */
class AddRaga extends Command
{
    /**
     * The name and signature of the console command.
     *
     * @var string
     */
    protected $signature = 'app:add-raga {--id=} {--name=} {--arohana=} {--avarohana=} {--relates-to-raga=}';

    /**
     * The console command description.
     *
     * @var string
     */
    protected $description = 'Add a raga JSON file to be seeded';

    /**
     * Execute the console command.
     */
    public function handle()
    {
        $ragaId = (int)$this->option('id');
        $ragaName = $this->option('name');
        $ragaArohana = explode(',', $this->option('arohana'));
        $ragaAvarohana = explode(',', $this->option('avarohana'));

        $ragaFileContent = [
            'ragas' => [
                'id' => $ragaId,
                'name' => $ragaName,
            ],
        ];

        $i = 0;
        foreach ($ragaArohana as $swara) {
            $swaraId = Swara::where('notation', $swara)->first()->id;

            $ragaFileContent['arohanas'][] = [
                'raga_id' => $ragaId,
                'swara_id' => $swaraId,
                'order' => $i++
            ];
        }

        $j = 0;
        foreach ($ragaAvarohana as $swara) {
            $swaraId = Swara::where('notation', $swara)->first()->id;

            $ragaFileContent['avarohanas'][] = [
                'raga_id' => $ragaId,
                'swara_id' => $swaraId,
                'order' => $j++
            ];
        }

        $ragaFileContent['melakarta_janya_links'] = [
            'raga_id' => $this->option('relates-to-raga'),
            'janya_id' => $ragaId
        ];

        $file = json_encode($ragaFileContent, JSON_PRETTY_PRINT);

        $fileRagaName = strtolower($ragaName);
        $filename = "$ragaId-$fileRagaName.json";
        file_put_contents(database_path() . "/seeders/data/ragas/janyas/$filename", $file);
    }
}
