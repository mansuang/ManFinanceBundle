<?php

namespace Man\FinanceBundle\Entity;

use Doctrine\ORM\Mapping as ORM;
use APY\DataGridBundle\Grid\Mapping as GRID;

/**
 * Customer
 */
class Customer
{
    /**
     * @var integer
	 * @GRID\Column(title="ID")
     */
    private $id;

    /**
     * @var string
	 * @GRID\Column(title="Title Name")
     */
    private $title_name;

    /**
     * @var string
	 * @GRID\Column(title="First Name")
     */
    private $first_name;

    /**
     * @var string
	 * @GRID\Column(title="Last Name")
     */
    private $last_name;

    /**
     * @var string
	 * @GRID\Column(title="Nick Name")
     */
    private $nick_name;

    /**
     * @var string
	 * @GRID\Column(title="ID Card")
     */
    private $id_card;

    /**
     * @var \DateTime
	 * @GRID\Column(title="Birth Date")
     */
    private $birth_date;

    /**
     * @var string
	 * @GRID\Column(title="Phone")
     */
    private $phone;

    /**
     * @var \DateTime
	 * @GRID\Column(title="Created At")
     */
    private $created_at;

    /**
     * @var \DateTime
	 * @GRID\Column(title="Updated At")
     */
    private $updated_at;

    /**
     * @var \Doctrine\Common\Collections\Collection
     */
    private $address;

    /**
     * @var \Doctrine\Common\Collections\Collection
     */
    private $property_car;

    /**
     * @var \Doctrine\Common\Collections\Collection
     */
    private $property_land;

    /**
     * @var \Doctrine\Common\Collections\Collection
     */
    private $card_customer;

    /**
     * @var \Doctrine\Common\Collections\Collection
     */
    private $card_supporter;

