<?php

namespace App\Http\Controllers;

use App\Repositories\Competitions;

class CompetitionsController extends Controller
{
    protected $competitions;

    public function __construct(Competitions $competitions)
    {
        $this->competitions = $competitions;
    }

    public function index()
    {
        $competitions = $this->competitions->all();
        return view('competitions.index', compact('competitions'));
    }

    public function show($competition_id)
    {
        $teams = $this->competitions->show($competition_id);

        return view('competitions.show', compact('teams'));
    }

    public function showteam($team_id)
    {
        $squad = $this->competitions->showteam($team_id);
        return view('competitions.showteam', compact('squad'));

    }
}
