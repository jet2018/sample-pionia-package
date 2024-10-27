<?php

namespace Jet\SamplePackage\middlewares;

use Jet\SamplePackage\SamplePackage;
use Pionia\Http\Request\Request;
use Pionia\Http\Response\Response;
use Pionia\Middlewares\Middleware;

class SamplePackageMiddleware extends Middleware
{

    public function onRequest(Request $request): Request
    {
        $env = app()->getSilently(SamplePackage::class)->environment();
        logger()->info("Logged on Request:- Environment is $env ");
        return $request;
    }

    public function onResponse(Response $response): Response
    {
        $env = app()->getSilently(SamplePackage::class)->environment();
        logger()->info("Logged on Request:- Environment is $env ");
        return $response;
    }
}