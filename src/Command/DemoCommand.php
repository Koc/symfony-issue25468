<?php

namespace App\Command;

use App\Reporting\GeneratorFactory;
use Symfony\Component\Console\Command\Command;
use Symfony\Component\Console\Input\InputInterface;
use Symfony\Component\Console\Output\OutputInterface;

class DemoCommand extends Command
{
    protected static $defaultName = 'demo';

    private $generatorFactory;

    public function __construct(GeneratorFactory $generatorFactory)
    {
        $this->generatorFactory = $generatorFactory;

        parent::__construct();
    }

    protected function execute(InputInterface $input, OutputInterface $output)
    {
        $generator = $this->generatorFactory->getGenerator();

        var_dump(get_class($generator));
    }
}
