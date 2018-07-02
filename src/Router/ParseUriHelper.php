<?php
/**
 * Created by PhpStorm.
 * User: Arnaud
 * Date: 15/06/2018
 * Time: 16:40
 */

namespace Application\Router;

use Exception;


final class ParseUriHelper
{
    
    public function __construct()
    {
    }

    public function  parseUri($requestUri)
    {
        if($requestUri[0] === '/'){
            $requestUri = substr($requestUri, 1);
        }

        if(strpos($requestUri, '/') === false){
            throw new Exception('L\'URL fournit ne réponds pas au pattern  ');
        }

        $requestedFile = substr($requestUri, 0, strpos($requestUri, '/'));

        $requestedFile = ucfirst($requestedFile);

        return "Application\Controller\\{$requestedFile}Controller";
    }
}ÒæÂê®†ÚºîœπôÙ≠÷…∞~~@@≠÷…∞∞~~~◊w
