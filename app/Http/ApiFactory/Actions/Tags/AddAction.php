<?php

namespace App\Http\ApiFactory\Actions\Tags;

use Dminustin\ApiFactory\Classes\ApiFactoryAction;
use Dminustin\ApiFactory\Classes\ApiResponse;
use Dminustin\LSNE\CorePackage\Exceptions\InvalidObjectTypeException;
use Dminustin\LSNE\CorePackage\Lists\ObjectTypesList;
use Dminustin\LSNE\TagsPackage\Models\Tag;
use Dminustin\LSNE\TagsPackage\Models\TagsToObject;

/**
 * Class AddAction
 * Generated by Laravel API Factory v.1.2.0.1
 */
class AddAction extends ApiFactoryAction
{
    protected array $validationRules = [
        'tag'=>'string|required',
        'object_id'=>'string|required',
        'object_type'=>'string|required',
    ];

    /**
     * @throws InvalidObjectTypeException
     */
    public function handle(): ApiResponse
    {
        if (!in_array($this->data['object_type'], ObjectTypesList::getList())) {
            throw new InvalidObjectTypeException('Object ' . $this->data['object_type'] . ' is invalid');
        }
        $tag = Tag::getOrCreate($this->data['tag']);
        $objectTag = new TagsToObject([
            'tag_id'=>$tag->id,
            'object_id'=>$this->data['object_id'],
            'object_type'=>$this->data['object_type']
        ]);
        $objectTag->save();
        return $this->response->setData($objectTag)->setResult(true);
    }
}
