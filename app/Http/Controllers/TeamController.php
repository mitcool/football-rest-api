<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Team;

class TeamController extends Controller
{
    public function index(){

        return Team::with('details')
            ->with('players')
            ->get();
    }

    public function show($id){
        $team = Team::find($id);
        return $team;
    }

    public function create(Request $request){
        $team = new Team();
        $team->name = $request->name;
        $team->save();
        return $team;
        
    }

    public function edit(Request $request, $id){
        Team::where('id',$id)->update([    
            'name' => $request->name
        ]);
        return Team::all();
    }

    public function delete($id){
        Team::find($id)->delete();
        return Team::all();
    }
}
