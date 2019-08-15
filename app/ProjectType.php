<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class ProjectType extends Model {

	protected $fillable=['name','active'];
	public function project() {
		return $this->hasMany( 'App\Project', 'id_type', 'id' );
	}
}
