<?php
/**
 * Created by PhpStorm.
 * User: Arnaud
 * Date: 18/06/2018
 * Time: 00:08
 */

namespace Application\Exception;

use Exception;


final class InvalidControllerException
{
    private $exception;

    public function __construct(Exception $exception)
    {
        $this->exception = $exception;
    }

    public function error404Action()
    {
        ob_start();
        include "../../views/error404.html";
        ob_get_clean();
    }
}