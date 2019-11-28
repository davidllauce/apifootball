<?php

namespace App\Repositories;

use App\Competition;
use App\Player;
use App\Team;
use Illuminate\Support\Facades\DB;

class Competitions extends GuzzleHttpRequest
{

    public function all()
    {
        try {
            $competitions = $this->get('competitions')['competitions'];
            foreach ($competitions as $competition) {
                Competition::firstOrCreate(
                    ['id' => $competition['id']],
                    ['name' => $competition['name'], 'code' => $competition['code'], 'plan' => $competition['plan']]);
            }
        } catch (\Exception $e) {
            $competitions = json_decode(DB::table('competitions')->get(), 200);

        }
        return $competitions;
    }


    public function show($competition_id)
    {
        try {
            $teams = $this->get("competitions/{$competition_id}/teams")['teams'];
            foreach ($teams as $team) {
                Team::firstOrCreate(['id' => $team['id']], ['name' => $team['name'], 'shortName' => $team['shortName'], 'competition_id' => $competition_id]);
            }
        } catch (\Exception $e) {
            if ($e->getCode() == 403) {
                $teams = json_decode(null, 200);
            } else {
                $teams = json_decode(DB::table('teams')->where('competition_id', $competition_id)->get(), 200);

            }
        }
        return $teams;
    }

    public function showteam($team_id)
    {

        try {
            $squad = $this->get("teams/{$team_id}")['squad'];
            foreach ($squad as $play) {
                Player::firstOrCreate(['id' => $play['id']], ['name' => $play['name'], 'shirtNumber' => $play['shirtNumber'], 'team_id' => $team_id]);
            }
        } catch (\Exception $e) {
            if ($e->getCode() == 403) {
                $squad = json_decode(null, 200);
            } else {
                $squad = json_decode(DB::table('players')->where('team_id', $team_id)->get(), 200);
            }
        }
        return $squad;

    }

}