    /**
     * Constructor
     */
    public function __construct()
    {
        $this->address = new \Doctrine\Common\Collections\ArrayCollection();
        $this->property_car = new \Doctrine\Common\Collections\ArrayCollection();
        $this->property_land = new \Doctrine\Common\Collections\ArrayCollection();
        $this->card_customer = new \Doctrine\Common\Collections\ArrayCollection();
        $this->card_supporter = new \Doctrine\Common\Collections\ArrayCollection();
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
     * Set title_name
     *
     * @param string $titleName
     * @return Customer
     */
    public function setTitleName($titleName)
    {
        $this->title_name = $titleName;

        return $this;
    }

    /**
     * Get title_name
     *
     * @return string 
     */
    public function getTitleName()
    {
        return $this->title_name;
    }

    /**
     * Set first_name
     *
     * @param string $firstName
     * @return Customer
     */
    public function setFirstName($firstName)
    {
        $this->first_name = $firstName;

        return $this;
    }

    /**
     * Get first_name
     *
     * @return string 
     */
    public function getFirstName()
    {
        return $this->first_name;
    }

    /**
     * Set last_name
     *
     * @param string $lastName
     * @return Customer
     */
    public function setLastName($lastName)
    {
        $this->last_name = $lastName;

        return $this;
    }

    /**
     * Get last_name
     *
     * @return string 
     */
    public function getLastName()
    {
        return $this->last_name;
    }

    /**
     * Set nick_name
     *
     * @param string $nickName
     * @return Customer
     */
    public function setNickName($nickName)
    {
        $this->nick_name = $nickName;

        return $this;
    }

    /**
     * Get nick_name
     *
     * @return string 
     */
    public function getNickName()
    {
        return $this->nick_name;
    }

    /**
     * Set id_card
     *
     * @param string $idCard
     * @return Customer
     */
    public function setIdCard($idCard)
    {
        $this->id_card = $idCard;

        return $this;
    }

    /**
     * Get id_card
     *
     * @return string 
     */
    public function getIdCard()
    {
        return $this->id_card;
    }

    /**
     * Set birth_date
     *
     * @param \DateTime $birthDate
     * @return Customer
     */
    public function setBirthDate($birthDate)
    {
        $this->birth_date = $birthDate;

        return $this;
    }

    /**
     * Get birth_date
     *
     * @return \DateTime 
     */
    public function getBirthDate()
    {
        return $this->birth_date;
    }

    /**
     * Set phone
     *
     * @param string $phone
     * @return Customer
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
     * @return Customer
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
     * Set updated_at
     *
     * @param \DateTime $updatedAt
     * @return Customer
     */
    public function setUpdatedAt($updatedAt)
    {
        $this->updated_at = $updatedAt;

        return $this;
    }

    /**
     * Get updated_at
     *
     * @return \DateTime 
     */
    public function getUpdatedAt()
    {
        return $this->updated_at;
    }

    /**
     * Add address
     *
     * @param \Man\FinanceBundle\Entity\Address $address
     * @return Customer
     */
    public function addAddress(\Man\FinanceBundle\Entity\Address $address)
    {
		/*
		$address->setCustomer($this);
		if( trim($address->getAddressType()) != '' )
		{
        	$this->address[] = $address;
		}
		*/
		$this->address[] = $address;
		
        return $this;
    }
	

    /**
     * Remove address
     *
     * @param \Man\FinanceBundle\Entity\Address $address
     */
    public function removeAddress(\Man\FinanceBundle\Entity\Address $address)
    {
        $this->address->removeElement($address);
    }

    /**
     * Get address
     *
     * @return \Doctrine\Common\Collections\Collection 
     */
    public function getAddress()
    {
        return $this->address;
    }

    /**
     * Add property_car
     *
     * @param \Man\FinanceBundle\Entity\PropertyCar $propertyCar
     * @return Customer
     */
    public function addPropertyCar(\Man\FinanceBundle\Entity\PropertyCar $propertyCar)
    {
        $this->property_car[] = $propertyCar;

        return $this;
    }

    /**
     * Remove property_car
     *
     * @param \Man\FinanceBundle\Entity\PropertyCar $propertyCar
     */
    public function removePropertyCar(\Man\FinanceBundle\Entity\PropertyCar $propertyCar)
    {
        $this->property_car->removeElement($propertyCar);
    }

    /**
     * Get property_car
     *
     * @return \Doctrine\Common\Collections\Collection 
     */
    public function getPropertyCar()
    {
        return $this->property_car;
    }

    /**
     * Add property_land
     *
     * @param \Man\FinanceBundle\Entity\PropertyLand $propertyLand
     * @return Customer
     */
    public function addPropertyLand(\Man\FinanceBundle\Entity\PropertyLand $propertyLand)
    {
        $this->property_land[] = $propertyLand;

        return $this;
    }

    /**
     * Remove property_land
     *
     * @param \Man\FinanceBundle\Entity\PropertyLand $propertyLand
     */
    public function removePropertyLand(\Man\FinanceBundle\Entity\PropertyLand $propertyLand)
    {
        $this->property_land->removeElement($propertyLand);
    }

    /**
     * Get property_land
     *
     * @return \Doctrine\Common\Collections\Collection 
     */
    public function getPropertyLand()
    {
        return $this->property_land;
    }

    /**
     * Add card_customer
     *
     * @param \Man\FinanceBundle\Entity\CardCustomer $cardCustomer
     * @return Customer
     */
    public function addCardCustomer(\Man\FinanceBundle\Entity\CardCustomer $cardCustomer)
    {
        $this->card_customer[] = $cardCustomer;

        return $this;
    }

    /**
     * Remove card_customer
     *
     * @param \Man\FinanceBundle\Entity\CardCustomer $cardCustomer
     */
    public function removeCardCustomer(\Man\FinanceBundle\Entity\CardCustomer $cardCustomer)
    {
        $this->card_customer->removeElement($cardCustomer);
    }

    /**
     * Get card_customer
     *
     * @return \Doctrine\Common\Collections\Collection 
     */
    public function getCardCustomer()
    {
        return $this->card_customer;
    }

    /**
     * Add card_supporter
     *
     * @param \Man\FinanceBundle\Entity\CardSupporter $cardSupporter
     * @return Customer
     */
    public function addCardSupporter(\Man\FinanceBundle\Entity\CardSupporter $cardSupporter)
    {
        $this->card_supporter[] = $cardSupporter;

        return $this;
    }

    /**
     * Remove card_supporter
     *
     * @param \Man\FinanceBundle\Entity\CardSupporter $cardSupporter
     */
    public function removeCardSupporter(\Man\FinanceBundle\Entity\CardSupporter $cardSupporter)
    {
        $this->card_supporter->removeElement($cardSupporter);
    }

    /**
     * Get card_supporter
     *
     * @return \Doctrine\Common\Collections\Collection 
     */
    public function getCardSupporter()
    {
        return $this->card_supporter;
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

    /**
     * @ORM\PreUpdate
     */
    public function setUpdatedAtValue()
    {
        // Add your code here
		$this->updated_at = new \DateTime();
    }
	
	public function __toString()
	{
		return $this->title_name.$this->first_name.' '.$this->last_name;
	}	
    /**
     * @var boolean
     */
    private $is_deleted;


    /**
     * Set is_deleted
     *
     * @param boolean $isDeleted
     * @return Customer
     */
    public function setIsDeleted($isDeleted)
    {
        $this->is_deleted = $isDeleted;

        return $this;
    }

    /**
     * Get is_deleted
     *
     * @return boolean 
     */
    public function getIsDeleted()
    {
        return $this->is_deleted;
    }
}
