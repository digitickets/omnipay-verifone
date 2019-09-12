<?php

namespace Omnipay\Verifone\Test\Gateway;

use Omnipay\Tests\GatewayTestCase;
use Omnipay\Verifone\Gateway;

class VerifoneTest extends GatewayTestCase
{
    /**
     * @var \Omnipay\Verifone\Gateway
     */
    protected $gateway;

    /**
     * @var array
     */
    protected $options;

    /**
     * @var array
     */
    protected $cardData = null;

    /**
     * Setup
     */
    protected function setUp()
    {
        parent::setUp();
        $this->gateway = new Gateway(
            $this->getHttpClient(),
            $this->getHttpRequest()
        );
    }
}
