<?php

namespace ParkinkBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Place
 *
 * @ORM\Table(name="place")
 * @ORM\Entity(repositoryClass="ParkinkBundle\Repository\PlaceRepository")
 */
class Place
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
     * @ORM\Column(name="etat", type="string", length=255)
     */
    private $etat;

    /**
     * @var string
     *
     * @ORM\Column(name="description", type="text")
     */
    private $description;

    /**
     * @var string
     *
     * @ORM\Column(name="type", type="string", length=255)
     */
    private $type;

    /**
     * @var string
     *
     * @ORM\Column(name="tarif", type="decimal", precision=4, scale=2)
     */
    private $tarif;
    
    
    /**
    * @ORM\OneToOne(targetEntity="ParkinkBundle\Entity\Image", cascade={"persist", "remove"})
    * 
    */
    private $image;

    /**
     * Get id
     * @return integer 
     */
    public function getId()
    {
        return $this->id;
    }

    /**
     * Set etat
     * @param string $etat
     * @return Place
     */
    public function setEtat($etat)
    {
        $this->etat = $etat;

        return $this;
    }

    /**
     * Get etat
     *
     * @return string 
     */
    public function getEtat()
    {
        return $this->etat;
    }

    /**
     * Set description
     *
     * @param string $description
     * @return Place
     */
    public function setDescription($description)
    {
        $this->description = $description;

        return $this;
    }

    /**
     * Get description
     *
     * @return string 
     */
    public function getDescription()
    {
        return $this->description;
    }

    /**
     * Set type
     *
     * @param string $type
     * @return Place
     */
    public function setType($type)
    {
        $this->type = $type;

        return $this;
    }

    /**
     * Get type
     *
     * @return string 
     */
    public function getType()
    {
        return $this->type;
    }

    /**
     * Set tarif
     *
     * @param string $tarif
     * @return Place
     */
    public function setTarif($tarif)
    {
        $this->tarif = $tarif;

        return $this;
    }

    /**
     * Get tarif
     *
     * @return string 
     */
    public function getTarif()
    {
        return $this->tarif;
    }

    /**
     * Set image
     *
     * @param \ParkinkBundle\Entity\Image $image
     * @return Place
     */
    public function setImage(\ParkinkBundle\Entity\Image $image = null)
    {
        $this->image = $image;

        return $this;
    }

    /**
     * Get image
     *
     * @return \ParkinkBundle\Entity\Image 
     */
    public function getImage()
    {
        return $this->image;
    }
}
