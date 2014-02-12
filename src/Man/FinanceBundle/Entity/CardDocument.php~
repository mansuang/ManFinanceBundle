<?php

namespace Man\FinanceBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * CardDocument
 */
class CardDocument
{
    /**
     * @var integer
     */
    private $id;

    /**
     * @var \Man\FinanceBundle\Entity\Document
     */
    private $document;

    /**
     * @var \Man\FinanceBundle\Entity\Card
     */
    private $card;


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
     * Set document
     *
     * @param \Man\FinanceBundle\Entity\Document $document
     * @return CardDocument
     */
    public function setDocument(\Man\FinanceBundle\Entity\Document $document = null)
    {
        $this->document = $document;

        return $this;
    }

    /**
     * Get document
     *
     * @return \Man\FinanceBundle\Entity\Document 
     */
    public function getDocument()
    {
        return $this->document;
    }

    /**
     * Set card
     *
     * @param \Man\FinanceBundle\Entity\Card $card
     * @return CardDocument
     */
    public function setCard(\Man\FinanceBundle\Entity\Card $card = null)
    {
        $this->card = $card;

        return $this;
    }

    /**
     * Get card
     *
     * @return \Man\FinanceBundle\Entity\Card 
     */
    public function getCard()
    {
        return $this->card;
    }
}
