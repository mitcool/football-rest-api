<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Team extends Model
{
    use HasFactory;

    protected $table = 'teams';
    public $timestamps = false;

    public function details(){
        return $this->hasOne('App\Models\TeamDetail','team_id','id');
    }

    public function players(){
        return $this->hasOne('App\Models\Player','team_id','id');
    }


}
