<?php

namespace Database\Seeders;
use App\Models\Player;
use Illuminate\Database\Seeder;

class PlayerSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        
        
        $players = [
            "Lebron James",
            "Kobe Bryant",
            "Micheal Jordan", 
        ];
        
        for($i = 0; $i<count($players);$i++){
                $player = new Player; 
                $player->name = $players[$i];
                $player->save();
            }
    }
}
