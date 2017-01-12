<?php

namespace ParkinkBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Parking
 *
 * @ORM\Table(name="parking")
 * @ORM\Entity(repositoryClass="ParkinkBundle\Repository\ParkingRepository")
 */
class Parking
{
    /**
     * @var int
     *
     * @ORM\Column(name="id", type="integer")
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="AUTO")
     */
    private $id;

    /**
     * @var string
     *
     * @ORM\Column(name="nom", type="string", length=255)
     */
    private $nom;

    /**
     * @var int
     *
     * @ORM\Column(name="nbrepalce", type="integer")
     */
    private $nbrepalce;

    /**
     * @var string
     *
     * @ORM\Column(name="adresse", type="string", length=255)
     */
    private $adresse;


    /**
     * Get id
     *
     * @return integer 
     */
    public function getId()
    {
        return $this->id;
    }

    /**
     * Set nom
     *
     * @param string $nom
     * @return Parking
     */
    public function setNom($nom)
    {
        $this->nom = $nom;

        return $this;
    }

    /**
     * Get nom
     *
     * @return string 
     */
    public function getNom()
    {
        return $this->nom;
    }

    /**
     * Set nbrepalce
     *
     * @param integer $nbrepalce
     * @return Parking
     */
    public function setNbrepalce($nbrepalce)
    {
        $this->nbrepalce = $nbrepalce;

        return $this;
    }

    /**
     * Get nbrepalce
     *
     * @return integer 
     */
    public function getNbrepalce()
    {
        return $this->nbrepalce;
    }

    /**
     * Set adresse
     *
     * @param string $adresse
     * @return Parking
     */
    public function setAdresse($adresse)
    {
        $this->adresse = $adresse;

        return $this;
    }

    /**
     * Get adresse
     *
     * @return string 
     */
    public function getAdresse()
    {
        return $this->adresse;
    }
}
