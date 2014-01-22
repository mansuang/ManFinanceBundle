<?php

namespace Man\FinanceBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Document
 */
class Document
{
    /**
     * @var integer
     */
    private $id;

    /**
     * @var string
     */
    private $document_name;

    /**
     * @var \Doctrine\Common\Collections\Collection
     */
    private $card_document;

    /**
     * Constructor
     */
    public function __construct()
    {
        $this->card_document = new \Doctrine\Common\Collections\ArrayCollection();
    }

    /**
     * Get id
     *
     * @return integer 
     */
    public function getId()
    {
        return $this->id;
    }

    /**
     * Set document_name
     *
     * @param string $documentName
     * @return Document
     */
    public function setDocumentName($documentName)
    {
        $this->document_name = $documentName;

        return $this;
    }

    /**
     * Get document_name
     *
     * @return string 
     */
    public function getDocumentName()
    {
        return $this->document_name;
    }

    /**
     * Add card_document
     *
     * @param \Man\FinanceBundle\Entity\CardDocument $cardDocument
     * @return Document
     */
    public function addCardDocument(\Man\FinanceBundle\Entity\CardDocument $cardDocument)
    {
        $this->card_document[] = $cardDocument;

        return $this;
    }

    /**
     * Remove card_document
     *
     * @param \Man\FinanceBundle\Entity\CardDocument $cardDocument
     */
    public function removeCardDocument(\Man\FinanceBundle\Entity\CardDocument $cardDocument)
    {
        $this->card_document->removeElement($cardDocument);
    }

    /**
     * Get card_document
     *
     * @return \Doctrine\Common\Collections\Collection 
     */
    public function getCardDocument()
    {
        return $this->card_document;
    }
}
