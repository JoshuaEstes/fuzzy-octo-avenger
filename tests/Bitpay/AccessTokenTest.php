<?php

namespace Bitpay;



class AccessTokenTest extends \PHPUnit_Framework_TestCase
{

    public function testId()
    {
        $token = new AccessToken();
        $token->setId('test');

        $this->assertSame('test', $token->getId());
    }

    public function testEmail()
    {
        $token = new AccessToken();
        $token->setEmail('test@test.com');

        $this->assertSame('test@test.com', $token->getEmail());
    }

    public function getLabel()
    {
        $token = new AccessToken();
        $token->setLabel('label');

        $this->assertSame('label', $token->getLabel());
    }
}
