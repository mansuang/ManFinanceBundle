<?php

namespace Man\FinanceBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * CardPropertyLand
 */
class CardPropertyLand
{
    /**
     * @var integer
     */
    private $id;

    /**
     * @var \Man\FinanceBundle\Entity\PropertyLand
     */
    private $property_land;

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
     * Set property_land
     *
     * @param \Man\FinanceBundle\Entity\PropertyLand $propertyLand
     * @return CardPropertyLand
     */
    public function setPropertyLand(\Man\FinanceBundle\Entity\PropertyLand $propertyLand = null)
    {
        $this->property_land = $propertyLand;

        return $this;
    }

    /**
     * Get property_land
     *
     * @return \Man\FinanceBundle\Entity\PropertyLand 
     */
    public function getPropertyLand()
    {
        return $this->property_land;
    }

    /**
     * Set card
     *
     * @param \Man\FinanceBundle\Entity\Card $card
     * @return CardPropertyLand
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
