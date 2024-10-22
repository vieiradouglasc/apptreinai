<?php

namespace App\Console\Commands;
use Http;
use App\Models\BodyPartList;
use Illuminate\Console\Command;

class PopularBodyPartListCommand extends Command
{
    /**
     * The name and signature of the console command.
     *
     * @var string
     */
    protected $signature = 'popular:bodypart-list';

    /**
     * The console command description.
     *
     * @var string
     */
    protected $description = 'Comando para popular base de dados de Body Part List';

    /**
     * Execute the console command.
     */
    public function handle()
    {
        $bodypartlists = Http::withHeaders([
            'x-rapidapi-host' => 'exercisedb.p.rapidapi.com',
            'x-rapidapi-key' => 'a6578b7825msh8dc8e184c4a17f3p174ddfjsna1d7f444921d'
        ])
        ->get('https://exercisedb.p.rapidapi.com/exercises/bodyPartList')
        ->json();

        foreach ($bodypartlists as $bodypartlist) {
            BodyPartList::updateOrCreate(
                [
                    'name' =>  $bodypartlist
                ],
                [
                    'name' => $bodypartlist
                ]
                );
    }
}
}