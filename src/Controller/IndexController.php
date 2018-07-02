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
        $vehicules = $this->vehiculeRepository->fetchAll();

        ob_start();
        include __DIR__.'/../../views/index.php';
        return ob_get_clean();
    }

    public function viewAction($id_vehicule)
    {
        $vehicule = $this->vehiculeRepository->fetch($id_vehicule);

        ob_start();
        include __DIR__."/../../views/vehicule.php";
        return ob_get_clean();
    }

    public function connexionAction($_POST){

    }
}