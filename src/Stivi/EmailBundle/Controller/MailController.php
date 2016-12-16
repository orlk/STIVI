<?php
namespace Stivi\EmailBundle\Controller;
use Stivi\EmailBundle\Entity\Mail;
use Stivi\EmailBundle\Form\MailType;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;




class MailController extends Controller
{
    public function indexAction()
    {
        return $this->render('EmailBundle:mail:index.html.twig', array());
    }

    public function redirectionAction()
    {
        return $this->render('StiviEmailBundle:mail:new.html.twig'  );
    }



    public function sendMailAction()
    {

        $Request= $this->getRequest();
        if ($Request->getMethod()=="POST")
        {
            $name=$Request->get("name");
            $Subject= $Request->get("Subject");
            $Email= $Request->get("Email");
            $Tel= $Request->get("Telephone");
            $Activite=$Request->get("Activite");
            $Message= $Request->get("Message");
            $Fonction=$Request->get("Fonction");
            $Societe=$Request->get("Societe");







            $Message= \Swift_Message::newInstance()

                ->setSubject($Subject)
                ->setFrom(array($Email=> $Email),array($name=>$name))
                ->setTo('hichem.annabi@esprit.tn')//a change entre send from et to pour la recepetion de contact us  rste que le templating
                ->setBody($this->renderView('StiviEmailBundle:mail:mail.html.twig',array('Email'=>$Email,'Fonction'=>$Fonction,'Societe'=>$Societe,'Tel'=>$Tel,'name'=>$name,'Message'=>$Message,'Activite'=>$Activite )),'text/html');

            $this->get('mailer')->send($Message);




        }




        return $this->render('StiviEmailBundle:mail:new.html.twig');
    }



}