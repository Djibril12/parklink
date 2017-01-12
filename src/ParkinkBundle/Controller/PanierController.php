<?php

namespace ParkinkBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Route;
use Symfony\Component\HttpFoundation\Request;
use ParkinkBundle\Entity\Place;


class PanierController extends Controller
{

   
    public function menuAction()
    {
        $session = $this->getRequest()->getSession();
        if (!$session->has('panier'))
            $articles = 0;
        else
            $articles = count($session->get('panier'));
        
        return $this->render('ParkinkBundle:Default:panier/modulesUsed/panier.html.twig', array('articles' => $articles));
    }
    
   
    /**
     * @Route("/supprimer/{id}", name="panier_supprimer",)
     */
    
    public function supprimerAction($id)
    {
        $session = $this->getRequest()->getSession();
        $panier = $session->get('panier');
        
        if (array_key_exists($id, $panier))
        {
            unset($panier[$id]);
            $session->set('panier',$panier);
            $this->get('session')->getFlashBag()->add('success','Article supprimé avec succès');
        }
        
        return $this->redirect($this->generateUrl('panier')); 
    }
    /**
     * @Route("/ajouter/{id}", name="panier_ajouter",)
     */
    public function ajouterAction($id)
    {
        $session = $this->getRequest()->getSession();
        

        var_dump($session->get('panier'));
        //die();
        
       
        if (!$session->has('panier')) $session->set('panier',array());
        

        $panier = $session->get('panier');
        
        if (array_key_exists($id, $panier)) {
            if ($this->getRequest()->query->get('qte') != null) $panier[$id] = $this->getRequest()->query->get('qte');
            $this->get('session')->getFlashBag()->add('success','Quantité modifié avec succès');
        } else {
            if ($this->getRequest()->query->get('qte') != null)
                $panier[$id] = $this->getRequest()->query->get('qte');
            else
                $panier[$id] = 1;
            
            $this->get('session')->getFlashBag()->add('success','Article ajouté avec succès');
        }
            
        $session->set('panier',$panier);

        
        
        return $this->redirect($this->generateUrl('panier'));
    }
    /**
     * @Route("/", name="panier",)
     */
    public function panierAction()
    {
        $session = $this->getRequest()->getSession();
        //var_dump($session);
        
        if (!$session->has('panier'))
        {   
            $session->set('panier', array());
        }
        $em = $this->getDoctrine()->getManager();
        $idsPark = array_values(array_keys($session->get('panier')));
       // die();
        $places = $em->getRepository('ParkinkBundle\Entity\Place')->findBy(array('id' => $idsPark));
        //var_dump($places);
        
        
        return $this->render('ParkinkBundle:Default:panier/layout/panier.html.twig', array('places' => $places,
                                                                                             'panier' => $session->get('panier')));
    }
     
}
