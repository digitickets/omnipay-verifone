<?php

namespace Omnipay\Verifone\Helper;

use SimpleXMLElement;

interface XMLOutput
{
    public function fromArray(array $data);

    public function asXML($root_name = null): SimpleXMLElement;

    public function asXMLString(): string;
}