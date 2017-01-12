<?php

namespace ParkinkBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Route;

class DefaultController extends Controller
{
    /**
     * @Route("/home", name="parking_home",)
     */
    public function indexAction()
    {
      
        $em = $this->getDoctrine()->getManager();

        $places = $em->getRepository('ParkinkBundle:Place')->findAll();
 
        return $this->render('ParkinkBundle:Default:index.html.twig', array(
            'places' => $places,

        ));          
    }

 }
    
    
