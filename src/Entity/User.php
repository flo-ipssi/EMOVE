<?php

require 'TypeUser.php';

class User
{
    private $id;
    private $type;
    private $username;
    private $password;
    private $firstname;
    private $lastname;
    private $birthdate;
    private $adresse;
    private $fidelityPoint;
    private $numTel;
    private $numLicence;

    public function __construct($id, TypeUser $type, $username, $password, $firstname, $lastname, $birthdate, $adresse, $fidelityPoint, $numTel, $numLicence)
    {
        $this->id = $id;
        $this->type = $type;
        $this->username = $username;
        $this->password = $password;
        $this->firstname = $firstname;
        $this->lastname = $lastname;
        $this->birthdate = $birthdate;
        $this->adresse = $adresse;
        $this->fidelityPoint = $fidelityPoint;
        $this->numTel = $numTel;
        $this->numLicence = $numLicence;
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
     * @return TypeUser
     */
    public function getType()
    {
        return $this->type->getLabel();
    }

    /**
     * @param TypeUser $type
     */
    public function setType(TypeUser $type)
    {
        $this->type = $type;
    }

    /**
     * @return mixed
     */
    public function getUsername()
    {
        return $this->username;
    }

    /**
     * @param mixed $username
     */
    public function setUsername($username)
    {
        $this->username = $username;
    }

    /**
     * @return mixed
     */
    public function getPassword()
    {
        return $this->password;
    }

    /**
     * @param mixed $password
     */
    public function setPassword($password)
    {
        $this->password = $password;
    }

    /**
     * @return mixed
     */
    public function getFirstname()
    {
        return $this->firstname;
    }

    /**
     * @param mixed $firstname
     */
    public function setFirstname($firstname)
    {
        $this->firstname = $firstname;
    }

    /**
     * @return mixed
     */
    public function getLastname()
    {
        return $this->lastname;
    }

    /**
     * @param mixed $lastname
     */
    public function setLastname($lastname)
    {
        $this->lastname = $lastname;
    }

    /**
     * @return mixed
     */
    public function getBirthdate()
    {
        return $this->birthdate;
    }

    /**
     * @param mixed $birthdate
     */
    public function setBirthdate($birthdate)
    {
        $this->birthdate = $birthdate;
    }

    /**
     * @return mixed
     */
    public function getAdresse()
    {
        return $this->adresse;
    }

    /**
     * @param mixed $adresse
     */
    public function setAdresse($adresse)
    {
        $this->adresse = $adresse;
    }

    /**
     * @return mixed
     */
    public function getFidelityPoint()
    {
        return $this->fidelityPoint;
    }

    /**
     * @param mixed $fidelityPoint
     */
    public function setFidelityPoint($fidelityPoint)
    {
        $this->fidelityPoint = $fidelityPoint;
    }

    /**
     * @return mixed
     */
    public function getNumTel()
    {
        return $this->numTel;
    }

    /**
     * @param mixed $numTel
     */
    public function setNumTel($numTel)
    {
        $this->numTel = $numTel;
    }

    /**
     * @return mixed
     */
    public function getNumLicence()
    {
        return $this->numLicence;
    }

    /**
     * @param mixed $numLicence
     */
    public function setNumLicence($numLicence)
    {
        $this->numLicence = $numLicence;
    }



}