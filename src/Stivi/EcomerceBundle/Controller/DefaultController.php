<?php

namespace Stivi\EcomerceBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Stivi\EcomerceBundle\Entity\Produits;



class DefaultController extends Controller
{
    public function indexAction()
    {
        $doctrine=$this->getDoctrine();
        $em=$doctrine->getEntityManager();

       $rep =$em->getRepository('StiviEcomerceBundle:Produits')->findAll();

        return $this->render('StiviEcomerceBundle:Default:index.html.twig', array('rep' => $rep));
    }

    public function  menuAction()
    {
        $doctrine = $this->getDoctrine();
        $em = $doctrine->getEntityManager();
        $repo = $em->getRepository('StiviEcomerceBundle:Produits')->findBy(array('categorie' => "filtration"), array('id' => 'DESC'));


        return $this->render('StiviEcomerceBundle:Default:index.html.twig',array('rep' => $repo));

        return null;
    }
}
