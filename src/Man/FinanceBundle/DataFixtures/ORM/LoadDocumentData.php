<?php
// src/Man/FinanceBundle/DataFixtures/ORM/LoadDocumentData.php
namespace Man\FinanceBundle\DataFixtures\ORM;
 
use Doctrine\Common\Persistence\ObjectManager;
use Doctrine\Common\DataFixtures\AbstractFixture;
use Doctrine\Common\DataFixtures\OrderedFixtureInterface;
use Man\FinanceBundle\Entity\Document;
 
class LoadDocumentData extends AbstractFixture implements OrderedFixtureInterface
{
  public function load(ObjectManager $em)
  {
    $doc1 = new Document();
    $doc1->setDocumentName('สำเนาบัตรประชาชน 2 ชุด');

    $doc2 = new Document();
    $doc2->setDocumentName('สำเนาทะเบียนบ้าน 2 ชุด');

    $doc3 = new Document();
    $doc3->setDocumentName('สำเนาหลักทรัพย์ 2 ชุด');

    $doc4 = new Document();
    $doc4->setDocumentName('สำเนาบัตรประจำตัวข้าราชการ 2 ชุด');

    $doc5 = new Document();
    $doc5->setDocumentName('ใบเปลี่ยนชื่อ-สกุล (ถ้ามี)');

    $doc6 = new Document();
    $doc6->setDocumentName('ใบทะเบียนสมรส 2 ชุด');

    $doc7 = new Document();
    $doc7->setDocumentName('ใบมรณะบัตร');

    $doc8 = new Document();
    $doc8->setDocumentName('อื่นๆ');

 
    $em->persist($doc1);
	$em->persist($doc2);
	$em->persist($doc3);
	$em->persist($doc4);
	$em->persist($doc5);
	$em->persist($doc6);
	$em->persist($doc7);
	$em->persist($doc8);
    $em->flush();
 
    $this->addReference('doc1', $doc1);
	$this->addReference('doc2', $doc2);
	$this->addReference('doc3', $doc3);
	$this->addReference('doc4', $doc4);
	$this->addReference('doc5', $doc5);
	$this->addReference('doc6', $doc6);
	$this->addReference('doc7', $doc7);
	$this->addReference('doc8', $doc8);

  }
 
  public function getOrder()
  {
    return 9; // the order in which fixtures will be loaded
  }
}