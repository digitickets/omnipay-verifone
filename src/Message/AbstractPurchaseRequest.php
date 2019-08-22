<?php

namespace Omnipay\Verifone\Message;

use Omnipay\Common\Message\AbstractRequest;
use Omnipay\Verifone\Traits\GatewayParamsTrait;

abstract class AbstractPurchaseRequest extends AbstractRequest
{
    use GatewayParamsTrait;
}
