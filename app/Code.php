<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Code extends Model {
	protected $table = 'code';
	protected $fillable=['id_pro','content','image','active'];

	public function project_code() {
		return $this->belongsTo( 'App\Project', 'id_pro', 'id' );
	}

	public function code_cmt() {
		return $this->belongsTo( 'App\cmt', 'id_code', 'id' );
	}
}
