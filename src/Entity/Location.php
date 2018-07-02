<?php
/**
 * Created by PhpStorm.
 * User: shuns
 * Date: 14/06/2018
 * Time: 11:13
 */

require 'User.php';
require 'StatusLocation.php';
require 'Vehicule.php';

class Location
{
    private $id;
    private $status;
    private $vehicule;
    private $user;
    private $startDate;
    private $endDate;
    private $returnDate;
    private $returnKm;

    public function __construct($id, StatusLocation $status, Vehicule $vehicule, User $user, $startDate, $endDate, $returnDate, $returnKm)
    {
        $this->id = $id;
        $this->status = $status;
        $this->vehicule = $vehicule;
        $this->user = $user;
        $this->startDate = $startDate;
        $this->endDate = $endDate;
        $this->returnDate = $returnDate;
        $this->returnKm = $returnKm;
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
     * @return StatusLocation
     */
    public function getStatus()
    {
        return $this->status;
    }

    /**
     * @param StatusLocation $status
     */
    public function setStatus(StatusLocation $status)
    {
        $this->status = $status;
    }

    /**
     * @return Vehicule
     */
    public function getVehicule()
    {
        return $this->vehicule;
    }

    /**
     * @param Vehicule $vehicule
     */
    public function setVehicule(Vehicule $vehicule)
    {
        $this->vehicule = $vehicule;
    }

    /**
     * @return User
     */
    public function getUser()
    {
        return $this->user;
    }

    /**
     * @param User $user
     */
    public function setUser(User $user)
    {
        $this->user = $user;
    }

    /**
     * @return mixed
     */
    public function getStartDate()
    {
        return $this->startDate;
    }

    /**
     * @param mixed $startDate
     */
    public function setStartDate($startDate)
    {
        $this->startDate = $startDate;
    }

    /**
     * @return mixed
     */
    public function getEndDate()
    {
        return $this->endDate;
    }

    /**
     * @param mixed $endDate
     */
    public function setEndDate($endDate)
    {
        $this->endDate = $endDate;
    }

    /**
     * @return mixed
     */
    public function getReturnDate()
    {
        return $this->returnDate;
    }

    /**
     * @param mixed $returnDate
     */
    public function setReturnDate($returnDate)
    {
        $this->returnDate = $returnDate;
    }

    /**
     * @return mixed
     */
    public function getReturnKm()
    {
        return $this->returnKm;
    }

    /**
     * @param mixed $returnKm
     */
    public function setReturnKm($returnKm)
    {
        $this->returnKm = $returnKm;
    }



}