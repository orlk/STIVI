<?php

namespace Stivi\UserBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;

class DefaultController extends Controller
{
    public function indexAction()
    {
        $user = $this->get('security.token_storage')->getToken()->getUser();

        return $this->render('StiviUserBundle:Default:show_content.html.twig',array('user' => $user));
    }


    public function profileAction()
    {
        $user = $this->get('security.token_storage')->getToken()->getUser();

        return $this->render('StiviUserBundle:Default:show_content_profile.html.twig',array('user' => $user));
    }
public function EditprofileAction($id)
    {
        $user = $this->get('security.token_storage')->getToken()->getUser();

        return $this->render('StiviUserBundle:Default:edit_userprofiel.html.twig',array('user' => $user));
    }


}
