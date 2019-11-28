<?php

namespace App\Http\Controllers;

use App\Team;
use GuzzleHttp\Client;

class TeamsController extends Controller
{

    public function index()
    {
        $teams = Team::get();
        return view('teams.index', compact('teams'));
    }
}
