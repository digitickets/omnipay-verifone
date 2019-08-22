<?php

namespace Omnipay\Verifone\Traits;

/**
 * Parameters that can be set at the gateway class, and so
 * must also be available at the request message class.
 */
trait GatewayParamsTrait
{

    public function setMerchantId($value)
    {
        return $this->setParameter('merchantId', $value);
    }

    public function getMerchantId()
    {
        return $this->getParameter('merchantId');
    }

    public function setAccount($value)
    {
        return $this->setParameter('account', $value);
    }

    public function getAccount()
    {
        return $this->getParameter('account');
    }

    public function setSystemGuid($value)
    {
        return $this->setParameter('systemGuid', $value);
    }

    public function getSystemGuid()
    {
        return $this->getParameter('systemGuid');
    }

    public function setKey($value)
    {
        return $this->setParameter('key', $value);
    }

    public function getKey()
    {
        return $this->getParameter('key');
    }

    public function setKeyName($value)
    {
        return $this->setParameter('keyName', $value);
    }

    public function getKeyName()
    {
        return $this->getParameter('keyName');
    }

    public function setTemplateId($value)
    {
        return $this->setParameter('templateId', $value);
    }

    public function getTemplateId()
    {
        return $this->getParameter('templateId');
    }
}
