<?php

namespace Man\FinanceBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;

class DefaultController extends Controller
{
    public function indexAction($name)
    {
        return $this->render('ManFinanceBundle:Default:index.html.twig', array('name' => $name));
    }
	
    public function testAction()
    {
        return $this->render('ManFinanceBundle:Default:test.html.twig');
    }	
}
