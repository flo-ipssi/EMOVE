<?php
/**
 * Created by PhpStorm.
 * User: Arnaud
 * Date: 14/06/2018
 * Time: 16:20
 */

namespace Application\Helper;


class ParseUriHelper
{
    private $requestUri;

    public function __construct()
    {

    }

    public function parseUri($requestUri)
    {
        stripos($requestUri, '/')
    }
}