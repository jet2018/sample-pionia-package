<?php

namespace Pionia\SamplePackage;

use Pionia\Base\PioniaApplication;

class SamplePackage
{
    private PioniaApplication $application;

    public function __construct(PioniaApplication $application)
    {
        $this->application = $application;
    }

    public function hash(string $string): string
    {
        return md5($string);
    }

    public function environment(): string
    {
        return $this->application->environment();
    }
}