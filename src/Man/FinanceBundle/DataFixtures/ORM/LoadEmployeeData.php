<?php
// src/Man/FinanceBundle/DataFixtures/ORM/LoadEmployeeData.php
namespace Man\FinanceBundle\DataFixtures\ORM;
 
use Doctrine\Common\Persistence\ObjectManager;
use Doctrine\Common\DataFixtures\AbstractFixture;
use Doctrine\Common\DataFixtures\OrderedFixtureInterface;
use Man\FinanceBundle\Entity\Employee;
 
class LoadEmployeeData extends AbstractFixture implements OrderedFixtureInterface
{
  public function load(ObjectManager $em)
  {
	// Employee 1
    $emp1 = new Employee();
    //$emp1->setParent(0);
	$emp1->setUsername('ADMIN');
	$emp1->setLevel('0');
	$emp1->setIsOpen(true);

    $em->persist($emp1);
    $em->flush();
	
	
	$uemp1 = $em->getRepository('ManFinanceBundle:Employee')->find($emp1->getId());
	//$uemp1->setParent($uemp1);
	$uemp1->setMid( $emp1->getId() );
	$em->flush(); 
	
    $this->addReference('emp1', $uemp1);
	
	// Employee 2
    $emp2 = new Employee();
    //$emp2->setParent( $this->getReference('emp1') );
	$emp2->setUsername('TONG');
	$emp2->setLevel('0');
	$emp2->setIsOpen(true);

    $em->persist($emp2);
    $em->flush();
	
	
	$uemp2 = $em->getRepository('ManFinanceBundle:Employee')->find($emp2->getId());
	$uemp2->setMid( $emp2->getId() );
	$em->flush();	
	
    $this->addReference('emp2', $uemp2);
  }
 
  public function getOrder()
  {
    return 6; // the order in which fixtures will be loaded
  }
}