<?php

namespace Omnipay\Verifone\Traits;

/**
 * Parameters that can be set at the gateway class, and so
 * must also be available at the request message class.
 */
trait GatewayParamsTrait
{

    /**
     * @param $value
     *
     * @return mixed
     */
    public function setMerchantId($value)
    {
        return $this->setParameter('merchantId', $value);
    }

    /**
     * @return mixed
     */
    public function getMerchantId()
    {
        return $this->getParameter('merchantId');
    }

    /**
     * @param $value
     *
     * @return mixed
     */
    public function setAccount($value)
    {
        return $this->setParameter('account', $value);
    }

    /**
     * @return mixed
     */
    public function getAccount()
    {
        return $this->getParameter('account');
    }

    /**
     * @param $value
     *
     * @return mixed
     */
    public function setSystemGuid($value)
    {
        return $this->setParameter('systemGuid', $value);
    }

    /**
     * @return mixed
     */
    public function getSystemGuid()
    {
        return $this->getParameter('systemGuid');
    }

    /**
     * @param $value
     *
     * @return mixed
     */
    public function setKey($value)
    {
        return $this->setParameter('key', $value);
    }

    /**
     * @return mixed
     */
    public function getKey()
    {
        return $this->getParameter('key');
    }

    /**
     * @param $value
     *
     * @return mixed
     */
    public function setKeyName($value)
    {
        return $this->setParameter('keyName', $value);
    }

    /**
     * @return mixed
     */
    public function getKeyName()
    {
        return $this->getParameter('keyName');
    }

    /**
     * @param $value
     *
     * @return mixed
     */
    public function setTemplateId($value)
    {
        return $this->setParameter('templateId', $value);
    }

    /**
     * @return mixed
     */
    public function getTemplateId()
    {
        return $this->getParameter('templateId');
    }
}
