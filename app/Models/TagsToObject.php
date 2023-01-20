<?php

namespace App\Models;

use App\Models\Base\TagsToObject as BaseTagsToObject;

class TagsToObject extends BaseTagsToObject
{
	protected $fillable = [
		'tag_id',
		'object_id',
		'object_class',
		'tag_type'
	];
}
