<?php

namespace Tests\Unit\ApiFactory\Auth;

use Dminustin\ApiFactory\Exceptions\ClassNotFoundException;
use Dminustin\ApiFactory\Classes\ApiFactoryTestCase;
use Dminustin\ApiFactory\Classes\ApiResponse;
use App\Http\ApiFactory\Actions\Auth\ResetAction;

/**
 * Class ResetActionTest
 * Generated by Laravel API Factory v.1.2.0.1
 */
class ResetActionTest extends ApiFactoryTestCase
{
    /**
     * @throws ClassNotFoundException
     */
    public function testAction()
    {
        $response = $this->getActionResponse(ResetAction::class, ['email'=>'1@test.ru']);
        $this->assertInstanceOf(ApiResponse::class, $response);
        $this->assertTrue($response->result, 'Result is true');
        //do something
    }
}