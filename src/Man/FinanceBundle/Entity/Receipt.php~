<?php

namespace Man\FinanceBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Receipt
 */
class Receipt
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
    private $name;

    /**
     * @var \DateTime
     */
    private $report_date;

    /**
     * @var string
     */
    private $receipt_type;

    /**
     * @var string
     */
    private $amount_bill;

    /**
     * @var string
     */
    private $amount_discount;

    /**
     * @var string
     */
    private $amount_total;

    /**
     * @var string
     */
    private $amount_pay;

    /**
     * @var string
     */
    private $amount_change;

    /**
     * @var \DateTime
     */
    private $created_at;

    /**
     * @var \DateTime
     */
    private $update_at;

    /**
     * @var string
     */
    private $note;

    /**
     * @var boolean
     */
    private $is_deleted;

    /**
     * @var \Doctrine\Common\Collections\Collection
     */
    private $receipt_card;

    /**
     * @var \Doctrine\Common\Collections\Collection
     */
    private $receipt_employee;

    /**
     * @var \Man\FinanceBundle\Entity\Branch
     */
    private $branch;

    /**
     * Constructor
     */
    public function __construct()
    {
        $this->receipt_card = new \Doctrine\Common\Collections\ArrayCollection();
        $this->receipt_employee = new \Doctrine\Common\Collections\ArrayCollection();
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
     * @return Receipt
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
     * Set name
     *
     * @param string $name
     * @return Receipt
     */
    public function setName($name)
    {
        $this->name = $name;

        return $this;
    }

    /**
     * Get name
     *
     * @return string 
     */
    public function getName()
    {
        return $this->name;
    }

    /**
     * Set report_date
     *
     * @param \DateTime $reportDate
     * @return Receipt
     */
    public function setReportDate($reportDate)
    {
        $this->report_date = $reportDate;

        return $this;
    }

    /**
     * Get report_date
     *
     * @return \DateTime 
     */
    public function getReportDate()
    {
        return $this->report_date;
    }

    /**
     * Set receipt_type
     *
     * @param string $receiptType
     * @return Receipt
     */
    public function setReceiptType($receiptType)
    {
        $this->receipt_type = $receiptType;

        return $this;
    }

    /**
     * Get receipt_type
     *
     * @return string 
     */
    public function getReceiptType()
    {
        return $this->receipt_type;
    }

    /**
     * Set amount_bill
     *
     * @param string $amountBill
     * @return Receipt
     */
    public function setAmountBill($amountBill)
    {
        $this->amount_bill = $amountBill;

        return $this;
    }

    /**
     * Get amount_bill
     *
     * @return string 
     */
    public function getAmountBill()
    {
        return $this->amount_bill;
    }

    /**
     * Set amount_discount
     *
     * @param string $amountDiscount
     * @return Receipt
     */
    public function setAmountDiscount($amountDiscount)
    {
        $this->amount_discount = $amountDiscount;

        return $this;
    }

    /**
     * Get amount_discount
     *
     * @return string 
     */
    public function getAmountDiscount()
    {
        return $this->amount_discount;
    }

    /**
     * Set amount_total
     *
     * @param string $amountTotal
     * @return Receipt
     */
    public function setAmountTotal($amountTotal)
    {
        $this->amount_total = $amountTotal;

        return $this;
    }

    /**
     * Get amount_total
     *
     * @return string 
     */
    public function getAmountTotal()
    {
        return $this->amount_total;
    }

    /**
     * Set amount_pay
     *
     * @param string $amountPay
     * @return Receipt
     */
    public function setAmountPay($amountPay)
    {
        $this->amount_pay = $amountPay;

        return $this;
    }

    /**
     * Get amount_pay
     *
     * @return string 
     */
    public function getAmountPay()
    {
        return $this->amount_pay;
    }

    /**
     * Set amount_change
     *
     * @param string $amountChange
     * @return Receipt
     */
    public function setAmountChange($amountChange)
    {
        $this->amount_change = $amountChange;

        return $this;
    }

    /**
     * Get amount_change
     *
     * @return string 
     */
    public function getAmountChange()
    {
        return $this->amount_change;
    }

    /**
     * Set created_at
     *
     * @param \DateTime $createdAt
     * @return Receipt
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
     * @return Receipt
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
     * Set note
     *
     * @param string $note
     * @return Receipt
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
     * Set is_deleted
     *
     * @param boolean $isDeleted
     * @return Receipt
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

    /**
     * Add receipt_card
     *
     * @param \Man\FinanceBundle\Entity\ReceiptCard $receiptCard
     * @return Receipt
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
     * Add receipt_employee
     *
     * @param \Man\FinanceBundle\Entity\ReceiptEmployee $receiptEmployee
     * @return Receipt
     */
    public function addReceiptEmployee(\Man\FinanceBundle\Entity\ReceiptEmployee $receiptEmployee)
    {
        $this->receipt_employee[] = $receiptEmployee;

        return $this;
    }

    /**
     * Remove receipt_employee
     *
     * @param \Man\FinanceBundle\Entity\ReceiptEmployee $receiptEmployee
     */
    public function removeReceiptEmployee(\Man\FinanceBundle\Entity\ReceiptEmployee $receiptEmployee)
    {
        $this->receipt_employee->removeElement($receiptEmployee);
    }

    /**
     * Get receipt_employee
     *
     * @return \Doctrine\Common\Collections\Collection 
     */
    public function getReceiptEmployee()
    {
        return $this->receipt_employee;
    }

    /**
     * Set branch
     *
     * @param \Man\FinanceBundle\Entity\Branch $branch
     * @return Receipt
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
     * @ORM\PrePersist
     */
    public function setCreatedAtValue()
    {
        // Add your code here
    }
}
