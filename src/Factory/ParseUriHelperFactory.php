<?php
/**
 * Created by PhpStorm.
 * User: Arnaud
 * Date: 17/06/2018
 * Time: 23:12
 */

declare(strict_types = 1);

namespace Application\Factory;


use Application\Helper\ParseUriHelper;

final class ParseUriHelperFactory
{
    public function __invoke() : ParseUriHelper
    {
        // TODO: Implement __invoke() method.
        return new ParseUriHelper();
    }
}