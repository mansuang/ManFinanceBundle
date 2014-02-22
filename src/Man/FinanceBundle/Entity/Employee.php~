<?php

namespace Man\FinanceBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Employee
 */
class Employee
{
    /**
     * @var integer
     */
    private $id;

    /**
     * @var string
     */
    private $mid;

    /**
     * @var string
     */
    private $username;

    /**
     * @var integer
     */
    private $level;

    /**
     * @var boolean
     */
    private $is_open;

    /**
     * @var \Doctrine\Common\Collections\Collection
     */
    private $card;

    /**
     * @var \Doctrine\Common\Collections\Collection
     */
    private $receipt_employee;

    /**
     * @var \Doctrine\Common\Collections\Collection
     */
    private $children;

    /**
     * @var \Doctrine\Common\Collections\Collection
     */
    private $employee_alias;

    /**
     * @var \Man\FinanceBundle\Entity\Employee
     */
    private $parent;

    /**
     * Constructor
     */
    public function __construct()
    {
        $this->card = new \Doctrine\Common\Collections\ArrayCollection();
        $this->receipt_employee = new \Doctrine\Common\Collections\ArrayCollection();
        $this->children = new \Doctrine\Common\Collections\ArrayCollection();
        $this->employee_alias = new \Doctrine\Common\Collections\ArrayCollection();
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
     * Set mid
     *
     * @param string $mid
     * @return Employee
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
     * Set username
     *
     * @param string $username
     * @return Employee
     */
    public function setUsername($username)
    {
        $this->username = $username;

        return $this;
    }

    /**
     * Get username
     *
     * @return string 
     */
    public function getUsername()
    {
        return $this->username;
    }

    /**
     * Set level
     *
     * @param integer $level
     * @return Employee
     */
    public function setLevel($level)
    {
        $this->level = $level;

        return $this;
    }

    /**
     * Get level
     *
     * @return integer 
     */
    public function getLevel()
    {
        return $this->level;
    }

    /**
     * Set is_open
     *
     * @param boolean $isOpen
     * @return Employee
     */
    public function setIsOpen($isOpen)
    {
        $this->is_open = $isOpen;

        return $this;
    }

    /**
     * Get is_open
     *
     * @return boolean 
     */
    public function getIsOpen()
    {
        return $this->is_open;
    }

    /**
     * Add card
     *
     * @param \Man\FinanceBundle\Entity\Card $card
     * @return Employee
     */
    public function addCard(\Man\FinanceBundle\Entity\Card $card)
    {
        $this->card[] = $card;

        return $this;
    }

    /**
     * Remove card
     *
     * @param \Man\FinanceBundle\Entity\Card $card
     */
    public function removeCard(\Man\FinanceBundle\Entity\Card $card)
    {
        $this->card->removeElement($card);
    }

    /**
     * Get card
     *
     * @return \Doctrine\Common\Collections\Collection 
     */
    public function getCard()
    {
        return $this->card;
    }

    /**
     * Add receipt_employee
     *
     * @param \Man\FinanceBundle\Entity\ReceiptEmployee $receiptEmployee
     * @return Employee
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
     * Add children
     *
     * @param \Man\FinanceBundle\Entity\Employee $children
     * @return Employee
     */
    public function addChild(\Man\FinanceBundle\Entity\Employee $children)
    {
        $this->children[] = $children;

        return $this;
    }

    /**
     * Remove children
     *
     * @param \Man\FinanceBundle\Entity\Employee $children
     */
    public function removeChild(\Man\FinanceBundle\Entity\Employee $children)
    {
        $this->children->removeElement($children);
    }

    /**
     * Get children
     *
     * @return \Doctrine\Common\Collections\Collection 
     */
    public function getChildren()
    {
        return $this->children;
    }

    /**
     * Add employee_alias
     *
     * @param \Man\FinanceBundle\Entity\EmployeeAlias $employeeAlias
     * @return Employee
     */
    public function addEmployeeAlias(\Man\FinanceBundle\Entity\EmployeeAlias $employeeAlias)
    {
        $this->employee_alias[] = $employeeAlias;

        return $this;
    }

    /**
     * Remove employee_alias
     *
     * @param \Man\FinanceBundle\Entity\EmployeeAlias $employeeAlias
     */
    public function removeEmployeeAlias(\Man\FinanceBundle\Entity\EmployeeAlias $employeeAlias)
    {
        $this->employee_alias->removeElement($employeeAlias);
    }

    /**
     * Get employee_alias
     *
     * @return \Doctrine\Common\Collections\Collection 
     */
    public function getEmployeeAlias()
    {
        return $this->employee_alias;
    }

    /**
     * Set parent
     *
     * @param \Man\FinanceBundle\Entity\Employee $parent
     * @return Employee
     */
    public function setParent(\Man\FinanceBundle\Entity\Employee $parent = null)
    {
        $this->parent = $parent;

        return $this;
    }

    /**
     * Get parent
     *
     * @return \Man\FinanceBundle\Entity\Employee 
     */
    public function getParent()
    {
        return $this->parent;
    }
	
	public function __toString()
	{
		return $this->username;
	}	
}
