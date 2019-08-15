<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Teamwork extends Model
{
    protected $table='teamwork';

    protected $fillable=['id_user','id_pro','active'];

    public function project_team(){
        return $this->belongsTo('App\project','id_pro',id);
    }
    public function user_team(){
        return $this->hasMany('app\user','id_user','id');
    }
}

