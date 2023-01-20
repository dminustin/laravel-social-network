<?php

namespace Tests\Unit\ApiFactory\Tags;

use Dminustin\ApiFactory\Exceptions\ClassNotFoundException;
use Dminustin\ApiFactory\Classes\ApiFactoryTestCase;
use Dminustin\ApiFactory\Classes\ApiResponse;
use App\Http\ApiFactory\Actions\Tags\AddAction;

/**
 * Class AddActionTest
 * Generated by Laravel API Factory v.1.2.0.1
 */
class AddActionTest extends ApiFactoryTestCase
{
    /**
     * @throws ClassNotFoundException
     */
    public function testAction()
    {
        $response = $this->getActionResponse(AddAction::class, []);
        $this->assertInstanceOf(ApiResponse::class, $response);
        $this->assertTrue($response->result, 'Result is true');
        //do something
    }
}