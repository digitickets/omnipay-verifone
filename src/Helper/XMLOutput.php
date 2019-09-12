<?php

namespace Omnipay\Verifone\Helper;

use SimpleXMLElement;

interface XMLOutput
{
    /**
     * @param array $data
     *
     * @return mixed
     */
    public function fromArray(array $data);

    /**
     * @param null $root_name
     *
     * @return \SimpleXMLElement
     */
    public function asXML($root_name = null): SimpleXMLElement;

    /**
     * @return string
     */
    public function asXMLString(): string;
}