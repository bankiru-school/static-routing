<?php

namespace SymfonyTasks\Routing\Common;

use SymfonyTasks\Routing\Common\Factory\ResponseFactory;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;

final class StaticController
{
    public static function action(Request $request): Response
    {
        return ResponseFactory::create()->createResponse($request);
    }
}
