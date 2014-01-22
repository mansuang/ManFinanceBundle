<?php
// src/Man/FinanceBundle/DataFixtures/ORM/LoadBranchData.php
namespace Man\FinanceBundle\DataFixtures\ORM;
 
use Doctrine\Common\Persistence\ObjectManager;
use Doctrine\Common\DataFixtures\AbstractFixture;
use Doctrine\Common\DataFixtures\OrderedFixtureInterface;
use Man\FinanceBundle\Entity\Branch;
 
class LoadBranchData extends AbstractFixture implements OrderedFixtureInterface
{
  public function load(ObjectManager $em)
  {
    $branch1 = new Branch();
    $branch1->setBranchName('ราษี');
	
    $branch2 = new Branch();
    $branch2->setBranchName('มหา');	
 
    $em->persist($branch1);
	$em->persist($branch2);
    $em->flush();
 
    $this->addReference('branch1', $branch1);
	$this->addReference('branch2', $branch2);

  }
 
  public function getOrder()
  {
    return 5; // the order in which fixtures will be loaded
  }
}