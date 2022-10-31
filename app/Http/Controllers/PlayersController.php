<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Player;

class PlayersController extends Controller
{
    public function index(){

        return Player::get();
    }

    public function show($id){
        $player = Player::find($id);
        return $player;
    }

    public function create(Request $request){
        $player = new Player();
        $player->name = $request->name;
        $player->position = $request->position;
        $player->team_id = $request->team_id;
        $player->save();
        return $player;
        
    }

    public function edit(Request $request, $id){
        Player::where('id',$id)->update([    
            'name' => $request->name
        ]);
        return Player::all();
    }

    public function delete($id){
        Player::find($id)->delete();
        return Player::all();
    }
    
}
