<?php

namespace Omnipay\Verifone\Helper;

class Template extends BaseXML
{
    protected $languagetemplateid;
    protected $merchanttemplateid;

    /**
     * @return mixed
     */
    public function getLanguagetemplateid()
    {
        return $this->languagetemplateid;
    }

    /**
     * @param mixed $languagetemplateid
     */
    public function setLanguagetemplateid($languagetemplateid)
    {
        $this->languagetemplateid = $languagetemplateid;
    }

    /**
     * @return mixed
     */
    public function getMerchanttemplateid()
    {
        return $this->merchanttemplateid;
    }

    /**
     * @param mixed $merchanttemplateid
     */
    public function setMerchanttemplateid($merchanttemplateid)
    {
        $this->merchanttemplateid = $merchanttemplateid;
    }

}