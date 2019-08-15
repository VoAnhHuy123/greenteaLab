<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Comment extends Model
{
    protected  $table='cmt';
    protected $fillable=['id_code','id_user','content','active'];

    public function cmt_user(){
        return $this->belongsTo('App\user','id_user','id');
    }
    public function cmt_code(){
        return $this->belongsTo('Ápp\code','id_code','id');
    }
}
