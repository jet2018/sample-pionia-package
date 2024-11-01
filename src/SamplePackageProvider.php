<?php

namespace Pionia\SamplePackage;

use Pionia\SamplePackage\commands\SamplePackageCommand;
use Pionia\SamplePackage\middlewares\SamplePackageMiddleware;
use Pionia\Base\Provider\AppProvider;
use Pionia\Middlewares\MiddlewareChain;

class SamplePackageProvider extends AppProvider
{
    public function commands(): array
    {
        return [
            'sample'=> SamplePackageCommand::class
        ];
    }

    public function middlewares(MiddlewareChain $middlewareChain): MiddlewareChain
    {
        return $middlewareChain->add(SamplePackageMiddleware::class);
    }
}