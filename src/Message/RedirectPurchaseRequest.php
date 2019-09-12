<?php

namespace Omnipay\Verifone\Message;

use function htmlentities;
use function is_numeric;
use League\ISO3166\Exception\InvalidArgumentException;
use League\ISO3166\ISO3166;
use Omnipay\Common\CreditCard;
use Omnipay\Verifone\Helper\Address;
use Omnipay\Verifone\Helper\Basket;
use Omnipay\Verifone\Helper\Customer;
use Omnipay\Verifone\Helper\EftRequest;
use Omnipay\Verifone\Helper\Merchant;
use Omnipay\Verifone\Helper\PostData;
use Omnipay\Verifone\Helper\Template;
use function strlen;
use Omnipay\Common\Message\ResponseInterface;

class RedirectPurchaseRequest extends AbstractPurchaseRequest
{
    /**
     * @return Merchant
     */
    protected function getMerchant()
    {
        return (new Merchant())->fromArray(
            [
                'merchantid' => $this->getMerchantId(),
                'systemguid' => $this->getSystemGuid(),
            ]
        );
    }

    /**
     * @param CreditCard $card
     *
     * @return Address
     */
    protected function getCustomerAddress(CreditCard $card)
    {
        return (new Address())->fromArray([
            'address1' => $card->getAddress1(),
            'address2' => $card->getAddress2(),
            'country' => $card->getCountry(),
            'countrycode' => $this->getCountry($card->getCountry(),
                'numeric'),
            'county' => $card->getState(),
            'postcode' => $card->getPostcode(),
            'town' => $card->getCity(),
        ]);
    }

    /**
     * @param CreditCard $card
     *
     * @return Address
     */
    protected function getDeliveryAddress(CreditCard $card)
    {
        return (new Address())->fromArray([
            'address1' => $card->getShippingAddress1(),
            'address2' => $card->getShippingAddress2(),
            'country' => $card->getShippingCountry(),
            'countrycode' => $this->getCountry($card->getShippingCountry(),
                'numeric'),
            'county' => $card->getShippingState(),
            'postcode' => $card->getShippingPostcode(),
            'town' => $card->getShippingCity(),
        ]);
    }

    /**
     * @return bool
     */
    protected function getBasket()
    {
        return new Basket();
    }

    /**
     * @param $card
     *
     * @return \Omnipay\Verifone\Helper\Customer
     */
    protected function getCustomer(CreditCard $card)
    {
        return (new Customer())->fromArray(
            [
                'address' => $this->getCustomerAddress($card),
                'deliveryaddress' => $this->getDeliveryAddress($card),
                'deliveryedit' => false,
                'email' => $card->getEmail(),
                'firstname' => $card->getFirstName(),
                'lastname' => $card->getLastName(),
            ]
        );
    }

    /**
     * @return Template
     */
    protected function getTemplate()
    {
        return (new Template())->fromArray(
            [
                'languagetemplateid' => 1,
                'merchanttemplateid' => $this->getTemplateId(),
            ]
        );
    }

    /**
     * @return EftRequest
     * @throws \Omnipay\Common\Exception\InvalidRequestException
     */
    protected function getEftRequest()
    {
        $card = $this->getCard();

        return (new EftRequest())->fromArray([
            'accountid' => $this->getAccount(),
            'merchant' => $this->getMerchant($card),
            'merchantreference' => $this->getTransactionId(),
            'returnurl' => $this->getReturnUrl(),
            'capturemethod' => 12,
            'customer' => $this->getCustomer($card),
            'description' => $this->getDescription(),
            'processingidentifier' => 1,
            'registertoken' => false,
            'showorderconfirmation' => false,
            'showpaymentresult' => false,
            'transactionvalue' => $this->getAmount(),
            'template' => $this->getTemplate(),
        ]);

    }

    /**
     * @param string $input
     *
     * @return string
     */
    protected function sanitize(string $input)
    {

        return htmlentities(
            $input,
            ENT_COMPAT,
            'UTF-8');
    }

    /**
     * Returns the data on the request.
     *
     * It calculates the HASH that we need to send to the provider as well.
     *
     * @return array
     * @throws \Omnipay\Common\Exception\InvalidRequestException
     */
    public function getData(): array
    {
        $this->validate('card');
        $card = $this->getCard();

        $postdata = $this->getPostData($card);

        $requestData = $postdata->getRequestdata()->asXmlString();

        if ($this->getKey() && $this->getKeyName()) {
            //encryption data present so we use it to encrypt the content of
            // the request
            $requestData = $this->encrypt(
                $this->getKey(), $requestData
            );
        } else {
            $requestData = $this->sanitize(
                $requestData
            );
        }

        $postdata->setRequestdata(
            $requestData
        );

        $xml = $postdata->asXMLString();

        return [
            'postdata' => $this->sanitize(
                $this->sanitize($xml)
            ),
        ];
    }

    /**
     * $expectedFormat = name | alpha2 | alpha3 | numeric | currency
     *
     * @param        $country
     * @param string $expectedFormat
     *
     * @return array
     */
    public function getCountry($country, string $expectedFormat = null)
    {
        try {
            if (is_numeric($country)) {
                $data = (new ISO3166)->numeric($country);
            } elseif (strlen($country) == 3) {
                $data = (new ISO3166)->alpha3($country);
            } elseif (strlen($country) == 2) {
                $data = (new ISO3166)->alpha2($country);
            } else {
                $data = (new ISO3166)->name($country);
            }
        } catch (InvalidArgumentException $e) {
            $data = null;
        }

        if ($expectedFormat && $data) {
            $data = $data[$expectedFormat];
        }

        return $data;
    }

    /**
     * Send the request with specified data
     *
     * @param  mixed $data The data to send
     *
     * @return ResponseInterface
     */
    public function sendData($data): ResponseInterface
    {
        return new RedirectPurchaseResponse($this, $data);
    }

    /**
     * @param CreditCard $card
     *
     * @return \Omnipay\Verifone\Helper\PostData
     * @throws \Omnipay\Common\Exception\InvalidRequestException
     */
    protected function getPostData(CreditCard $card): PostData
    {
        $postData = new PostData();
        $requestData = $this->getEftRequest($card);

        $postData->fromArray(
            [
                'api' => 2,
                'keyname' => $this->getKeyName(),
                'merchantid' => $this->getMerchantId(),
                'requesttype' => 'eftrequest',
                'requestdata' => $requestData,
            ]
        );

        return $postData;
    }

    /**
     * @param string $aesKey Base64 encoded key
     * @param string $dataToEncrypt
     *
     * @return string base64 encoded
     */
    protected function encrypt($aesKey, $dataToEncrypt)
    {
        $iv = '{{{{{{{{{{{{{{{{';
        $output = openssl_encrypt($dataToEncrypt, 'AES-256-CBC', base64_decode($aesKey),
            OPENSSL_RAW_DATA, $iv);
        $output = base64_encode($output);

        return $output;
    }

    /**
     * @param string $aesKey Base64 encoded key
     * @param string $dataTodecrypt Base64 encoded data
     *
     * @return string
     */
    protected function decrypt($aesKey, $dataTodecrypt)
    {
        $iv = '{{{{{{{{{{{{{{{{';
        $dataTodecrypt = base64_decode($dataTodecrypt);
        $output = openssl_decrypt($dataTodecrypt, 'AES-256-CBC',
            base64_decode($aesKey), OPENSSL_RAW_DATA, $iv);

        return $output;
    }
}
