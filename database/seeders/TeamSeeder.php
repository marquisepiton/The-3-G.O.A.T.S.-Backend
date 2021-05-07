<?php

namespace Database\Seeders;
use App\Models\Team;
use Illuminate\Database\Seeder;


class TeamSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //$faker = \Faker\Factory::create();
        
        // The NBA that the user can pick from. 
        $teams = [
            "Los Angeles",
            "Golden State Warriors",
            "Brooklyn Nets",
            "Boston Celtics",
            "New York Knicks",
            "Toronto Raptors",
            "Dallas Mavericks",
            "Denver Nuggets",
            "Philadelphia 76ers",
            "Utah Jazz",
            "Phonenix Jazz",
            "Washington Wizard",
            "San Antonio Spurs",
            "Los Angeles Clippers",
            "Portland Trail Blazers",
            "Chicago Bulls",
            "Milwaukee Bucks",
            "Charlotte Hornets",
            "Miami Heat",
            "Houston Rockets",
            "New Orleans Pelicans",
            "Atlanta Hawks", 
            "Sacramento Kings",
            "Minnesota Timberwolves",
            "Cleveland Cavaliers",
            "Oklahoma City Thunder",
            "Memphis Grizzlies",
            "Indianan Pacers",
            "Orlando Magic",
            "Detroit Pistons",
        ];
           // Loop through to render all the teams from the "Teams" array.  
            for($i = 0; $i<count($teams);$i++){
                $team = new Team; 
                $team->teamname= $teams[$i];
                $team->save();
                
            }
            
            
            
            
            
            
            
            
    }
}
