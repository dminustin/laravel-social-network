<?php

namespace App\Models;

use App\Models\Base\Tag as BaseTag;

class Tag extends BaseTag
{
	protected $fillable = [
		'title',
		'name_hash',
		'locked',
		'usage_count'
	];
}
