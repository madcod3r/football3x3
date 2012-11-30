<?php

namespace Football\NewsBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;

class DefaultController extends Controller
{
    public function indexAction()
    {
        return $this->render('FootballNewsBundle:Default:index.html.twig');
    }

	public function helloAction($name)
	{
		return $this->render('FootballNewsBundle:Default:hello.html.twig', array('name' => $name));
	}

	public function navigationAction()
	{
		return $this->render('FootballNewsBundle:Default:navigation.html.twig');
	}
}
