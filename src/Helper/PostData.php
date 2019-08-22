<?php

namespace Omnipay\Verifone\Helper;

class PostData extends BaseXML
{

    protected $api;
    protected $keyname;
    protected $merchantid;
    protected $requesttype;
    protected $requestdata;

    /**
     * @return mixed
     */
    public function getApi()
    {
        return $this->api;
    }

    /**
     * @param mixed $api
     */
    public function setApi(int $api)
    {
        $this->api = $api;
    }

    /**
     * @return mixed
     */
    public function getKeyname()
    {
        return $this->keyname;
    }

    /**
     * @param mixed $keyname
     */
    public function setKeyname(string $keyname)
    {
        $this->keyname = $keyname;
    }

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
    public function setMerchantid(string $merchantid)
    {
        $this->merchantid = $merchantid;
    }

    /**
     * @return mixed
     */
    public function getRequesttype()
    {
        return $this->requesttype;
    }

    /**
     * @param mixed $requesttype
     */
    public function setRequesttype(string $requesttype)
    {
        $this->requesttype = $requesttype;
    }

    /**
     * @return mixed
     */
    public function getRequestdata()
    {
        return $this->requestdata;
    }

    /**
     * @param mixed $requestdata
     */
    public function setRequestdata($requestdata)
    {
        $this->requestdata = $requestdata;
    }
}