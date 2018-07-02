<?php
/**
 * Created by PhpStorm.
 * User: Arnaud
 * Date: 13/06/2018
 * Time: 12:36
 */

use Application\Router\Router;
use Application\Controller\IndexController;
use Application\Factory\RouterFactory;
use Application\Factory\IndexControllerFactory;
use Application\Factory\DateTimeImmutableFactory;
use Application\Factory\ParseUriHelperFactory;
use Application\Router\ParseUriHelper;

return [
    'Factories' => [
        Router::class => RouterFactory::class,
        IndexController::class => IndexControllerFactory::class,
        DateTimeImmutable::class => DateTimeImmutableFactory::class,
        ParseUriHelper::class => ParseUriHelperFactory::class,

    ]

];