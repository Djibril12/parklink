<?php


namespace UserBundle\Entity;

use Doctrine\ORM\Mapping as ORM;
use FOS\UserBundle\Entity\User as FOSUser;

/**
 * @ORM\Entity
 * @ORM\Table(name="fos_user")
 */
class User  extends FOSUser{

    /**
     * @ORM\Id
     * @ORM\Column(type="integer")
     * @ORM\GeneratedValue(strategy="AUTO")
     */
    protected $id;
    
    public function __construct()
    {
        parent::__construct();
       
    }
    
    public function getId() {
        return $this->id;
    }

    public function setId($id) {
        $this->id = $id;
    }
 }
