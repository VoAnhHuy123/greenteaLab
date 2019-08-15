<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Project extends Model
{
    protected $table='project';

    protected $fillable=['id_type','name','content','content','active','leader','image'];

    public function type(){
        return $this->belongsTo( 'App\ProjectType','id_type','id');
    }

    public function code_pro(){
        return $this->hasMany('App\Code','id_pro','id');
    }

    public function team_pro(){
        return $this->belongsTo( 'App\Teamwork','id_pro','id');
    }

    public function user_leader(){
        return $this->belongsTo('app\user','leader','id');
    }

}
