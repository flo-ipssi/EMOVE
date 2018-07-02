<?php
/**
 * Created by PhpStorm.
 * User: Arnaud
 * Date: 17/06/2018
 * Time: 01:44
 */

declare(strict_types = 1);

namespace Application\Factory;

use DateTimeImmutable;


class DateTimeImmutableFactory
{
    public  function  __invoke() : DateTimeImmutable
    {
        // TODO: Implement __invoke() method.
        return new DateTimeImmutable();
    }
}