<?php

namespace BlockIP\PeopleBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;

class DefaultController extends Controller
{
    public function indexAction($name)
    {
        return $this->render('BlockIPPeopleBundle:Default:index.html.twig', array('name' => $name));
    }
}
