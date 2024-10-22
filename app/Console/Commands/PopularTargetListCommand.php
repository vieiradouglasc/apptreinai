<?php

namespace App\Console\Commands;

use App\Models\TargetList;
use Http;
use Illuminate\Console\Command;

class PopularTargetListCommand extends Command
{
    /**
     * The name and signature of the console command.
     *
     * @var string
     */
    protected $signature = 'popular:target-list';

    /**
     * The console command description.
     *
     * @var string
     */
    protected $description = 'Comando para popular base de dados de Target List';

    /**
     * Execute the console command.
     */
    public function handle()
    {
        $targetlists = Http::withHeaders([
            'x-rapidapi-host' => 'exercisedb.p.rapidapi.com',
            'x-rapidapi-key' => 'a6578b7825msh8dc8e184c4a17f3p174ddfjsna1d7f444921d'
        ])
            ->get('https://exercisedb.p.rapidapi.com/exercises/targetList')
            ->json();

        foreach ($targetlists as $targetlist) {
            TargetList::updateOrCreate(
                [
                    'name' => $targetlist
                ],
                [
                    'name' => $targetlist
                ]
            );

        }
    }
}