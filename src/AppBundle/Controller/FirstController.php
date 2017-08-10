<?php

namespace AppBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Route;

class FirstController extends Controller
{

    /**
     * @Route("/", name="homepage")
     */
    public function indexAction() {
        return $this->render('AppBundle:First:index.html.twig');
    }
    /**
     * @Route("/about", name="about")
     */
    public function aboutAction()
    {
        $name = "serge";
        $numero = mt_rand(1,50);
        return $this->render('AppBundle:First:about.html.twig', [
            "name" => $name,
            "numero" => $numero
        ]);
    }

    /**
     * @Route("/info/{id}/{name}", name="info", requirements={"id":"\d+", "name":"[a-z]+"})
     *
     */
    public function infoAction($id=0, $name="")
    {


        return $this->render('AppBundle:First:info.html.twig', array(
            "id"=>$id,
            "name"=> $name
        ));
    }

    /**
     * * @Route("/list/{name}", name="list")
     */
    public function listAction($name) {
        // créer un tableau de termes
        //
        //passer dans la vue
        $data = ["pseudo" =>"serge","nom" => "nico","surnom" => "flo", 2 => "mehdi"];
        return $this->render('AppBundle:First:list.html.twig', array(
           "data" => $data,
            "name" => $name
        ));
    }

}
