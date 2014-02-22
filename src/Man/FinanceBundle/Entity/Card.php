<?php

namespace Man\FinanceBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Card
 */
class Card
{
    /**
     * @var integer
     */
    private $id;

    /**
     * @var string
     */
    private $display_id;

    /**
     * @var string
     */
    private $card_type;

    /**
     * @var integer
     */
    private $employee_id;

    /**
     * @var string
     */
    private $mid;

    /**
     * @var integer
     */
    private $branch_id;

    /**
     * @var string
     */
    private $begin_cost;

    /**
     * @var string
     */
    private $card_status;

    /**
     * @var string
     */
    private $contract_style;

    /**
     * @var \DateTime
     */
    private $contract_date;

    /**
     * @var string
     */
    private $cycle_day;

    /**
     * @var string
     */
    private $interest_percent;

    /**
     * @var string
     */
    private $interest_last_percent;

    /**
     * @var string
     */
    private $allow_day_late;

    /**
     * @var \DateTime
     */
    private $last_payment_date;

    /**
     * @var \DateTime
     */
    private $next_payment_date;

    /**
     * @var \DateTime
     */
    private $current_due_date;

    /**
     * @var \DateTime
     */
    private $next_due_date;

    /**
     * @var string
     */
    private $current_cost;

    /**
     * @var string
     */
    private $current_interest;

    /**
     * @var string
     */
    private $current_fine;

    /**
     * @var string
     */
    private $ip_address;

    /**
     * @var string
     */
    private $is_deleted;

    /**
     * @var \DateTime
     */
    private $created_at;

    /**
     * @var \DateTime
     */
    private $update_at;

    /**
     * @var \Doctrine\Common\Collections\Collection
     */
    private $card_customer;

    /**
     * @var \Doctrine\Common\Collections\Collection
     */
    private $card_supporter;

    /**
     * @var \Doctrine\Common\Collections\Collection
     */
    private $card_property_car;

    /**
     * @var \Doctrine\Common\Collections\Collection
     */
    private $card_property_land;

    /**
     * @var \Doctrine\Common\Collections\Collection
     */
    private $card_document;

    /**
     * @var \Doctrine\Common\Collections\Collection
     */
    private $card_finance;

    /**
     * @var \Doctrine\Common\Collections\Collection
     */
    private $card_effective;

    /**
     * @var \Doctrine\Common\Collections\Collection
     */
    private $receipt_card;

    /**
     * @var \Man\FinanceBundle\Entity\Branch
     */
    private $branch;

    /**
     * @var \Man\FinanceBundle\Entity\Employee
     */
    private $employee;

    /**
     * @var \Man\FinanceBundle\Entity\Owner
     */
    private $owner;

