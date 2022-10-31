<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Game;

class GameController extends Controller
{
    public function index(){
        return Game::all();
    }

    public function create(Request $request){
        $game = new Game();
        $game->home_team_id = $request->home_team_id;
        $game->away_team_id	= $request->away_team_id;
        $game->competion = $request->competion;
        $game->home_ft_goals = 0;
        $game->away_ft_goals = 0;
        $game->home_ht_goals = 0;
        $game->away_ht_goals = 0;
        $game->is_finished = 0;
        $game->save();
        return $game;
    }

    public function show($id){
        $game  = Game::find($id);
        return $game;
    }

    public function edit(Request $request,$id){
        Game::where('id', $id)->update([
            "home_team_id" => $request->home_team_id,
            "away_team_id"	=> $request->away_team_id,
            "competion" => $request->competion,
            "home_ft_goals" => $request->home_ft_goals,
            "away_ft_goals" => $request->away_ft_goals,
            "home_ht_goals" => $request->home_ht_goals,
            "away_ht_goals" =>$request->away_ht_goals,
            "is_finished" => $request->is_finished,
        ]);

        return Game::all();
    }

    public function delete($id){
        Game::find($id)->delete();
        return Game::all();
    }
}
