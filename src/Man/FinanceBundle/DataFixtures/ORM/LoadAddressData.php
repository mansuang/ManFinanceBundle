<?php
// src/Man/FinanceBundle/DataFixtures/ORM/LoadCustomersData.php
namespace Man\FinanceBundle\DataFixtures\ORM;
 
use Doctrine\Common\Persistence\ObjectManager;
use Doctrine\Common\DataFixtures\AbstractFixture;
use Doctrine\Common\DataFixtures\OrderedFixtureInterface;
use Man\FinanceBundle\Entity\Address;
 
class LoadAddressData extends AbstractFixture implements OrderedFixtureInterface
{
  public function load(ObjectManager $em)
  {
    $add1 = new Address();
	$add1->setCustomer($em->merge($this->getReference('cus1')));
    $add1->setAddressType('home');
	$add1->setLine1('156 หมู่ 2');
	$add1->setMooban('แสง');
	$add1->setTambol('เมืองแคน');
	$add1->setAmpher('ราษีไศล');
	$add1->setProvince('ศรีสะเกษ');
	$add1->setPostcode('33160');
 
    $add2 = new Address();
	$add2->setCustomer($em->merge($this->getReference('cus2')));
    $add2->setAddressType('home');
	$add2->setLine1('113 หมู่ 2');
	$add2->setMooban('โนนสมบูรณ์');
	$add2->setTambol('หนองบัวดง');
	$add2->setAmpher('ศิลาลาด');
	$add2->setProvince('ศรีสะเกษ');
	$add2->setPostcode('33160');
	
    $add3 = new Address();
	$add3->setCustomer($em->merge($this->getReference('cus3')));
    $add3->setAddressType('home');
	$add3->setLine1('64 หมู่ 3');
	$add3->setMooban('โนนกลาง');
	$add3->setTambol('เมืองจันทร์');
	$add3->setAmpher('เมืองจันทร์');
	$add3->setProvince('ศรีสะเกษ');
	$add3->setPostcode('33160');
		 
    $em->persist($add1);
	$em->persist($add2);
	$em->persist($add3);
    $em->flush();
 

  }
 
  public function getOrder()
  {
    return 2; // the order in which fixtures will be loaded
  }
}