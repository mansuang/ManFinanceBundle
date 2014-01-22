<?php

namespace Man\FinanceBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * CardProperty
 */
class CardProperty
{
    /**
     * @var integer
     */
    private $id;

    /**
     * @var \Man\FinanceBundle\Entity\CustomerProperty
     */
    private $customer_property;


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
     * Set customer_property
     *
     * @param \Man\FinanceBundle\Entity\CustomerProperty $customerProperty
     * @return CardProperty
     */
    public function setCustomerProperty(\Man\FinanceBundle\Entity\CustomerProperty $customerProperty = null)
    {
        $this->customer_property = $customerProperty;

        return $this;
    }

    /**
     * Get customer_property
     *
     * @return \Man\FinanceBundle\Entity\CustomerProperty 
     */
    public function getCustomerProperty()
    {
        return $this->customer_property;
    }
}
