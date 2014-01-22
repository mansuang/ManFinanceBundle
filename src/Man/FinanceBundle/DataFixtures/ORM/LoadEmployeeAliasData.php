<?php
// src/Man/FinanceBundle/DataFixtures/ORM/LoadEmployeeAliasData.php
namespace Man\FinanceBundle\DataFixtures\ORM;
 
use Doctrine\Common\Persistence\ObjectManager;
use Doctrine\Common\DataFixtures\AbstractFixture;
use Doctrine\Common\DataFixtures\OrderedFixtureInterface;
use Man\FinanceBundle\Entity\EmployeeAlias;

use Symfony\Component\DependencyInjection\ContainerAwareInterface;
use Symfony\Component\DependencyInjection\ContainerInterface;
 
class LoadEmployeeAliasData extends AbstractFixture implements OrderedFixtureInterface, ContainerAwareInterface
{
	
   /**
     * @var ContainerInterface
     */
    private $container;

    /**
     * {@inheritDoc}
     */
    public function setContainer(ContainerInterface $container = null)
    {
        var_dump('getting container here');
        $this->container = $container;
    }
		
  public function load(ObjectManager $em)
  {
	// Employee 1
    $emp1 = new EmployeeAlias();
    $emp1->setEmployee( $this->getReference('emp1') );
	$emp1->setUsername( $this->getReference('emp1')->getUsername() );
    //$emp1->setSalt('1234');
    //$encoder = $this->container->get('security.encoder_factory')->getEncoder($emp1);
    //$emp1->setPassword($encoder->encodePassword('1234', '5678'));
	  	
	$emp1->setPassword( md5('1234') );
	$emp1->setName('แมน');
	$emp1->setMobile('086-8555543');
	$emp1->setIsOpenalias( true );
	$emp1->setIsAlias( false );

    $em->persist($emp1);
    $em->flush();
	
	// Employee 2
    $emp2 = new EmployeeAlias();
    $emp2->setEmployee( $this->getReference('emp2') );
	$emp2->setUsername( $this->getReference('emp2')->getUsername() );
	$emp2->setPassword( md5('1234') );
	$emp2->setName('ต้อง');
	$emp2->setMobile('081-8726790');
	$emp2->setIsOpenalias( true );
	$emp2->setIsAlias( false );

    $em->persist($emp2);
    $em->flush();	
  }
 
  public function getOrder()
  {
    return 7; // the order in which fixtures will be loaded
  }
}