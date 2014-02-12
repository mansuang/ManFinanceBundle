<?php

namespace Man\FinanceBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * CardPropertyCar
 */
class CardPropertyCar
{
    /**
     * @var integer
     */
    private $id;

    /**
     * @var \Man\FinanceBundle\Entity\PropertyCar
     */
    private $property_car;

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
     * Set property_car
     *
     * @param \Man\FinanceBundle\Entity\PropertyCar $propertyCar
     * @return CardPropertyCar
     */
    public function setPropertyCar(\Man\FinanceBundle\Entity\PropertyCar $propertyCar = null)
    {
        $this->property_car = $propertyCar;

        return $this;
    }

    /**
     * Get property_car
     *
     * @return \Man\FinanceBundle\Entity\PropertyCar 
     */
    public function getPropertyCar()
    {
        return $this->property_car;
    }

    /**
     * Set card
     *
     * @param \Man\FinanceBundle\Entity\Card $card
     * @return CardPropertyCar
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
