<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\DB;

class DataController extends Controller
{
    // =================================== General Stats Controllers ===============================================
    
    
    public function statstotal($column)
    {
       $results =  DB::table('regularseasontotals')->select($column)->where('season', '=', 'Career')->get();
        return $results->toArray();
        
           
    }
    
    
    
    public function postseasonaverages()
    {
        $postseasonaverages = DB::table('postseasonaverages')->get();
        return $postseasonaverages;
    }
    public function postseasontotals()
    {
        $postseasontotals = DB::table('postseasontotals')->get();
        return $postseasontotals;
    }
    public function regularseasonaverages()
    {
        $regularseasonaverages = DB::table('regularseasonaverages')->get();
        return $regularseasonaverages;
    }
    public function regularseasontotals()
    {
        $result  =  DB::table('regularseasontotals')->get();
        return $result;
        
    }
    public function playerregularseasontotals($id)
    {
        return  DB::table('regularseasontotals')->where('player', $id)->get();
        
        
    }
        
  
    // ==============================================================================================================
    // ==================================== Lebron Stats Controllers ================================================
    public function lebronsregularseasonaverages()
    {
        $lebronsregularseasonaverages = DB::table('regularseasonaverages')->where('player','1')->get();
        return $lebronsregularseasonaverages; 
    }
    public function lebronregularseasontotals()
    {
        $lebronsregularseasontotals = DB::table('regularseasontotals')->where('player','1')->get();
        return $lebronsregularseasontotals;
        
    }
    public function lebronpostseasonaverages()
    {
      $lebronpostseasonaverages = DB::table('postseasonaverages')->where('player','1')->get();
        return $lebronpostseasonaverages;
    }  
    public function lebronpostseasontotals()
    {
        $lebronpostseasontotals = DB::table('postseasontotals')->where('player','1')->get();
        return $lebronpostseasontotals;
    }
    // ==============================================================================================================
    // =================================== Kobe Stats Conrollers ====================================================
     public function koberegularseasonaverages()
    {
        $koberegularseasonaverage = DB::table('regularseasonaverages')->where('player','2')->get();
        return $koberegularseasonaverage; 
    }
    public function koberegularseasontotals()
    {
        $koberegularseasontotals = DB::table('regularseasontotals')->where('player','2')->get();
        return $koberegularseasontotals;
    }
    public function kobepostseasonaverages()
    {
      $kobepostseasonaverages = DB::table('postseasonaverages')->where('player','2')->get();
        return $kobepostseasonaverages;
    }  
    public function kobepostseasontotals()
    {
        $kobepostseasontotals = DB::table('postseasontotals')->where('player','2')->get();
        return $kobepostseasontotals;
    }
    // ==============================================================================================================
    // =================================== Micheal Stats Conrollers ====================================================
    public function michealregularseasonaverages()
    {
        $michealregularseasonaverage = DB::table('regularseasonaverages')->where('player','3')->get();
        return $michealregularseasonaverage; 
    }
    public function michealregularseasontotals()
    {
        $michealregularseasontotals = DB::table('regularseasontotals')->where('season','Career')->get('');
        return $michealregularseasontotals;
    }
    public function michealpostseasonaverages()
    {
      $michealpostseasonaverages = DB::table('postseasonaverages')->where('player','3')->get();
        return $michealpostseasonaverages;
    }  
    public function michealpostseasontotals()
    {
        $michealpostseasontotals = DB::table('postseasontotals')->where('player','3')->get();
        return $michealpostseasontotals;
    }
    // ===========================================Specific Stats Controllers=====================================================================
    
    public function totalPoints()
    {
        $michealpostseasontotals = DB::table('regularseasontotals')->where('season','career')->get();
        return $michealpostseasontotals;
    }
    
}