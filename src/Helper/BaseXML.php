<?php

namespace Omnipay\Verifone\Helper;

use SimpleXMLElement;
use function strtolower;

abstract class BaseXML implements XMLOutput
{

    /**
     * @return array
     */
    public function getProperties()
    {
        return get_object_vars($this);
    }

    /**
     * @param array $data
     *
     * @return $this
     */
    public function fromArray(array $data)
    {
        if (is_array($data)) {
            foreach ($data as $key => $value) {
                $method = 'set' . ucfirst($key);
                if (method_exists($this, $method)) {
                    $this->$method($value);
                }
            }
        }

        return $this;
    }

    /**
     * @return \SimpleXMLElement
     */
    public function asXML($root_name = null): SimpleXMLElement
    {
        if (!$root_name) {
            $path = explode('\\', static::class);
            $root_name = strtolower(array_pop($path));
        }

        $element = new SimpleXMLElement("<{$root_name}/>");

        $properties = $this->getProperties();

        foreach ($properties as $property => $value) {
            if ($this->$property instanceof XMLOutput) {
                $this->xml_adopt($element, $this->$property->asXML($property));
                /** $this->$property SimpleXMLElement */
            } else {
                if ($this->$property === false) {
                    $element->addChild($property, 'false');
                }

                if ($this->$property) {
                    $element->addChild($property, $this->$property);
                }
            }
        }

        return $element;
    }

    /**
     * @param      $root
     * @param      $new
     * @param null $namespace
     */
    protected function xml_adopt($root, $new, $namespace = null)
    {
        $node = $root->addChild($new->getName(), (string)$new, $namespace);

        foreach ($new->attributes() as $attr => $value) {
            $node->addAttribute($attr, $value);
        }

        $namespaces = array_merge([null], $new->getNameSpaces(true));

        foreach ($namespaces as $space) {
            foreach ($new->children($space) as $child) {
                $this->xml_adopt($node, $child, $space);
            }
        }
    }

    /**
     * @return string
     */
    public function asXMLString(): string
    {
        return $this->asXML()->asXML();
    }
}