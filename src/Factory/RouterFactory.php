<?php
/**
 * Created by PhpStorm.
 * User: Arnaud
 * Date: 14/06/2018
 * Time: 17:20
 */

declare(strict_types = 1);

namespace Application\Factory;

use Application\Router\Router;
use Application\Container;
use Application\Helper\ParseUriHelper;
use DateTimeInterface;

class RouterFactory
{
    public function __invoke(Container $container)
    {
        // TODO: Implement __invoke() method.
        return new Router(
            $container->get(ParseUriHelper::class),
            $container->get(DateTimeInterface::class)
        );
    }
}