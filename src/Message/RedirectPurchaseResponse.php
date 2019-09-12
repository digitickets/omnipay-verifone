<?php

namespace Omnipay\Verifone\Message;

/**
 * Class RedirectPurchaseResponse
 * @package Omnipay\Verifone\Message
 */
class RedirectPurchaseResponse extends AbstractPurchaseResponse
{
    /**
     * @var string
     */
    protected $liveCheckoutEndpoint = 'https://paypage2-cst.cxmlpg.com/paypage.aspx';
    /**
     * @var string
     */
    protected $testCheckoutEndpoint = 'https://paypage2-cst.cxmlpg.com/paypage.aspx';

    /**
     * isRedirect
     * @return bool
     */
    public function isRedirect(): bool
    {
        return true;
    }

    /**
     * getRedirectUrl
     * @return string
     */
    public function getRedirectUrl(): string
    {
        return $this->getCheckoutEndpoint();
    }

    /**
     * getTransactionReference
     * @return string
     */
    public function getTransactionReference(): string
    {
        return $this->getRequest()->getTransactionId();
    }

    /**
     * getRedirectMethod
     * @return string
     */
    public function getRedirectMethod(): string
    {
        return 'POST';
    }

    /**
     * getRedirectData
     * @return array
     */
    public function getRedirectData(): array
    {
        return $this->getRequest()->getData();
    }

    /**
     * getCheckoutEndpoint
     * @return string
     */
    protected function getCheckoutEndpoint(): string
    {
        return $this->getRequest()->getTestMode() ? $this->testCheckoutEndpoint : $this->liveCheckoutEndpoint;
    }
}
