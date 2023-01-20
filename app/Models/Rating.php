<?php

namespace App\Models;

use App\Models\Base\Rating as BaseRating;

class Rating extends BaseRating
{
	protected $fillable = [
		'object_id',
		'object_type',
		'voter_id',
		'voter_weight',
		'vote'
	];
}
