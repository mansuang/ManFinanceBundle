<?php

namespace Man\FinanceBundle\Controller;

use APY\DataGridBundle\Grid\Source\Entity;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;

class DefaultController extends Controller
{
    public function indexAction()
    {
        return $this->render('ManFinanceBundle::base.html.twig');
    }
	
    public function testAction()
    {
        //return $this->render('ManFinanceBundle:Default:test.html.twig' );
		$source = new Entity('ManFinanceBundle:Document');
		$grid = $this->get('grid');
		
		$grid->setSource($source);
		return $grid->getGridResponse('ManFinanceBundle:Default:test.html.twig');
    }	
}
