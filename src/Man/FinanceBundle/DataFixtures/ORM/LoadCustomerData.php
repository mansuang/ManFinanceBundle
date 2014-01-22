<?php
// src/Man/FinanceBundle/DataFixtures/ORM/LoadCustomerData.php
namespace Man\FinanceBundle\DataFixtures\ORM;
 
use Doctrine\Common\Persistence\ObjectManager;
use Doctrine\Common\DataFixtures\AbstractFixture;
use Doctrine\Common\DataFixtures\OrderedFixtureInterface;
use Man\FinanceBundle\Entity\Customer;
 
class LoadCustomerData extends AbstractFixture implements OrderedFixtureInterface
{
  public function load(ObjectManager $em)
  {
    $cus1 = new Customer();
    $cus1->setTitleName('นาย');
	$cus1->setFirstName('สุริยา');
	$cus1->setLastName('ปิยะวงค์');
	$cus1->setIdCard('3330900561701');
	$cus1->setBirthDate( new \DateTime('1968-04-11') );
	$cus1->setPhone('083-1998785');
 
    $cus2 = new Customer();
    $cus2->setTitleName('นาง');
	$cus2->setFirstName('ธิดา');
	$cus2->setLastName('ไพรศาล');
	$cus2->setIdCard('3330900083516');
	$cus2->setBirthDate( new \DateTime('1974-05-02') );
	$cus2->setPhone('082-2442473');
 
 
    $cus3 = new Customer();
    $cus3->setTitleName('นาย');
	$cus3->setFirstName('ทวิช');
	$cus3->setLastName('เข็มมา');
	$cus3->setIdCard('3331000959459');
	$cus3->setBirthDate( new \DateTime('1978-12-07') );
	$cus3->setPhone('081-0719670');
	
    $cus4 = new Customer();
    $cus4->setTitleName('นาย');
	$cus4->setFirstName('แก้ววิรัตน์');
	$cus4->setLastName('วงค์แก่น');
	$cus4->setNickName('ปุ้ย');
	$cus4->setIdCard('3330900352541');
	$cus4->setBirthDate( new \DateTime('1981-04-15') );
	$cus4->setPhone('082-1309881,082-8698845');	
	
    $em->persist($cus1);
	$em->persist($cus2);	
	$em->persist($cus3);
	$em->persist($cus4);	
    $em->flush();
 
    $this->addReference('cus1', $cus1);
	$this->addReference('cus2', $cus2);
	$this->addReference('cus3', $cus3);
	$this->addReference('cus4', $cus4);

  }
 
  public function getOrder()
  {
    return 1; // the order in which fixtures will be loaded
  }
}