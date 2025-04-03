<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Train;

class TrainController extends Controller
{
    public function index () {
        $all_trains = Train::all();
        return view("home", compact("all_trains"));
    }
}
