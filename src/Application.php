<?php

declare(strict_types = 1);

namespace Application;

use Application\Container;

use Zend\ServiceManager;

final class  Application
{
    private $container;

    private $router;

    public function  __construct()
    {
        $config = require  __DIR__.'/../config/application.config.php';
        $this->container = new Container($config);
        //var_dump($this->container);die;
        $this->router = $this->container->get(Router::class);
    }

    public function dispatch(string  $requestUri) : string
    {
        return ($this->container->get($this->router->resolve($requestUri)))->indexAction();
    }
}