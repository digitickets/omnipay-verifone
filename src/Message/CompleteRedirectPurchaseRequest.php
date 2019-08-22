<?php

namespace Omnipay\Verifone\Message;

class CompleteRedirectPurchaseRequest extends AbstractPurchaseRequest
{

    /**
     * @return array
     */
    public function getData(): array
    {
        return $this->httpRequest->query->all();
    }

    /**
     * We don't need to send anything back to the provider so we just return
     * a CompleteRedirectPurchaseResponse with the data coming from the
     * provider's request (callback)
     *
     * @param mixed $data
     *
     * @return CompleteRedirectPurchaseResponse
     */
    public function sendData($data): CompleteRedirectPurchaseResponse
    {
        return $this->response = new CompleteRedirectPurchaseResponse(
            $this,
            $data
        );
    }
}
