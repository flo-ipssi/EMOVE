<?php

declare(strict_types = 1);

namespace  Application\Repository;

class VehiculeRepository
{
    private $db;

    public function __construct($db)
    {
        $this->db = $db;
    }

    public function fetchAll()
    {
        $query_vehicules = $this->db->query('SELECT * FROM vehicule');
        $vehicules = $query_vehicules->fetchAll();
        while ()
    }

    public function fetch($id_vehicule)
    {

    }
}