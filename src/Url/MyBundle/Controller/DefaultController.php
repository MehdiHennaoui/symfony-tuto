<?php

namespace Url\MyBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Route;

class DefaultController extends Controller
{
    /**
     * @Route("/testurl", name="test_url")
     */
    public function indexAction()
    {
        $tab = ['Matthieu', 'Loic', 'Elodie'];
        $name = $tab[rand(0, count($tab) - 1)];
        return $this->render('UrlMyBundle:Default:index.html.twig', array(
            "name"=>$name
        ));
    }

    /**
     * @Route("/testurl/about", name="test_url_about")
     */
    public function aboutAction()
    {
        return $this->render('UrlMyBundle:Default:about.html.twig');
    }

    /**
     * @Route("/testurl/info/{name}", name="test_url_info")
     */
    public function infoAction($name)
    {
        if($name == 'toto') {
           return $this->redirectToRoute("test_url");
        }
        return $this->render('UrlMyBundle:Default:info.html.twig', array(
            "name"=>$name
        ));
    }
}
