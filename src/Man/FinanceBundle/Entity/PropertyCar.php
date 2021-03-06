<?php

namespace Man\FinanceBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * PropertyCar
 */
class PropertyCar
{
    /**
     * @var integer
     */
    private $id;

    /**
     * @var string
     */
    private $car_type;

    /**
     * @var string
     */
    private $brand;

    /**
     * @var string
     */
    private $model;

    /**
     * @var string
     */
    private $license_letter;

    /**
     * @var string
     */
    private $license_number;

    /**
     * @var string
     */
    private $license_province;

    /**
     * @var string
     */
    private $serial;

    /**
     * @var \DateTime
     */
    private $register_date;

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
    private $card_property_car;

    /**
     * @var \Man\FinanceBundle\Entity\Customer
     */
    private $customer;

    /**
     * Constructor
     */
    public function __construct()
    {
        $this->card_property_car = new \Doctrine\Common\Collections\ArrayCollection();
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
     * Set car_type
     *
     * @param string $carType
     * @return PropertyCar
     */
    public function setCarType($carType)
    {
        $this->car_type = $carType;

        return $this;
    }

    /**
     * Get car_type
     *
     * @return string 
     */
    public function getCarType()
    {
        return $this->car_type;
    }

    /**
     * Set brand
     *
     * @param string $brand
     * @return PropertyCar
     */
    public function setBrand($brand)
    {
        $this->brand = $brand;

        return $this;
    }

    /**
     * Get brand
     *
     * @return string 
     */
    public function getBrand()
    {
        return $this->brand;
    }

    /**
     * Set model
     *
     * @param string $model
     * @return PropertyCar
     */
    public function setModel($model)
    {
        $this->model = $model;

        return $this;
    }

    /**
     * Get model
     *
     * @return string 
     */
    public function getModel()
    {
        return $this->model;
    }

    /**
     * Set license_letter
     *
     * @param string $licenseLetter
     * @return PropertyCar
     */
    public function setLicenseLetter($licenseLetter)
    {
        $this->license_letter = $licenseLetter;

        return $this;
    }

    /**
     * Get license_letter
     *
     * @return string 
     */
    public function getLicenseLetter()
    {
        return $this->license_letter;
    }

    /**
     * Set license_number
     *
     * @param string $licenseNumber
     * @return PropertyCar
     */
    public function setLicenseNumber($licenseNumber)
    {
        $this->license_number = $licenseNumber;

        return $this;
    }

    /**
     * Get license_number
     *
     * @return string 
     */
    public function getLicenseNumber()
    {
        return $this->license_number;
    }

    /**
     * Set license_province
     *
     * @param string $licenseProvince
     * @return PropertyCar
     */
    public function setLicenseProvince($licenseProvince)
    {
        $this->license_province = $licenseProvince;

        return $this;
    }

    /**
     * Get license_province
     *
     * @return string 
     */
    public function getLicenseProvince()
    {
        return $this->license_province;
    }

    /**
     * Set serial
     *
     * @param string $serial
     * @return PropertyCar
     */
    public function setSerial($serial)
    {
        $this->serial = $serial;

        return $this;
    }

    /**
     * Get serial
     *
     * @return string 
     */
    public function getSerial()
    {
        return $this->serial;
    }

    /**
     * Set register_date
     *
     * @param \DateTime $registerDate
     * @return PropertyCar
     */
    public function setRegisterDate($registerDate)
    {
        $this->register_date = $registerDate;

        return $this;
    }

    /**
     * Get register_date
     *
     * @return \DateTime 
     */
    public function getRegisterDate()
    {
        return $this->register_date;
    }

    /**
     * Set note
     *
     * @param string $note
     * @return PropertyCar
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
     * @return PropertyCar
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
     * Add card_property_car
     *
     * @param \Man\FinanceBundle\Entity\CardPropertyCar $cardPropertyCar
     * @return PropertyCar
     */
    public function addCardPropertyCar(\Man\FinanceBundle\Entity\CardPropertyCar $cardPropertyCar)
    {
        $this->card_property_car[] = $cardPropertyCar;

        return $this;
    }

    /**
     * Remove card_property_car
     *
     * @param \Man\FinanceBundle\Entity\CardPropertyCar $cardPropertyCar
     */
    public function removeCardPropertyCar(\Man\FinanceBundle\Entity\CardPropertyCar $cardPropertyCar)
    {
        $this->card_property_car->removeElement($cardPropertyCar);
    }

    /**
     * Get card_property_car
     *
     * @return \Doctrine\Common\Collections\Collection 
     */
    public function getCardPropertyCar()
    {
        return $this->card_property_car;
    }

    /**
     * Set customer
     *
     * @param \Man\FinanceBundle\Entity\Customer $customer
     * @return PropertyCar
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
		  if(!$this->getCreatedAt())
		  {
			$this->created_at = new \DateTime();
		  }		
		
    }
}
