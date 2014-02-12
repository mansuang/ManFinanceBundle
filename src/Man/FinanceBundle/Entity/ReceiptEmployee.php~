<?php

namespace Man\FinanceBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * ReceiptEmployee
 */
class ReceiptEmployee
{
    /**
     * @var integer
     */
    private $id;

    /**
     * @var \Man\FinanceBundle\Entity\Employee
     */
    private $employee;

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
     * Set employee
     *
     * @param \Man\FinanceBundle\Entity\Employee $employee
     * @return ReceiptEmployee
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
     * Set receipt
     *
     * @param \Man\FinanceBundle\Entity\Receipt $receipt
     * @return ReceiptEmployee
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
