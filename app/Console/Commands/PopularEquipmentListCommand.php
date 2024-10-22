<?php

namespace App\Console\Commands;
use App\Models\EquipmentList;
use Http;
use Illuminate\Console\Command;

class PopularEquipmentListCommand extends Command
{
    /**
     * The name and signature of the console command.
     *
     * @var string
     */
    protected $signature = 'popular:equipment-list';

    /**
     * The console command description.
     *
     * @var string
     */
    protected $description = 'Comando para popular base de dados de Equipment List';

    /**
     * Execute the console command.
     */
    public function handle()
    {
        $equipmentlists = Http::withHeaders([
            'x-rapidapi-host' => 'exercisedb.p.rapidapi.com',
            'x-rapidapi-key' => 'a6578b7825msh8dc8e184c4a17f3p174ddfjsna1d7f444921d'
        ])
            ->get('https://exercisedb.p.rapidapi.com/exercises/equipmentList')
            ->json();

        foreach ($equipmentlists as $equipmentlist) {
        EquipmentList::updateOrCreate(
            [
                'name' => $equipmentlist
            ],
            [
                'name' => $equipmentlist
            ]
            );         
    }
}
}