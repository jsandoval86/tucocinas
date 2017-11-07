<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class SocialUser extends Model
{
	// nombre de tabla
	protected $table = 'social_user';

	protected $fillable = [
		'user_id', 'social_user_id'
	];
}
