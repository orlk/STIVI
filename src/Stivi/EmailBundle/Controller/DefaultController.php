<?php

namespace Stivi\EmailBundle\Controller;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;

class DefaultController extends Controller
{
    public function indexAction()
    {
        return $this->render('StiviEmailBundle:Default:index.html.twig');
    }




}
