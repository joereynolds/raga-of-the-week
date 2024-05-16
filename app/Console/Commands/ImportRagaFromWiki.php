<?php

namespace App\Console\Commands;

use App\Models\MelakartaJanyaLink;
use App\Models\Raga;
use DOMDocument;
use Exception;
use Illuminate\Console\Command;
use Illuminate\Support\Facades\Artisan;
use Illuminate\Support\Facades\Http;
use IvoPetkov\HTML5DOMDocument;
use IvoPetkov\HTML5DOMElement;

class ImportRagaFromWiki extends Command
{
    protected $signature = 'app:import-raga-from-wiki';

    protected $description = 'Imports the janya ragas from wikipedia';

    public function handle()
    {
        $search = ['₁', '₂', '₃', "\u{00a0}", '[7]', '[6]', '[5]', '[4]', '[3]', '[2]', '[1]', 'Ṡ', '<br>'];
        $replace = [1, 2, 3, ',', '', '', '', '', '', '', '', '$', ''];

        $nameSearch = ['[7]', '[6]', '[5]', '[4]', '[3]', '[2]', '[1]', '28&43'];
        $nameReplace = ['', '', '', '', '', '', '', ''];

        $dom = new HTML5DOMDocument();
        $response = Http::get('https://en.wikipedia.org/wiki/List_of_Janya_ragas');
        $dom->loadHTML($response->body(), HTML5DOMDocument::ALLOW_DUPLICATE_IDS);

        $rows = $dom->querySelectorAll('.wikitable tr');

        $id = 11020;
        foreach ($rows as $row) {
            $cells = $row->getElementsByTagName('td');

            if ($cells[0] && $cells[1] && $cells[2]) {
                $name = $cells[0]->innerHTML;
                $arohana = $cells[1]->innerHTML;
                $avarohana = $cells[2]->innerHTML;

                $name = html_entity_decode(strip_tags($name));
                $name = str_replace($nameSearch, $nameReplace, $name);

                $arohana = str_replace(
                    $search,
                    $replace,
                    html_entity_decode($arohana),
                );
                $avarohana = str_replace(
                    $search,
                    $replace,
                    html_entity_decode($avarohana),
                );

                $arohana = trim($arohana);
                $avarohana = trim($avarohana);

                if (str_contains($name, 'Hindustani')) {
                    $this->info("Skipping over $name as it's Hindustani");
                    continue;
                }

                if (str_contains($arohana, 'Anya')) {
                    $this->info(
                        "Skipping over $name as it contains anya swaras in the arohana"
                    );
                    continue;
                }

                if (str_contains($avarohana, 'Anya')) {
                    $this->info(
                        "Skipping over $name as it contains anya swaras in the arohana"
                    );
                    continue;
                }

                if (filter_var($name, FILTER_SANITIZE_NUMBER_INT)) {
                    $ragaId = (int) filter_var($name, FILTER_SANITIZE_NUMBER_INT);
                }

                if (preg_match('~[0-9]+~', $name)) {
                    $this->info("Skipping over $name as it is not a Janya raga");
                    continue;
                }

                $this->info("$name belongs to $ragaId");
                $this->line($name);
                $this->line('arohana: ' . $arohana);
                $this->line('avarohana: ' . $avarohana);

                try {
                    Artisan::call(
                        'app:add-raga',
                        [
                            '--id' => $id,
                            '--name' => $name,
                            '--arohana' => $arohana,
                            '--avarohana' => $avarohana,
                            '--relates-to-raga' => $ragaId
                        ]
                    );

                    $id++;
                } catch (Exception $e) {
                    $this->error('There was an error outputting this raga, continuing...');
                    $this->line($e->getMessage());
                }
            }
        }
    }
}
