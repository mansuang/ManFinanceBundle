<?php
// src/Man/FinanceBundle/DataFixtures/ORM/LoadOwnerData.php
namespace Man\FinanceBundle\DataFixtures\ORM;
 
use Doctrine\Common\Persistence\ObjectManager;
use Doctrine\Common\DataFixtures\AbstractFixture;
use Doctrine\Common\DataFixtures\OrderedFixtureInterface;
use Man\FinanceBundle\Entity\Owner;
 
class LoadOwnerData extends AbstractFixture implements OrderedFixtureInterface
{
  public function load(ObjectManager $em)
  {
    $owner1 = new Owner();
    $owner1->setOwnerName('บริษัท เงินด่วน ทวีชัย จำกัด');
	$owner1->setIsDefault( true );
	
    $owner2 = new Owner();
    $owner2->setOwnerName('นางสาวธารีรัตน์ ศรีวสุทธิ์');
	$owner2->setIsDefault( false );

    $owner3 = new Owner();
    $owner3->setOwnerName('นายธานัท สมพงษ์');
	$owner3->setIsDefault( false );

    $owner4 = new Owner();
    $owner4->setOwnerName('นายทวี ศรีวสุทธิ์');
	$owner4->setIsDefault( false );
 
    $owner5 = new Owner();
    $owner5->setOwnerName('นางนงเยาว์ ศรีวสุทธิ์');
	$owner5->setIsDefault( false );

    $em->persist($owner1);
	$em->persist($owner2);
	$em->persist($owner3);
	$em->persist($owner4);
	$em->persist($owner5);
    $em->flush();
 
    $this->addReference('owner1', $owner1);
	$this->addReference('owner2', $owner2);
	$this->addReference('owner3', $owner3);
	$this->addReference('owner4', $owner4);
	$this->addReference('owner5', $owner5);

  }
 
  public function getOrder()
  {
    return 8; // the order in which fixtures will be loaded
  }
}