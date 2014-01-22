<?php

namespace Man\FinanceBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * CardSupport
 */
class CardSupport
{
    /**
     * @var integer
     */
    private $id;

    /**
     * @var \Man\FinanceBundle\Entity\Customer
     */
    private $customer;


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
     * Set customer
     *
     * @param \Man\FinanceBundle\Entity\Customer $customer
     * @return CardSupport
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
}
