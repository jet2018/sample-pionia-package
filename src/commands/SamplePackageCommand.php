<?php

namespace Pionia\SamplePackage\commands;

use Pionia\SamplePackage\SamplePackage;
use Pionia\Console\BaseCommand;
use Symfony\Component\Console\Input\InputArgument;

class SamplePackageCommand extends BaseCommand
{
    protected string $description = 'Sample command description';
    protected string $name='app:sample-package';

    protected string $help = 'Sample command description, just to test out a sample package targeting Pionia';

    public function getArguments(): bool|array|string|null
    {
        return [
            ['str', InputArgument::REQUIRED, 'Str to hash'],
        ];
    }

    public function handle()
    {
        $strToHash = $this->argument('str');
        $hashed = $this->getApp()->getSilently(SamplePackage::class)->hash($strToHash);
        $this->warn("hash of $strToHash is  $hashed");
        return self::SUCCESS;
    }

}