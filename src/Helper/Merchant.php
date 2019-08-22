<?php

namespace Omnipay\Verifone\Helper;

class Merchant extends BaseXML
{

    protected $merchantid;
    protected $systemguid;

    /**
     * @return mixed
     */
    public function getMerchantid()
    {
        return $this->merchantid;
    }

    /**
     * @param mixed $merchantid
     */
    public function setMerchantid($merchantid)
    {
        $this->merchantid = $merchantid;
    }

    /**
     * @return mixed
     */
    public function getSystemguid()
    {
        return $this->systemguid;
    }

    /**
     * @param mixed $systemguid
     */
    public function setSystemguid($systemguid)
    {
        $this->systemguid = $systemguid;
    }
}