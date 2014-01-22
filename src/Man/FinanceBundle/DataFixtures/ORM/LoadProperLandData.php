<?php
// src/Man/FinanceBundle/DataFixtures/ORM/LoadPropertyLandData.php
namespace Man\FinanceBundle\DataFixtures\ORM;
 
use Doctrine\Common\Persistence\ObjectManager;
use Doctrine\Common\DataFixtures\AbstractFixture;
use Doctrine\Common\DataFixtures\OrderedFixtureInterface;
use Man\FinanceBundle\Entity\PropertyLand;
 
class LoadPropertyLandData extends AbstractFixture implements OrderedFixtureInterface
{
  public function load(ObjectManager $em)
  {
    $land1 = new PropertyLand();
	$land1->setCustomer( $this->getReference('cus1') );
    $land1->setLandType('ที่นา');
	$land1->setDocNumber('18448');
	$land1->setLandNumber('275');
	$land1->setPageNumber('4781');
	$land1->setArea('04-02-17');
	$land1->setTambol('เมืองแคน');
	$land1->setAmpher('ราษีไศล');	
	$land1->setProvince('ศรีสะเกษ');
	
    $land2 = new PropertyLand();
	$land2->setCustomer( $this->getReference('cus2') );
    $land2->setLandType('ที่นา');
	$land2->setDocNumber('5575');
	$land2->setLandNumber('35');
	$land2->setPageNumber('915');
	$land2->setArea('02-02-11');
	$land2->setTambol('หนองบัวดง');
	$land2->setAmpher('ศิลาลาด');	
	$land2->setProvince('ศรีสะเกษ');	
 
    $em->persist($land1);
	$em->persist($land2);
    $em->flush();
 
	$this->addReference('land1', $land1);
	$this->addReference('land2', $land2);
  }
 
  public function getOrder()
  {
    return 3; // the order in which fixtures will be loaded
  }
}