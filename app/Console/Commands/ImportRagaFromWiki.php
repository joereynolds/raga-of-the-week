<?php

namespace App\Console\Commands;

use Illuminate\Console\Command;
use Illuminate\Support\Facades\Http;

class ImportRagaFromWiki extends Command
{
    /**
     * The name and signature of the console command.
     *
     * @var string
     */
    protected $signature = 'app:import-raga-from-wiki';

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
        $response = Http::get('https://en.wikipedia.org/wiki/Hatakambari');
        $body = $response->body();

        $ragaNum = $this->extractRagaNumber($body);
        $arohana = $this->extractArohana($body);
        $notes   = $this->extractNotes($body);
        var_dump($arohana);
    }

    private function extractRagaNumber(string $body)
    {
        $matches = [];
        preg_match("/It is the \d+/", $body, $matches);

        return (int) filter_var($matches[0], FILTER_SANITIZE_NUMBER_INT);
    }

    private function extractArohana(string $body)
    {
        $matches = [];
        $body = strip_tags($body);

        preg_match("/(ārohaṇa|arohana): .*/", $body, $matches);
        $cleaned = str_replace(
            ["&#160;", "&#91;", "&#93;", "ārohaṇa: ", "a", "arohana"],
            [" "],
            $matches[0]
        );

        return explode(" ", $cleaned);
    }

    private function extractNotes(string $body)
    {

    }
}
