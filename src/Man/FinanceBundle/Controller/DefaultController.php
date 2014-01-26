<?php

namespace Man\FinanceBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;

class DefaultController extends Controller
{
    public function indexAction()
    {
        return $this->render('ManFinanceBundle::base.html.twig');
    }
	
    public function testAction()
    {
        return $this->render('ManFinanceBundle:Default:test.html.twig' );
    }	
}
