<?php

declare(strict_types = 1);

namespace Application;

//use Application\Router\Router;
use Zend\ServiceManager\ServiceManager;

final class  Application
{
    private $container;
    private $router;

    public function  __construct()
    {
        $config = require  __DIR__.'/../config/application.config.php';
        $this->container = new Container($config);
        //$this->container = new ServiceManager($config);
        $this->router = $this->container->get(Router::class);
    }

    public function dispatch(string  $requestUri) : string
    {
        //return ($this->container->get($this->router->dispatch($requestUri)))->indexAction();
        return $this->router->dispatch($requestUri);
    }
}