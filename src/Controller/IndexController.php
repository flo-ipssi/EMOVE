<?php

declare(strict_types = 1);

namespace Application\Controller;

class IndexController
{
    private $vehiculeRepository;

    public function __construct(VehiculeRepository $vehiculeRepository)
    {
        $this->vehiculeRepository = $vehiculeRepository;
    }

    public function indexAction() : string
    {

    }
}