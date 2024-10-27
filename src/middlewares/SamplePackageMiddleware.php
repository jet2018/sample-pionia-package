<?php

namespace Pionia\SamplePackage\middlewares;

use Pionia\SamplePackage\SamplePackage;
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
        logger()->info("Logged on Response:- Environment is $env ");
        return $response;
    }

    public function beforeResponse()
    {
        logger()->info("We are running this before entering the the onResponse hook");
    }
}