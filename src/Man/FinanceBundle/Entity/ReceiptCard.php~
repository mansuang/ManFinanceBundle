<?php

namespace Man\FinanceBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * ReceiptCard
 */
class ReceiptCard
{
    /**
     * @var integer
     */
    private $id;

    /**
     * @var \DateTime
     */
    private $due_date;

    /**
     * @var \DateTime
     */
    private $pay_date;

    /**
     * @var string
     */
    private $monthly;

    /**
     * @var string
     */
    private $interest;

    /**
     * @var string
     */
    private $fine;

    /**
     * @var string
     */
    private $inc_dec_cost;

    /**
     * @var string
     */
    private $amount_bill;

    /**
     * @var \Man\FinanceBundle\Entity\Card
     */
    private $card;

    /**
     * @var \Man\FinanceBundle\Entity\Receipt
     */
    private $receipt;


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
     * Set due_date
     *
     * @param \DateTime $dueDate
     * @return ReceiptCard
     */
    public function setDueDate($dueDate)
    {
        $this->due_date = $dueDate;

        return $this;
    }

    /**
     * Get due_date
     *
     * @return \DateTime 
     */
    public function getDueDate()
    {
        return $this->due_date;
    }

    /**
     * Set pay_date
     *
     * @param \DateTime $payDate
     * @return ReceiptCard
     */
    public function setPayDate($payDate)
    {
        $this->pay_date = $payDate;

        return $this;
    }

    /**
     * Get pay_date
     *
     * @return \DateTime 
     */
    public function getPayDate()
    {
        return $this->pay_date;
    }

    /**
     * Set monthly
     *
     * @param string $monthly
     * @return ReceiptCard
     */
    public function setMonthly($monthly)
    {
        $this->monthly = $monthly;

        return $this;
    }

    /**
     * Get monthly
     *
     * @return string 
     */
    public function getMonthly()
    {
        return $this->monthly;
    }

    /**
     * Set interest
     *
     * @param string $interest
     * @return ReceiptCard
     */
    public function setInterest($interest)
    {
        $this->interest = $interest;

        return $this;
    }

    /**
     * Get interest
     *
     * @return string 
     */
    public function getInterest()
    {
        return $this->interest;
    }

    /**
     * Set fine
     *
     * @param string $fine
     * @return ReceiptCard
     */
    public function setFine($fine)
    {
        $this->fine = $fine;

        return $this;
    }

    /**
     * Get fine
     *
     * @return string 
     */
    public function getFine()
    {
        return $this->fine;
    }

    /**
     * Set inc_dec_cost
     *
     * @param string $incDecCost
     * @return ReceiptCard
     */
    public function setIncDecCost($incDecCost)
    {
        $this->inc_dec_cost = $incDecCost;

        return $this;
    }

    /**
     * Get inc_dec_cost
     *
     * @return string 
     */
    public function getIncDecCost()
    {
        return $this->inc_dec_cost;
    }

    /**
     * Set amount_bill
     *
     * @param string $amountBill
     * @return ReceiptCard
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
     * Set card
     *
     * @param \Man\FinanceBundle\Entity\Card $card
     * @return ReceiptCard
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

    /**
     * Set receipt
     *
     * @param \Man\FinanceBundle\Entity\Receipt $receipt
     * @return ReceiptCard
     */
    public function setReceipt(\Man\FinanceBundle\Entity\Receipt $receipt = null)
    {
        $this->receipt = $receipt;

        return $this;
    }

    /**
     * Get receipt
     *
     * @return \Man\FinanceBundle\Entity\Receipt 
     */
    public function getReceipt()
    {
        return $this->receipt;
    }
}
