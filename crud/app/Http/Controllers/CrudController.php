<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class CrudController extends Controller
{
    public function index(){
        $players=DB::select("Select * from player");       
        return view("welcome")->with("players", $players);
    }
}
