<?php
// src/AppBundle/Entity/User.php

namespace Stivi\UserBundle\Entity;

use FOS\UserBundle\Model\User as BaseUser;
use Doctrine\ORM\Mapping as ORM;

/**
 * @ORM\Entity
 * @ORM\Table(name="user")
 */
class User extends BaseUser
{
    /**
     * @ORM\Id
     * @ORM\Column(type="integer")
     * @ORM\GeneratedValue(strategy="AUTO")
     */
    protected $id;

    /**
     * @ORM\Column(type="string",nullable=true)
     */

    protected $Nom;


    /**
     * @ORM\Column(type="string",nullable=true)
     */

    protected $Nom_de_la_societe;

    /**
     * @ORM\Column(type="string",nullable=true)
     */
    protected $home_adress;

    /**
     * @ORM\Column(type="string",nullable=true)
     */
    protected $Prenom;

    /**
     * @ORM\Column(type="integer",nullable=true)
     */
    protected $Phonenumber;

    /**
     * @return mixed
     */
    public function getHomeAdress()
    {
        return $this->home_adress;
    }

    /**
     * @param mixed $home_adress
     */
    public function setHomeAdress($home_adress)
    {
        $this->home_adress = $home_adress;
    }

    public function __construct()
    {
        parent::__construct();
        // your own logic
    }

    /**
     * @return mixed
     */
    public function getNom()
    {
        return $this->Nom;
    }

    /**
     * @param mixed $Nom
     */
    public function setNom($Nom)
    {
        $this->Nom = $Nom;
    }

    /**
     * @return mixed
     */
    public function getNomDeLaSociete()
    {
        return $this->Nom_de_la_societe;
    }

    /**
     * @param mixed $Nom_de_la_societe
     */
    public function setNomDeLaSociete($Nom_de_la_societe)
    {
        $this->Nom_de_la_societe = $Nom_de_la_societe;
    }



    /**
     * @return mixed
     */
    public function getPrenom()
    {
        return $this->Prenom;
    }

    /**
     * @param mixed $Prenom
     */
    public function setPrenom($Prenom)
    {
        $this->Prenom = $Prenom;
    }

    /**
     * @return mixed
     */
    public function getPhonenumber()
    {
        return $this->Phonenumber;
    }

    /**
     * @param mixed $Phonenumber
     */
    public function setPhonenumber($Phonenumber)
    {
        $this->Phonenumber = $Phonenumber;
    }


}