<?php

namespace App\Reporting;

class BasicGenerator
{
    private $uploadDir;

    public function __construct(string $uploadDir)
    {
        $this->uploadDir = $uploadDir;
    }

    public function generate(): void
    {
        var_dump($this->uploadDir);
    }
}
