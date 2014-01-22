<?php

namespace Man\FinanceBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Address
 */
class Address
{
    /**
     * @var integer
     */
    private $id;

    /**
     * @var string
     */
    private $address_type;

    /**
     * @var string
     */
    private $line_1;

    /**
     * @var string
     */
    private $mooban;

    /**
     * @var string
     */
    private $tambol;

    /**
     * @var string
     */
    private $ampher;

    /**
     * @var string
     */
    private $province;

    /**
     * @var string
     */
    private $postcode;

    /**
     * @var string
     */
    private $phone;

    /**
     * @var \DateTime
     */
    private $created_at;

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
     * Set address_type
     *
     * @param string $addressType
     * @return Address
     */
    public function setAddressType($addressType)
    {
        $this->address_type = $addressType;

        return $this;
    }

    /**
     * Get address_type
     *
     * @return string 
     */
    public function getAddressType()
    {
        return $this->address_type;
    }

    /**
     * Set line_1
     *
     * @param string $line1
     * @return Address
     */
    public function setLine1($line1)
    {
        $this->line_1 = $line1;

        return $this;
    }

    /**
     * Get line_1
     *
     * @return string 
     */
    public function getLine1()
    {
        return $this->line_1;
    }

    /**
     * Set mooban
     *
     * @param string $mooban
     * @return Address
     */
    public function setMooban($mooban)
    {
        $this->mooban = $mooban;

        return $this;
    }

    /**
     * Get mooban
     *
     * @return string 
     */
    public function getMooban()
    {
        return $this->mooban;
    }

    /**
     * Set tambol
     *
     * @param string $tambol
     * @return Address
     */
    public function setTambol($tambol)
    {
        $this->tambol = $tambol;

        return $this;
    }

    /**
     * Get tambol
     *
     * @return string 
     */
    public function getTambol()
    {
        return $this->tambol;
    }

    /**
     * Set ampher
     *
     * @param string $ampher
     * @return Address
     */
    public function setAmpher($ampher)
    {
        $this->ampher = $ampher;

        return $this;
    }

    /**
     * Get ampher
     *
     * @return string 
     */
    public function getAmpher()
    {
        return $this->ampher;
    }

    /**
     * Set province
     *
     * @param string $province
     * @return Address
     */
    public function setProvince($province)
    {
        $this->province = $province;

        return $this;
    }

    /**
     * Get province
     *
     * @return string 
     */
    public function getProvince()
    {
        return $this->province;
    }

    /**
     * Set postcode
     *
     * @param string $postcode
     * @return Address
     */
    public function setPostcode($postcode)
    {
        $this->postcode = $postcode;

        return $this;
    }

    /**
     * Get postcode
     *
     * @return string 
     */
    public function getPostcode()
    {
        return $this->postcode;
    }

    /**
     * Set phone
     *
     * @param string $phone
     * @return Address
     */
    public function setPhone($phone)
    {
        $this->phone = $phone;

        return $this;
    }

    /**
     * Get phone
     *
     * @return string 
     */
    public function getPhone()
    {
        return $this->phone;
    }

    /**
     * Set created_at
     *
     * @param \DateTime $createdAt
     * @return Address
     */
    public function setCreatedAt($createdAt)
    {
        $this->created_at = $createdAt;

        return $this;
    }

    /**
     * Get created_at
     *
     * @return \DateTime 
     */
    public function getCreatedAt()
    {
        return $this->created_at;
    }

    /**
     * Set customer
     *
     * @param \Man\FinanceBundle\Entity\Customer $customer
     * @return Address
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
     * @ORM\PrePersist
     */
    public function setCreatedAtValue()
    {
        // Add your code here
    }
}
