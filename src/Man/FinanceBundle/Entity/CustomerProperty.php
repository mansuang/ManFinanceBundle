<?php

namespace Man\FinanceBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * CustomerProperty
 */
class CustomerProperty
{
    /**
     * @var integer
     */
    private $id;

    /**
     * @var string
     */
    private $property_type;

    /**
     * @var \Doctrine\Common\Collections\Collection
     */
    private $card_property;

    /**
     * @var \Man\FinanceBundle\Entity\Customer
     */
    private $customer;

    /**
     * @var \Man\FinanceBundle\Entity\PropertyCar
     */
    private $property_car;

    /**
     * @var \Man\FinanceBundle\Entity\PropertyLand
     */
    private $property_land;

    /**
     * Constructor
     */
    public function __construct()
    {
        $this->card_property = new \Doctrine\Common\Collections\ArrayCollection();
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
     * Set property_type
     *
     * @param string $propertyType
     * @return CustomerProperty
     */
    public function setPropertyType($propertyType)
    {
        $this->property_type = $propertyType;

        return $this;
    }

    /**
     * Get property_type
     *
     * @return string 
     */
    public function getPropertyType()
    {
        return $this->property_type;
    }

    /**
     * Add card_property
     *
     * @param \Man\FinanceBundle\Entity\CardProperty $cardProperty
     * @return CustomerProperty
     */
    public function addCardProperty(\Man\FinanceBundle\Entity\CardProperty $cardProperty)
    {
        $this->card_property[] = $cardProperty;

        return $this;
    }

    /**
     * Remove card_property
     *
     * @param \Man\FinanceBundle\Entity\CardProperty $cardProperty
     */
    public function removeCardProperty(\Man\FinanceBundle\Entity\CardProperty $cardProperty)
    {
        $this->card_property->removeElement($cardProperty);
    }

    /**
     * Get card_property
     *
     * @return \Doctrine\Common\Collections\Collection 
     */
    public function getCardProperty()
    {
        return $this->card_property;
    }

    /**
     * Set customer
     *
     * @param \Man\FinanceBundle\Entity\Customer $customer
     * @return CustomerProperty
     */
    public function setCustomer(\Man\FinanceBundle\Entity\Customer $customer = null)
    {
        $this->customer = $customer;

        return $this;
    }

    /**
     * Get customer
     *
     * @return \Man\FinanceBundle\Entity\Customer 
     */
    public function getCustomer()
    {
        return $this->customer;
    }

    /**
     * Set property_car
     *
     * @param \Man\FinanceBundle\Entity\PropertyCar $propertyCar
     * @return CustomerProperty
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
     * Set property_land
     *
     * @param \Man\FinanceBundle\Entity\PropertyLand $propertyLand
     * @return CustomerProperty
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
}
