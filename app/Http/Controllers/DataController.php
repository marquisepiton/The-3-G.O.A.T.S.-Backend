<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\DB;

class DataController extends Controller
{
    
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
        $regularseasontotals = DB::table('regularseasontotals')->get();

        return $regularseasontotals;
    }
    
    
    
}