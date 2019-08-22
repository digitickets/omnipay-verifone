<?php

namespace Omnipay\Verifone\Helper;

class Request extends BaseXML
{
    protected $javascriptenabled;
    protected $merchant;
    protected $merchantreference;
    protected $returnurl;
    protected $template;

    /**
     * @return mixed
     */
    public function getJavascriptenabled()
    {
        return $this->javascriptenabled;
    }

    /**
     * @param mixed $javascriptenabled
     */
    public function setJavascriptenabled(string $javascriptenabled)
    {
        $this->javascriptenabled = $javascriptenabled;
    }

    /**
     * @return mixed
     */
    public function getTemplate()
    {
        return $this->template;
    }

    /**
     * @param mixed $template
     */
    public function setTemplate(Template $template)
    {
        $this->template = $template;
    }

    /**
     * @return mixed
     */
    public function getMerchant()
    {
        return $this->merchant;
    }

    /**
     * @param mixed $merchant
     */
    public function setMerchant(Merchant $merchant)
    {
        $this->merchant = $merchant;
    }

    /**
     * @return mixed
     */
    public function getMerchantreference()
    {
        return $this->merchantreference;
    }

    /**
     * @param mixed $merchantreference
     */
    public function setMerchantreference(string $merchantreference)
    {
        $this->merchantreference = $merchantreference;
    }

    /**
     * @return mixed
     */
    public function getReturnurl()
    {
        return $this->returnurl;
    }

    /**
     * @param mixed $returnurl
     */
    public function setReturnurl(string $returnurl)
    {
        $this->returnurl = $returnurl;
    }
}