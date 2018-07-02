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
use Application\Helper\ParseUriHelper;
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

    public function resolve(string $requestUri) : string
    {
        try{
            $this->controllerClass = $this->parseUriHelper->parseUri($requestUri);
        }catch (Exception $exception){
            throw new Exception('Erreur de classe');
        }

        $this->validateController($this->controllerClass);

        //var_dump($this->controllerClass);die;
        return $this->controllerClass;

    }

    public function validateController(string $controllerClass) : void{
        if(!class_exists($controllerClass)){
            throw new Exception('La classe {$contrillerClass} n\'existe pas ');
        }
    }

}