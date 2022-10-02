<?php

namespace App\Http\Controllers;

use App\Train;
use Illuminate\Http\Request;

class TrainController extends Controller
{
    public function TrainList(){
        $Trains = Train::whereDate('Depature_Time', '2022-10-02')->get();
        
        return view('TrainList', compact("Trains"));
        
    }
}
