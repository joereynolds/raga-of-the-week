<?php

namespace App\Console\Commands;

use Illuminate\Console\Command;

class addCorrectSaToMelakartas extends Command
{
    /**
     * The name and signature of the console command.
     *
     * @var string
     */
    protected $signature = 'app:add-correct-sa-to-melakartas';

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
        $ragas = array_diff(scandir(database_path() . '/seeders/data/ragas'), [
            '..', '.', 'janyas'
        ]);

        foreach ($ragas as $raga) {
            $config = json_decode(
                file_get_contents(database_path(). "/seeders/data/ragas/$raga"),
                flags: JSON_OBJECT_AS_ARRAY|JSON_THROW_ON_ERROR
            );

            $config['arohanas'][] = [
                'raga_id' => $config['ragas']['id'],
                'swara_id' => 17,
                'order' => 7
            ];

            $newAvarohana = [
                'raga_id' => $config['ragas']['id'],
                'swara_id' => 17,
                'order' => 7
            ];

            $config['avarohanas'] = [$newAvarohana] + $config['avarohanas'];

            $this->line($config['ragas']['name']);
            var_dump($config['arohanas']);
            var_dump($config['avarohanas']);
            $this->line('===================');

            file_put_contents(
                database_path(). "/seeders/data/ragas/$raga",

                json_encode($config, JSON_PRETTY_PRINT)

            );
        }
    }
}
