<?php

namespace Omnipay\Verifone\Helper;

class EftRequest extends Request
{
    protected $accountid;
    protected $allowedpaymentmethods;
    protected $allowedpaymentschemes;
    protected $authcode;
    protected $capturemethod;
    protected $customer;
    protected $description;
    protected $enableUpdateToken;
    protected $hideBillingDetails;
    protected $hideDeliveryDetails;
    protected $hidepaymentresultsuccess;
    protected $payerauth;
    protected $processingidentifier;
    protected $processCPC;
    protected $registertoken;
    protected $showorderconfirmation;
    protected $showpaymentresult;
    protected $starpan;
    protected $tokenexpirationdate;
    protected $tokenid;
    protected $countrycode;
    protected $transactionvalue;
    protected $aad;

    /**
     * @return mixed
     */
    public function getAccountid()
    {
        return $this->accountid;
    }

    /**
     * @param mixed $accountid
     */
    public function setAccountid($accountid)
    {
        $this->accountid = $accountid;
    }

    /**
     * @return mixed
     */
    public function getAllowedpaymentmethods()
    {
        return $this->allowedpaymentmethods;
    }

    /**
     * @param mixed $allowedpaymentmethods
     */
    public function setAllowedpaymentmethods(string $allowedpaymentmethods)
    {
        $this->allowedpaymentmethods = $allowedpaymentmethods;
    }

    /**
     * @return mixed
     */
    public function getAllowedpaymentschemes()
    {
        return $this->allowedpaymentschemes;
    }

    /**
     * @param mixed $allowedpaymentschemes
     */
    public function setAllowedpaymentschemes(string $allowedpaymentschemes)
    {
        $this->allowedpaymentschemes = $allowedpaymentschemes;
    }

    /**
     * @return mixed
     */
    public function getAuthcode()
    {
        return $this->authcode;
    }

    /**
     * @param mixed $authcode
     */
    public function setAuthcode(string $authcode)
    {
        $this->authcode = $authcode;
    }

    /**
     * @return mixed
     */
    public function getCapturemethod()
    {
        return $this->capturemethod;
    }

    /**
     * @param mixed $capturemethod
     */
    public function setCapturemethod(int $capturemethod)
    {
        $this->capturemethod = $capturemethod;
    }

    /**
     * @return mixed
     */
    public function getCustomer()
    {
        return $this->customer;
    }

    /**
     * @param mixed $customer
     */
    public function setCustomer(Customer $customer)
    {
        $this->customer = $customer;
    }

    /**
     * @return mixed
     */
    public function getDescription()
    {
        return $this->description;
    }

    /**
     * @param mixed $description
     */
    public function setDescription(string $description)
    {
        $this->description = $description;
    }

    /**
     * @return mixed
     */
    public function getEnableUpdateToken()
    {
        return $this->enableUpdateToken;
    }

    /**
     * @param mixed $enableUpdateToken
     */
    public function setEnableUpdateToken(bool $enableUpdateToken)
    {
        $this->enableUpdateToken = $enableUpdateToken;
    }

    /**
     * @return mixed
     */
    public function getHideBillingDetails()
    {
        return $this->hideBillingDetails;
    }

    /**
     * @param mixed $hideBillingDetails
     */
    public function setHideBillingDetails(bool $hideBillingDetails)
    {
        $this->hideBillingDetails = $hideBillingDetails;
    }

    /**
     * @return mixed
     */
    public function getHideDeliveryDetails()
    {
        return $this->hideDeliveryDetails;
    }

    /**
     * @param mixed $hideDeliveryDetails
     */
    public function setHideDeliveryDetails(bool $hideDeliveryDetails)
    {
        $this->hideDeliveryDetails = $hideDeliveryDetails;
    }

    /**
     * @return mixed
     */
    public function getHidepaymentresultsuccess()
    {
        return $this->hidepaymentresultsuccess;
    }

    /**
     * @param mixed $hidepaymentresultsuccess
     */
    public function setHidepaymentresultsuccess(bool $hidepaymentresultsuccess)
    {
        $this->hidepaymentresultsuccess = $hidepaymentresultsuccess;
    }

    /**
     * @return mixed
     */
    public function getPayerauth()
    {
        return $this->payerauth;
    }

    /**
     * @param mixed $payerauth
     */
    public function setPayerauth(PayerAuth $payerauth)
    {
        $this->payerauth = $payerauth;
    }

    /**
     * @return mixed
     */
    public function getProcessingidentifier()
    {
        return $this->processingidentifier;
    }

    /**
     * @param mixed $processingidentifier
     */
    public function setProcessingidentifier(int $processingidentifier)
    {
        $this->processingidentifier = $processingidentifier;
    }

    /**
     * @return mixed
     */
    public function getProcessCPC()
    {
        return $this->processCPC;
    }

    /**
     * @param mixed $processCPC
     */
    public function setProcessCPC(bool $processCPC)
    {
        $this->processCPC = $processCPC;
    }

    /**
     * @return mixed
     */
    public function getRegistertoken()
    {
        return $this->registertoken;
    }

    /**
     * @param mixed $registertoken
     */
    public function setRegistertoken(bool $registertoken)
    {
        $this->registertoken = $registertoken;
    }

    /**
     * @return mixed
     */
    public function getShoworderconfirmation()
    {
        return $this->showorderconfirmation;
    }

    /**
     * @param mixed $showorderconfirmation
     */
    public function setShoworderconfirmation(bool $showorderconfirmation)
    {
        $this->showorderconfirmation = $showorderconfirmation;
    }

    /**
     * @return mixed
     */
    public function getShowpaymentresult()
    {
        return $this->showpaymentresult;
    }

    /**
     * @param mixed $showpaymentresult
     */
    public function setShowpaymentresult(bool $showpaymentresult)
    {
        $this->showpaymentresult = $showpaymentresult;
    }

    /**
     * @return mixed
     */
    public function getStarpan()
    {
        return $this->starpan;
    }

    /**
     * @param mixed $starpan
     */
    public function setStarpan(string $starpan)
    {
        $this->starpan = $starpan;
    }

    /**
     * @return mixed
     */
    public function getTokenexpirationdate()
    {
        return $this->tokenexpirationdate;
    }

    /**
     * @param mixed $tokenexpirationdate
     */
    public function setTokenexpirationdate(string $tokenexpirationdate)
    {
        $this->tokenexpirationdate = $tokenexpirationdate;
    }

    /**
     * @return mixed
     */
    public function getTokenid()
    {
        return $this->tokenid;
    }

    /**
     * @param mixed $tokenid
     */
    public function setTokenid($tokenid)
    {
        $this->tokenid = $tokenid;
    }

    /**
     * @return mixed
     */
    public function getCountrycode()
    {
        return $this->countrycode;
    }

    /**
     * @param mixed $countrycode
     */
    public function setCountrycode(string $countrycode)
    {
        $this->countrycode = $countrycode;
    }

    /**
     * @return mixed
     */
    public function getTransactionvalue()
    {
        return $this->transactionvalue;
    }

    /**
     * @param mixed $transactionvalue
     */
    public function setTransactionvalue(string $transactionvalue)
    {
        $this->transactionvalue = $transactionvalue;
    }

    /**
     * @return mixed
     */
    public function getAad()
    {
        return $this->aad;
    }

    /**
     * @param mixed $aad
     */
    public function setAad(AAD $aad)
    {
        $this->aad = $aad;
    }
}