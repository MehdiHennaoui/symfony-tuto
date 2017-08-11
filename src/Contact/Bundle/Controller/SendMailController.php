<?php

namespace Contact\Bundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Route;
use Contact\Bundle\Form\ContactFormType;

class SendMailController extends Controller
{
    /**
     * @Route("/sendmail")
     */
    public function indexAction()
    {
        $form = $this->createForm(ContactFormType::class, null, [
            "action"=>$this->generateUrl("mail_submit")
        ]);
        return $this->render('ContactBundle:SendMail:index.html.twig', array(
            "mailform"=> $form->createView()
        ));
    }

    /**
     * @Route("/sendmail/submit", name="mail_submit")
     */

    public function submitAction() {

    }
}
