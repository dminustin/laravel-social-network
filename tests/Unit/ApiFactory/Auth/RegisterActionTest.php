<?php

namespace Tests\Unit\ApiFactory\Auth;

use Dminustin\ApiFactory\Exceptions\ClassNotFoundException;
use Dminustin\ApiFactory\Classes\ApiFactoryTestCase;
use Dminustin\ApiFactory\Classes\ApiResponse;
use App\Http\ApiFactory\Actions\Auth\RegisterAction;

/**
 * Class RegisterActionTest
 * Generated by Laravel API Factory v.1.2.0.1
 */
class RegisterActionTest extends ApiFactoryTestCase
{
    /**
     * @throws ClassNotFoundException
     */
    public function testAction()
    {
        $response = $this->getActionResponse(RegisterAction::class, [
            'email' => '1@test.ru',
            'password' => 'test',
            'confirm' => 'yes'
        ]);
        $this->assertInstanceOf(ApiResponse::class, $response);
        $this->assertTrue($response->result, 'Result is true');
        //do something
    }
}
