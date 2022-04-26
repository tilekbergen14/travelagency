<?php

namespace App\Http\Controllers;

use App\Models\Connection;
use App\Models\Place;
use Illuminate\Http\Request;

class HomeController extends Controller
{
    public function index(){
        $places = Place::get();
        $latestPlaces = Place::orderBy("created_at", "desc")->get();
        return view("welcome", ["places" =>  $places, "latestPlaces" => $latestPlaces]);
    }
    public function connect(Request $request){
        $this->validate($request, [
            "name" => "required",
            "email" => "required",
        ]);
        Connection::create([
            "name" => $request->name,
            "email" => $request->email,
            "question" => $request->question,
            "interest" => $request->interest,
            "number" => $request->number,
        ]);
        return back();
    }
}
