<?php

namespace App\Controller;

use App\Reporting\GeneratorFactory;
use Symfony\Component\HttpFoundation\Response;

class DemoController
{
    private $generatorFactory;

    public function __construct(GeneratorFactory $generatorFactory)
    {
        $this->generatorFactory = $generatorFactory;
    }

    public function __invoke(): Response
    {
        return new Response(get_class($this->generatorFactory->getGenerator()));
    }
}
