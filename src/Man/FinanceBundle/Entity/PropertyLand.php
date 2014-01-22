<?php

namespace Man\FinanceBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * PropertyLand
 */
class PropertyLand
{
    /**
     * @var integer
     */
    private $id;

    /**
     * @var string
     */
    private $land_type;

    /**
     * @var string
     */
    private $doc_number;

    /**
     * @var string
     */
    private $land_number;

    /**
     * @var string
     */
    private $page_number;

    /**
     * @var string
     */
    private $area;

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
    private $note;

    /**
     * @var \DateTime
     */
    private $created_at;

    /**
     * @var \Doctrine\Common\Collections\Collection
     */
    private $card_property_land;

    /**
     * @var \Man\FinanceBundle\Entity\Customer
     */
    private $customer;

    /**
     * Constructor
     */
    public function __construct()
    {
        $this->card_property_land = new \Doctrine\Common\Collections\ArrayCollection();
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
     * Set land_type
     *
     * @param string $landType
     * @return PropertyLand
     */
    public function setLandType($landType)
    {
        $this->land_type = $landType;

        return $this;
    }

    /**
     * Get land_type
     *
     * @return string 
     */
    public function getLandType()
    {
        return $this->land_type;
    }

    /**
     * Set doc_number
     *
     * @param string $docNumber
     * @return PropertyLand
     */
    public function setDocNumber($docNumber)
    {
        $this->doc_number = $docNumber;

        return $this;
    }

    /**
     * Get doc_number
     *
     * @return string 
     */
    public function getDocNumber()
    {
        return $this->doc_number;
    }

    /**
     * Set land_number
     *
     * @param string $landNumber
     * @return PropertyLand
     */
    public function setLandNumber($landNumber)
    {
        $this->land_number = $landNumber;

        return $this;
    }

    /**
     * Get land_number
     *
     * @return string 
     */
    public function getLandNumber()
    {
        return $this->land_number;
    }

    /**
     * Set page_number
     *
     * @param string $pageNumber
     * @return PropertyLand
     */
    public function setPageNumber($pageNumber)
    {
        $this->page_number = $pageNumber;

        return $this;
    }

    /**
     * Get page_number
     *
     * @return string 
     */
    public function getPageNumber()
    {
        return $this->page_number;
    }

    /**
     * Set area
     *
     * @param string $area
     * @return PropertyLand
     */
    public function setArea($area)
    {
        $this->area = $area;

        return $this;
    }

    /**
     * Get area
     *
     * @return string 
     */
    public function getArea()
    {
        return $this->area;
    }

    /**
     * Set tambol
     *
     * @param string $tambol
     * @return PropertyLand
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
     * @return PropertyLand
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
     * @return PropertyLand
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
     * Set note
     *
     * @param string $note
     * @return PropertyLand
     */
    public function setNote($note)
    {
        $this->note = $note;

        return $this;
    }

    /**
     * Get note
     *
     * @return string 
     */
    public function getNote()
    {
        return $this->note;
    }

    /**
     * Set created_at
     *
     * @param \DateTime $createdAt
     * @return PropertyLand
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
     * Add card_property_land
     *
     * @param \Man\FinanceBundle\Entity\CardPropertyLand $cardPropertyLand
     * @return PropertyLand
     */
    public function addCardPropertyLand(\Man\FinanceBundle\Entity\CardPropertyLand $cardPropertyLand)
    {
        $this->card_property_land[] = $cardPropertyLand;

        return $this;
    }

    /**
     * Remove card_property_land
     *
     * @param \Man\FinanceBundle\Entity\CardPropertyLand $cardPropertyLand
     */
    public function removeCardPropertyLand(\Man\FinanceBundle\Entity\CardPropertyLand $cardPropertyLand)
    {
        $this->card_property_land->removeElement($cardPropertyLand);
    }

    /**
     * Get card_property_land
     *
     * @return \Doctrine\Common\Collections\Collection 
     */
    public function getCardPropertyLand()
    {
        return $this->card_property_land;
    }

    /**
     * Set customer
     *
     * @param \Man\FinanceBundle\Entity\Customer $customer
     * @return PropertyLand
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
