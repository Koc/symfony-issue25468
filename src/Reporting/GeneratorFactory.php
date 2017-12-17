<?php

namespace App\Reporting;

use Psr\Container\ContainerInterface;

class GeneratorFactory
{
    private $generatorLocator;

    public function __construct(ContainerInterface $generatorLocator)
    {
        $this->generatorLocator = $generatorLocator;
    }

    public function getGenerator(): BasicGenerator
    {
        return $this->generatorLocator->get(BasicGenerator::class);
    }
}
