<?php
// src/Man/FinanceBundle/DataFixtures/ORM/LoadPropertyCarData.php
namespace Man\FinanceBundle\DataFixtures\ORM;
 
use Doctrine\Common\Persistence\ObjectManager;
use Doctrine\Common\DataFixtures\AbstractFixture;
use Doctrine\Common\DataFixtures\OrderedFixtureInterface;
use Man\FinanceBundle\Entity\PropertyCar;
 
class LoadPropertyCarData extends AbstractFixture implements OrderedFixtureInterface
{
  public function load(ObjectManager $em)
  {
    $car1 = new PropertyCar();
	$car1->setCustomer( $this->getReference('cus1') );
    $car1->setCarType('รถกระบะ');
	$car1->setBrand('NISSAN');
	$car1->setModel('RGD21');
	$car1->setLicenseLetter('นข');
	$car1->setLicenseNumber('1153');
	$car1->setLicenseProvince('ศรีสะเกษ');
	$car1->setSerial('RGD21-A99615');	
	$car1->setRegisterDate( new \DateTime('1989-07-03'));
 	$car1->setNote('ทดสอบ Add');	

    $car2 = new PropertyCar();
	$car2->setCustomer( $this->getReference('cus4') );
    $car2->setCarType('จักรยานยนต์');
	$car2->setBrand('Honda');
	$car2->setModel('Click');
	$car2->setLicenseLetter('ขตง');
	$car2->setLicenseNumber('922');
	$car2->setLicenseProvince('ศรีสะเกษ');
	$car2->setSerial('NC110BK0256573');	
	$car2->setRegisterDate( new \DateTime('2010-11-30'));
 	$car2->setNote('ทดสอบ Add2');	
	
    $em->persist($car1);
	$em->persist($car2);
    $em->flush();
 
	$this->addReference('car1', $car1);
	$this->addReference('car2', $car2);
  }
 
  public function getOrder()
  {
    return 4; // the order in which fixtures will be loaded
  }
}