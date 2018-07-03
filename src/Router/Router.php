<?php
/**
 * Created by PhpStorm.
 * User: Arnaud
 * Date: 14/06/2018
 * Time: 15:24
 */

declare(strict_types = 1);

namespace Application\Router;

use Application\Controller\IndexController;
use Exception;
use Application\Exception\InvalidControllerException;


class Router
{
    private $controllerClass = IndexController::class;
    private $parseUriHelper;
    private $dateTimeImmutable;

    public function __construct(ParseUriHelper $parseUriHelper, \DateTimeImmutable $dateTimeImmutable)
    {
        $this->parseUriHelper = $parseUriHelper;
        $this->dateTimeImmutable = $dateTimeImmutable;
    }

    public function dispatch(string $requestUri) : string
    {
        try{
            $this->controllerClass = $this->parseUriHelper->parseRequestUri($requestUri);
        }catch (Exception $exception){
            return (new InvalidControllerException())->error404Action();
        }

        if($this->validateController($this->controllerClass)){
            return (new $this->controllerClass())->indexAction();
        }
    }

    public function validateController(string $controllerClass) : void
    {
        if(!class_exists($controllerClass)){
            throw new Exception('La classe {$controllerClass} n\'existe pas ');
        }
    }

}