    /**
     * Constructor
     */
    public function __construct()
    {
        $this->card_customer = new \Doctrine\Common\Collections\ArrayCollection();
        $this->card_supporter = new \Doctrine\Common\Collections\ArrayCollection();
        $this->card_property_car = new \Doctrine\Common\Collections\ArrayCollection();
        $this->card_property_land = new \Doctrine\Common\Collections\ArrayCollection();
        $this->card_document = new \Doctrine\Common\Collections\ArrayCollection();
        $this->card_finance = new \Doctrine\Common\Collections\ArrayCollection();
        $this->card_effective = new \Doctrine\Common\Collections\ArrayCollection();
        $this->receipt_card = new \Doctrine\Common\Collections\ArrayCollection();
		
		//Define default value
		$this->is_deleted = false;
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
     * Set display_id
     *
     * @param string $displayId
     * @return Card
     */
    public function setDisplayId($displayId)
    {
        $this->display_id = $displayId;

        return $this;
    }

    /**
     * Get display_id
     *
     * @return string 
     */
    public function getDisplayId()
    {
        return $this->display_id;
    }

    /**
     * Set card_type
     *
     * @param string $cardType
     * @return Card
     */
    public function setCardType($cardType)
    {
        $this->card_type = $cardType;

        return $this;
    }

    /**
     * Get card_type
     *
     * @return string 
     */
    public function getCardType()
    {
        return $this->card_type;
    }

    /**
     * Set employee_id
     *
     * @param integer $employeeId
     * @return Card
     */
    public function setEmployeeId($employeeId)
    {
        $this->employee_id = $employeeId;

        return $this;
    }

    /**
     * Get employee_id
     *
     * @return integer 
     */
    public function getEmployeeId()
    {
        return $this->employee_id;
    }

    /**
     * Set mid
     *
     * @param string $mid
     * @return Card
     */
    public function setMid($mid)
    {
        $this->mid = $mid;

        return $this;
    }

    /**
     * Get mid
     *
     * @return string 
     */
    public function getMid()
    {
        return $this->mid;
    }

    /**
     * Set branch_id
     *
     * @param integer $branchId
     * @return Card
     */
    public function setBranchId($branchId)
    {
        $this->branch_id = $branchId;

        return $this;
    }

    /**
     * Get branch_id
     *
     * @return integer 
     */
    public function getBranchId()
    {
        return $this->branch_id;
    }

    /**
     * Set begin_cost
     *
     * @param string $beginCost
     * @return Card
     */
    public function setBeginCost($beginCost)
    {
        $this->begin_cost = $beginCost;

        return $this;
    }

    /**
     * Get begin_cost
     *
     * @return string 
     */
    public function getBeginCost()
    {
        return $this->begin_cost;
    }

    /**
     * Set card_status
     *
     * @param string $cardStatus
     * @return Card
     */
    public function setCardStatus($cardStatus)
    {
        $this->card_status = $cardStatus;

        return $this;
    }

    /**
     * Get card_status
     *
     * @return string 
     */
    public function getCardStatus()
    {
        return $this->card_status;
    }

    /**
     * Set contract_style
     *
     * @param string $contractStyle
     * @return Card
     */
    public function setContractStyle($contractStyle)
    {
        $this->contract_style = $contractStyle;

        return $this;
    }

    /**
     * Get contract_style
     *
     * @return string 
     */
    public function getContractStyle()
    {
        return $this->contract_style;
    }

    /**
     * Set contract_date
     *
     * @param \DateTime $contractDate
     * @return Card
     */
    public function setContractDate($contractDate)
    {
        $this->contract_date = $contractDate;

        return $this;
    }

    /**
     * Get contract_date
     *
     * @return \DateTime 
     */
    public function getContractDate()
    {
        return $this->contract_date;
    }

    /**
     * Set cycle_day
     *
     * @param string $cycleDay
     * @return Card
     */
    public function setCycleDay($cycleDay)
    {
        $this->cycle_day = $cycleDay;

        return $this;
    }

    /**
     * Get cycle_day
     *
     * @return string 
     */
    public function getCycleDay()
    {
        return $this->cycle_day;
    }

    /**
     * Set interest_percent
     *
     * @param string $interestPercent
     * @return Card
     */
    public function setInterestPercent($interestPercent)
    {
        $this->interest_percent = $interestPercent;

        return $this;
    }

    /**
     * Get interest_percent
     *
     * @return string 
     */
    public function getInterestPercent()
    {
        return $this->interest_percent;
    }

    /**
     * Set interest_last_percent
     *
     * @param string $interestLastPercent
     * @return Card
     */
    public function setInterestLastPercent($interestLastPercent)
    {
        $this->interest_last_percent = $interestLastPercent;

        return $this;
    }

    /**
     * Get interest_last_percent
     *
     * @return string 
     */
    public function getInterestLastPercent()
    {
        return $this->interest_last_percent;
    }

    /**
     * Set allow_day_late
     *
     * @param string $allowDayLate
     * @return Card
     */
    public function setAllowDayLate($allowDayLate)
    {
        $this->allow_day_late = $allowDayLate;

        return $this;
    }

    /**
     * Get allow_day_late
     *
     * @return string 
     */
    public function getAllowDayLate()
    {
        return $this->allow_day_late;
    }

    /**
     * Set last_payment_date
     *
     * @param \DateTime $lastPaymentDate
     * @return Card
     */
    public function setLastPaymentDate($lastPaymentDate)
    {
        $this->last_payment_date = $lastPaymentDate;

        return $this;
    }

    /**
     * Get last_payment_date
     *
     * @return \DateTime 
     */
    public function getLastPaymentDate()
    {
        return $this->last_payment_date;
    }

    /**
     * Set next_payment_date
     *
     * @param \DateTime $nextPaymentDate
     * @return Card
     */
    public function setNextPaymentDate($nextPaymentDate)
    {
        $this->next_payment_date = $nextPaymentDate;

        return $this;
    }

    /**
     * Get next_payment_date
     *
     * @return \DateTime 
     */
    public function getNextPaymentDate()
    {
        return $this->next_payment_date;
    }

    /**
     * Set current_due_date
     *
     * @param \DateTime $currentDueDate
     * @return Card
     */
    public function setCurrentDueDate($currentDueDate)
    {
        $this->current_due_date = $currentDueDate;

        return $this;
    }

    /**
     * Get current_due_date
     *
     * @return \DateTime 
     */
    public function getCurrentDueDate()
    {
        return $this->current_due_date;
    }

    /**
     * Set next_due_date
     *
     * @param \DateTime $nextDueDate
     * @return Card
     */
    public function setNextDueDate($nextDueDate)
    {
        $this->next_due_date = $nextDueDate;

        return $this;
    }

    /**
     * Get next_due_date
     *
     * @return \DateTime 
     */
    public function getNextDueDate()
    {
        return $this->next_due_date;
    }

    /**
     * Set current_cost
     *
     * @param string $currentCost
     * @return Card
     */
    public function setCurrentCost($currentCost)
    {
        $this->current_cost = $currentCost;

        return $this;
    }

    /**
     * Get current_cost
     *
     * @return string 
     */
    public function getCurrentCost()
    {
        return $this->current_cost;
    }

    /**
     * Set current_interest
     *
     * @param string $currentInterest
     * @return Card
     */
    public function setCurrentInterest($currentInterest)
    {
        $this->current_interest = $currentInterest;

        return $this;
    }

    /**
     * Get current_interest
     *
     * @return string 
     */
    public function getCurrentInterest()
    {
        return $this->current_interest;
    }

    /**
     * Set current_fine
     *
     * @param string $currentFine
     * @return Card
     */
    public function setCurrentFine($currentFine)
    {
        $this->current_fine = $currentFine;

        return $this;
    }

    /**
     * Get current_fine
     *
     * @return string 
     */
    public function getCurrentFine()
    {
        return $this->current_fine;
    }

    /**
     * Set ip_address
     *
     * @param string $ipAddress
     * @return Card
     */
    public function setIpAddress($ipAddress)
    {
        $this->ip_address = $ipAddress;

        return $this;
    }

    /**
     * Get ip_address
     *
     * @return string 
     */
    public function getIpAddress()
    {
        return $this->ip_address;
    }

    /**
     * Set is_deleted
     *
     * @param string $isDeleted
     * @return Card
     */
    public function setIsDeleted($isDeleted)
    {
        $this->is_deleted = $isDeleted;

        return $this;
    }

    /**
     * Get is_deleted
     *
     * @return string 
     */
    public function getIsDeleted()
    {
        return $this->is_deleted;
    }

    /**
     * Set created_at
     *
     * @param \DateTime $createdAt
     * @return Card
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
     * Set update_at
     *
     * @param \DateTime $updateAt
     * @return Card
     */
    public function setUpdateAt($updateAt)
    {
        $this->update_at = $updateAt;

        return $this;
    }

    /**
     * Get update_at
     *
     * @return \DateTime 
     */
    public function getUpdateAt()
    {
        return $this->update_at;
    }

    /**
     * Add card_customer
     *
     * @param \Man\FinanceBundle\Entity\CardCustomer $cardCustomer
     * @return Card
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
     * @return Card
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
     * Add card_property_car
     *
     * @param \Man\FinanceBundle\Entity\CardPropertyCar $cardPropertyCar
     * @return Card
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
     * Add card_property_land
     *
     * @param \Man\FinanceBundle\Entity\CardPropertyLand $cardPropertyLand
     * @return Card
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
     * Add card_document
     *
     * @param \Man\FinanceBundle\Entity\CardDocument $cardDocument
     * @return Card
     */
    public function addCardDocument(\Man\FinanceBundle\Entity\CardDocument $cardDocument)
    {
        $this->card_document[] = $cardDocument;

        return $this;
    }

    /**
     * Remove card_document
     *
     * @param \Man\FinanceBundle\Entity\CardDocument $cardDocument
     */
    public function removeCardDocument(\Man\FinanceBundle\Entity\CardDocument $cardDocument)
    {
        $this->card_document->removeElement($cardDocument);
    }

    /**
     * Get card_document
     *
     * @return \Doctrine\Common\Collections\Collection 
     */
    public function getCardDocument()
    {
        return $this->card_document;
    }

    /**
     * Add card_finance
     *
     * @param \Man\FinanceBundle\Entity\CardFinance $cardFinance
     * @return Card
     */
    public function addCardFinance(\Man\FinanceBundle\Entity\CardFinance $cardFinance)
    {
        $this->card_finance[] = $cardFinance;

        return $this;
    }

    /**
     * Remove card_finance
     *
     * @param \Man\FinanceBundle\Entity\CardFinance $cardFinance
     */
    public function removeCardFinance(\Man\FinanceBundle\Entity\CardFinance $cardFinance)
    {
        $this->card_finance->removeElement($cardFinance);
    }

    /**
     * Get card_finance
     *
     * @return \Doctrine\Common\Collections\Collection 
     */
    public function getCardFinance()
    {
        return $this->card_finance;
    }

    /**
     * Add card_effective
     *
     * @param \Man\FinanceBundle\Entity\CardEffective $cardEffective
     * @return Card
     */
    public function addCardEffective(\Man\FinanceBundle\Entity\CardEffective $cardEffective)
    {
        $this->card_effective[] = $cardEffective;

        return $this;
    }

    /**
     * Remove card_effective
     *
     * @param \Man\FinanceBundle\Entity\CardEffective $cardEffective
     */
    public function removeCardEffective(\Man\FinanceBundle\Entity\CardEffective $cardEffective)
    {
        $this->card_effective->removeElement($cardEffective);
    }

    /**
     * Get card_effective
     *
     * @return \Doctrine\Common\Collections\Collection 
     */
    public function getCardEffective()
    {
        return $this->card_effective;
    }

    /**
     * Add receipt_card
     *
     * @param \Man\FinanceBundle\Entity\ReceiptCard $receiptCard
     * @return Card
     */
    public function addReceiptCard(\Man\FinanceBundle\Entity\ReceiptCard $receiptCard)
    {
        $this->receipt_card[] = $receiptCard;

        return $this;
    }

    /**
     * Remove receipt_card
     *
     * @param \Man\FinanceBundle\Entity\ReceiptCard $receiptCard
     */
    public function removeReceiptCard(\Man\FinanceBundle\Entity\ReceiptCard $receiptCard)
    {
        $this->receipt_card->removeElement($receiptCard);
    }

    /**
     * Get receipt_card
     *
     * @return \Doctrine\Common\Collections\Collection 
     */
    public function getReceiptCard()
    {
        return $this->receipt_card;
    }

    /**
     * Set branch
     *
     * @param \Man\FinanceBundle\Entity\Branch $branch
     * @return Card
     */
    public function setBranch(\Man\FinanceBundle\Entity\Branch $branch = null)
    {
        $this->branch = $branch;

        return $this;
    }

    /**
     * Get branch
     *
     * @return \Man\FinanceBundle\Entity\Branch 
     */
    public function getBranch()
    {
        return $this->branch;
    }

    /**
     * Set employee
     *
     * @param \Man\FinanceBundle\Entity\Employee $employee
     * @return Card
     */
    public function setEmployee(\Man\FinanceBundle\Entity\Employee $employee = null)
    {
        $this->employee = $employee;

        return $this;
    }

    /**
     * Get employee
     *
     * @return \Man\FinanceBundle\Entity\Employee 
     */
    public function getEmployee()
    {
        return $this->employee;
    }

    /**
     * Set owner
     *
     * @param \Man\FinanceBundle\Entity\Owner $owner
     * @return Card
     */
    public function setOwner(\Man\FinanceBundle\Entity\Owner $owner = null)
    {
        $this->owner = $owner;

        return $this;
    }

    /**
     * Get owner
     *
     * @return \Man\FinanceBundle\Entity\Owner 
     */
    public function getOwner()
    {
        return $this->owner;
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
    /**
     * @var string
     */
    private $note;


    /**
     * Set note
     *
     * @param string $note
     * @return Card
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
     * @var string
     */
    private $interest_late_percent;


    /**
     * Set interest_late_percent
     *
     * @param string $interestLatePercent
     * @return Card
     */
    public function setInterestLatePercent($interestLatePercent)
    {
        $this->interest_late_percent = $interestLatePercent;

        return $this;
    }

    /**
     * Get interest_late_percent
     *
     * @return string 
     */
    public function getInterestLatePercent()
    {
        return $this->interest_late_percent;
    }
    /**
     * @var \DateTime
     */
    private $finish_contract_date;


    /**
     * Set finish_contract_date
     *
     * @param \DateTime $finishContractDate
     * @return Card
     */
    public function setFinishContractDate($finishContractDate)
    {
        $this->finish_contract_date = $finishContractDate;

        return $this;
    }

    /**
     * Get finish_contract_date
     *
     * @return \DateTime 
     */
    public function getFinishContractDate()
    {
        return $this->finish_contract_date;
    }
}
