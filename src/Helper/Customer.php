<?php

namespace Omnipay\Verifone\Helper;

class Customer extends BaseXML
{
    protected $address;
    protected $basket;
    protected $deliveryaddress;
    protected $deliveryedit;
    protected $email;
    protected $firstname;
    protected $lastname;

    /**
     * @return mixed
     */
    public function getAddress(): Address
    {
        return $this->address;
    }

    /**
     * @param mixed $address
     */
    public function setAddress(Address $address)
    {
        $this->address = $address;
    }

    /**
     * @return mixed
     */
    public function getBasket(): Basket
    {
        return $this->basket;
    }

    /**
     * @param mixed $basket
     */
    public function setBasket(Basket $basket)
    {
        $this->basket = $basket;
    }

    /**
     * @return mixed
     */
    public function getDeliveryaddress(): Address
    {
        return $this->deliveryaddress;
    }

    /**
     * @param mixed $deliveryaddress
     */
    public function setDeliveryaddress(Address $deliveryaddress)
    {
        $this->deliveryaddress = $deliveryaddress;
    }

    /**
     * @return mixed
     */
    public function getDeliveryedit()
    {
        return $this->deliveryedit;
    }

    /**
     * @param mixed $deliveryedit
     */
    public function setDeliveryedit($deliveryedit)
    {
        $this->deliveryedit = $deliveryedit;
    }

    /**
     * @return mixed
     */
    public function getEmail()
    {
        return $this->email;
    }

    /**
     * @param mixed $email
     */
    public function setEmail($email)
    {
        $this->email = $email;
    }

    /**
     * @return mixed
     */
    public function getFirstname()
    {
        return $this->firstname;
    }

    /**
     * @param mixed $firstname
     */
    public function setFirstname($firstname)
    {
        $this->firstname = $firstname;
    }

    /**
     * @return mixed
     */
    public function getLastname()
    {
        return $this->lastname;
    }

    /**
     * @param mixed $lastname
     */
    public function setLastname($lastname)
    {
        $this->lastname = $lastname;
    }
}