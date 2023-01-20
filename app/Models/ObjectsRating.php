<?php

namespace App\Models;

use App\Models\Base\ObjectsRating as BaseObjectsRating;

class ObjectsRating extends BaseObjectsRating
{
	protected $fillable = [
		'object_id',
		'object_type',
		'rating'
	];
}
