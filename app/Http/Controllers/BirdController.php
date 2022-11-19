<?php

namespace App\Http\Controllers;

use App\Models\Bird;
use Illuminate\Http\Request;

class BirdController extends Controller
{
    public function index()
    {
        $bird = Bird::all();

        return $bird;
    }
    /* public function store(Request $request)
    {
        $bird = new Bird();
        $bird->cim = $request->cim;
        $bird->szerzo = $request->szerzo;
        $bird->ar = $request->ar;
        $bird->save();
    } */
}
