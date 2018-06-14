<?php
/**
 * Created by PhpStorm.
 * User: shuns
 * Date: 14/06/2018
 * Time: 11:13
 */

require 'StatusFacture.php';
require 'Location.php';

class Facture
{
    private $id;
    private $location;
    private $status;
    private $price;

    public function __construct($id, Location $location, StatusFacture $status, $price)
    {
        $this->id = $id;
        $this->location = $location;
        $this->status = $status;
        $this->price = $price;
    }

    /**
     * @return mixed
     */
    public function getId()
    {
        return $this->id;
    }

    /**
     * @param mixed $id
     */
    public function setId($id)
    {
        $this->id = $id;
    }

    /**
     * @return Location
     */
    public function getLocation()
    {
        return $this->location;
    }

    /**
     * @param Location $location
     */
    public function setLocation(Location $location)
    {
        $this->location = $location;
    }

    /**
     * @return StatusFacture
     */
    public function getStatus()
    {
        return $this->status;
    }

    /**
     * @param StatusFacture $status
     */
    public function setStatus(StatusFacture $status)
    {
        $this->status = $status;
    }

    /**
     * @return mixed
     */
    public function getPrice()
    {
        return $this->price;
    }

    /**
     * @param mixed $price
     */
    public function setPrice($price)
    {
        $this->price = $price;
    }



}