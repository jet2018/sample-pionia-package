<?php

namespace Pionia\SamplePackage\commands;

use Pionia\SamplePackage\SamplePackage;
use Pionia\Console\BaseCommand;
use Symfony\Component\Console\Input\InputArgument;

class SamplePackageCommand extends BaseCommand
{
    protected string $description = 'Sample command description';
    protected string $name='app:sample-package';

    public function argument(string $key = null): bool|array|string|null
    {
        return [
            ['str_to_hash', InputArgument::REQUIRED, 'Str to hash'],
        ];
    }

    public function handle()
    {
        $strToHash = $this->argument('str_to_hash');
        $hashed = $this->getApp()->getSilently(SamplePackage::class)->hash($strToHash);
        $this->info();

    }

}