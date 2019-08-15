<?php

namespace App;

use Illuminate\Notifications\Notifiable;
use Illuminate\Contracts\Auth\MustVerifyEmail;
use Illuminate\Foundation\Auth\User as Authenticatable;

class User extends Authenticatable {
	use Notifiable;
	protected $fillable = [
		'name',
		'email',
		'password',
		'group',
		'email',
//		'avt',
		'phone',
		'gender',
//		'active',
	];

	protected $hidden = [
		'password',
		'remember_token',
	];

	protected $casts = [
		'email_verified_at' => 'datetime',
	];

	public function leader() {
		return $this->belongsTo( 'project', 'leader', 'id' );
	}

	public function team_user() {
		return $this->belongsTo( 'app\teamwork', 'id_user', 'id' );
	}

	public function cmt_user() {
		return $this->belongsTo( 'app\cmt', 'id_user', 'id' );
	}
}
