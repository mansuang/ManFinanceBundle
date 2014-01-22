<?php

namespace Man\FinanceBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Owner
 */
class Owner
{
    /**
     * @var integer
     */
    private $id;

    /**
     * @var string
     */
    private $owner_name;

    /**
     * @var boolean
     */
    private $is_default;

    /**
     * @var \Doctrine\Common\Collections\Collection
     */
    private $card;

    /**
     * Constructor
     */
    public function __construct()
    {
        $this->card = new \Doctrine\Common\Collections\ArrayCollection();
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
     * Set owner_name
     *
     * @param string $ownerName
     * @return Owner
     */
    public function setOwnerName($ownerName)
    {
        $this->owner_name = $ownerName;

        return $this;
    }

    /**
     * Get owner_name
     *
     * @return string 
     */
    public function getOwnerName()
    {
        return $this->owner_name;
    }

    /**
     * Set is_default
     *
     * @param boolean $isDefault
     * @return Owner
     */
    public function setIsDefault($isDefault)
    {
        $this->is_default = $isDefault;

        return $this;
    }

    /**
     * Get is_default
     *
     * @return boolean 
     */
    public function getIsDefault()
    {
        return $this->is_default;
    }

    /**
     * Add card
     *
     * @param \Man\FinanceBundle\Entity\Card $card
     * @return Owner
     */
    public function addCard(\Man\FinanceBundle\Entity\Card $card)
    {
        $this->card[] = $card;

        return $this;
    }

    /**
     * Remove card
     *
     * @param \Man\FinanceBundle\Entity\Card $card
     */
    public function removeCard(\Man\FinanceBundle\Entity\Card $card)
    {
        $this->card->removeElement($card);
    }

    /**
     * Get card
     *
     * @return \Doctrine\Common\Collections\Collection 
     */
    public function getCard()
    {
        return $this->card;
    }
}
