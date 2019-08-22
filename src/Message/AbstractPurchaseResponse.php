<?php
namespace Omnipay\Verifone\Message;

use Omnipay\Common\Message\AbstractResponse;
use Omnipay\Common\Message\RedirectResponseInterface;
use Omnipay\Verifone\Traits\ResponseFieldsTrait;

abstract class AbstractPurchaseResponse extends AbstractResponse implements
    RedirectResponseInterface
{
    /**
     * Returns true if the transaction is successful and complete.
     *
     * @return bool
     */
    public function isSuccessful() : bool
    {
        return false;
    }
}
