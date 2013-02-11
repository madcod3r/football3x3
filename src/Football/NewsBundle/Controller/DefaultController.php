<?php

namespace Football\NewsBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;

class DefaultController extends Controller
{
  public function indexAction()
  {
    $events = $this->getDoctrine()->getRepository('FootballNewsBundle:Event')->findBy(array(), array('created' => 'desc'));
    $leagues = $this->getDoctrine()->getRepository('FootballNewsBundle:League')->findBy(array(), array('order' => 'asc'));

    return $this->render('FootballNewsBundle:Default:index.html.twig', array('events' => $events, 'leagues' => $leagues));
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
