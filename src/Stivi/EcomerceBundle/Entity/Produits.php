<?php

namespace Stivi\EcomerceBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Produits
 *
 * @ORM\Table(name="produits")
 * @ORM\Entity
 */
class Produits
{
    /**
     * @var string
     *
     * @ORM\Column(name="section1", type="string", length=100, nullable=false)
     */
    private $section1;

    /**
     * @var string
     *
     * @ORM\Column(name="section2", type="string", length=100, nullable=false)
     */
    private $section2;

    /**
     * @var string
     *
     * @ORM\Column(name="section3", type="string", length=100, nullable=false)
     */
    private $section3;

    /**
     * @var string
     *
     * @ORM\Column(name="titre", type="string", length=55, nullable=false)
     */
    private $titre;

    /**
     * @var string
     *
     * @ORM\Column(name="date", type="string", length=20, nullable=false)
     */
    private $date;

    /**
     * @var string
     *
     * @ORM\Column(name="description", type="text", length=65535, nullable=false)
     */
    private $description;

    /**
     * @var integer
     *
     * @ORM\Column(name="type", type="integer", nullable=false)
     */
    private $type;

    /**
     * @var string
     *
     * @ORM\Column(name="img", type="string", length=100, nullable=false)
     */
    private $img;

    /**
     * @var string
     *
     * @ORM\Column(name="ref", type="string", length=150, nullable=false)
     */
    private $ref;

    /**
     * @var string
     *
     * @ORM\Column(name="fiche_technique", type="string", length=55, nullable=false)
     */
    private $ficheTechnique;

    /**
     * @var integer
     *
     * @ORM\Column(name="prix1", type="integer", nullable=false)
     */
    private $prix1;

    /**
     * @var integer
     *
     * @ORM\Column(name="prix2", type="integer", nullable=false)
     */
    private $prix2;

    /**
     * @var integer
     *
     * @ORM\Column(name="prix3", type="integer", nullable=false)
     */
    private $prix3;

    /**
     * @var string
     *
     * @ORM\Column(name="categorie", type="string", length=200, nullable=false)
     */
    private $categorie;

    /**
     * @var integer
     *
     * @ORM\Column(name="id", type="integer")
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="IDENTITY")
     */
    private $id;

    /**
     * @return string
     */
    public function getSection1()
    {
        return $this->section1;
    }

    /**
     * @param string $section1
     */
    public function setSection1($section1)
    {
        $this->section1 = $section1;
    }

    /**
     * @return string
     */
    public function getSection2()
    {
        return $this->section2;
    }

    /**
     * @param string $section2
     */
    public function setSection2($section2)
    {
        $this->section2 = $section2;
    }

    /**
     * @return string
     */
    public function getSection3()
    {
        return $this->section3;
    }

    /**
     * @param string $section3
     */
    public function setSection3($section3)
    {
        $this->section3 = $section3;
    }

    /**
     * @return string
     */
    public function getTitre()
    {
        return $this->titre;
    }

    /**
     * @param string $titre
     */
    public function setTitre($titre)
    {
        $this->titre = $titre;
    }

    /**
     * @return string
     */
    public function getDate()
    {
        return $this->date;
    }

    /**
     * @param string $date
     */
    public function setDate($date)
    {
        $this->date = $date;
    }

    /**
     * @return string
     */
    public function getDescription()
    {
        return $this->description;
    }

    /**
     * @param string $description
     */
    public function setDescription($description)
    {
        $this->description = $description;
    }

    /**
     * @return int
     */
    public function getType()
    {
        return $this->type;
    }

    /**
     * @param int $type
     */
    public function setType($type)
    {
        $this->type = $type;
    }

    /**
     * @return string
     */
    public function getImg()
    {
        return $this->img;
    }

    /**
     * @param string $img
     */
    public function setImg($img)
    {
        $this->img = $img;
    }

    /**
     * @return string
     */
    public function getRef()
    {
        return $this->ref;
    }

    /**
     * @param string $ref
     */
    public function setRef($ref)
    {
        $this->ref = $ref;
    }

    /**
     * @return string
     */
    public function getFicheTechnique()
    {
        return $this->ficheTechnique;
    }

    /**
     * @param string $ficheTechnique
     */
    public function setFicheTechnique($ficheTechnique)
    {
        $this->ficheTechnique = $ficheTechnique;
    }

    /**
     * @return int
     */
    public function getPrix1()
    {
        return $this->prix1;
    }

    /**
     * @param int $prix1
     */
    public function setPrix1($prix1)
    {
        $this->prix1 = $prix1;
    }

    /**
     * @return int
     */
    public function getPrix2()
    {
        return $this->prix2;
    }

    /**
     * @param int $prix2
     */
    public function setPrix2($prix2)
    {
        $this->prix2 = $prix2;
    }

    /**
     * @return int
     */
    public function getPrix3()
    {
        return $this->prix3;
    }

    /**
     * @param int $prix3
     */
    public function setPrix3($prix3)
    {
        $this->prix3 = $prix3;
    }

    /**
     * @return string
     */
    public function getCategorie()
    {
        return $this->categorie;
    }

    /**
     * @param string $categorie
     */
    public function setCategorie($categorie)
    {
        $this->categorie = $categorie;
    }

    /**
     * @return int
     */
    public function getId()
    {
        return $this->id;
    }

    /**
     * @param int $id
     */
    public function setId($id)
    {
        $this->id = $id;
    }


}
