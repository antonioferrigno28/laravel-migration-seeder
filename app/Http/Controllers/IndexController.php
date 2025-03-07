<?php

namespace App\Http\Controllers;

use App\Models\Train;
use Illuminate\Http\Request;

class IndexController extends Controller
{
    public function index()
    {
        $trains = Train::orderBy("train_departure_time")->get();

        return view("home", compact("trains"));
    }
}
