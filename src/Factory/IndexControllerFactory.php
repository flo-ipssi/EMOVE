<?php
/**
 * Created by PhpStorm.
 * User: Arnaud
 * Date: 14/06/2018
 * Time: 17:33
 */

namespace Application\Factory;

use Application\Container;
use Application\Controller\IndexController;


class IndexControllerFactory
{
    public function  __invoke(Container $container)
    {
        // TODO: Implement __invoke() method.
        return new IndexController($container->get(VehiculeRepository::class));
    }
}