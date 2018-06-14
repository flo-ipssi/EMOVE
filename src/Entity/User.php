<?php

class User
{
    private $id_user;
    private $type_user;
    private $username;
    private $password;
    private $firstname;
    private $lastname;
    private $birthdate;
    private $adresse;
    private $fidelity_point;
    private $num_telephone;
    private $num_licence;

    public function __construct()
    {
    }

    //-------------------- GETTERS -----------------------

    /**
     * @return mixed
     */
    public function getIdUser() : int {return $this->id_user;}

    /**
     * @return mixed
     */
    public function getTypeUser() : string {return $this->type_user;}

    /**
     * @return mixed
     */
    public function getUsername() : string {return $this->username;}

    /**
     * @return mixed
     */
    public function getPassword() : string {return $this->password;}

    /**
     * @return mixed
     */
    public function getFirstname() : string {return $this->firstname;}

    /**
     * @return mixed
     */
    public function getLastname() : string {return $this->lastname;}

    /**
     * @return mixed
     */
    public function getBirthdate() : DateTime
    {return $this->birthdate;}

    /**
     * @return mixed
     */
    public function getAdresse() : string {return $this->adresse;}

    /**
     * @return mixed
     */
    public function getFidelityPoint() : int {return $this->fidelity_point;}

    /**
     * @return mixed
     */
    public function getNumTelephone() : int {return $this->num_telephone;}

    /**
     * @return mixed
     */
    public function getNumLicence() : int {return $this->num_licence;}

    //--------------------------- SETTERS ----------------------------

    /**
     * @param mixed $type_user
     */
    public function setTypeUser($type_user): void
    {
        $this->type_user = $type_user;
    }

    /**
     * @param mixed $username
     */
    public function setUsername($username): void
    {
        $this->username = $username;
    }

    /**
     * @param mixed $password
     */
    public function setPassword($password): void
    {
        $this->password = $password;
    }

    /**
     * @param mixed $firstname
     */
    public function setFirstname($firstname): void
    {
        $this->firstname = $firstname;
    }

    /**
     * @param mixed $lastname
     */
    public function setLastname($lastname): void
    {
        $this->lastname = $lastname;
    }

    /**
     * @param mixed $birthdate
     */
    public function setBirthdate($birthdate): void
    {
        $this->birthdate = $birthdate;
    }

    /**
     * @param mixed $adresse
     */
    public function setAdresse($adresse): void
    {
        $this->adresse = $adresse;
    }

    /**
     * @param mixed $fidelity_point
     */
    public function setFidelityPoint($fidelity_point): void
    {
        $this->fidelity_point = $fidelity_point;
    }

    /**
     * @param mixed $num_telephone
     */
    public function setNumTelephone($num_telephone): void
    {
        $this->num_telephone = $num_telephone;
    }

    /**
     * @param mixed $num_licence
     */
    public function setNumLicence($num_licence): void
    {
        $this->num_licence = $num_licence;
    }

}