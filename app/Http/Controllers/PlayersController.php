<?php

namespace App\Http\Controllers;

use App\Player;
use App\Team;
use Illuminate\Http\Request;

class PlayersController extends Controller
{
    public function index()
    {
        $players = Player::get();
        return view('players.index', compact('players'));
    }
}
