<?php

namespace Stivi\StiviBundle\Controller;
use Stivi\StiviBundle\Form\Type;

use Symfony\Component\HttpFoundation\Request;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Symfony\Component\HttpFoundation\Response;

class DefaultController extends Controller
{
    public function indexAction()
    {

       return $this->render('StiviStiviBundle:Default:index.html.twig');
    }
    public  function aboutusAction()
    {
        return $this->render('StiviStiviBundle:Default:aboutus.html.twig');
    }

}

