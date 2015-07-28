<?php

namespace AppBundle\Serializer\Naming;

use JMS\Serializer\Metadata\PropertyMetadata;
use JMS\Serializer\Naming\PropertyNamingStrategyInterface;

class CamelCaseNamingStrategy implements PropertyNamingStrategyInterface
{
    public function __construct($separator = '_', $lowerCase = true)
    {
    }

    /**
     * {@inheritDoc}
     */
    public function translateName(PropertyMetadata $property)
    {
        return $property->name;
    }
}
