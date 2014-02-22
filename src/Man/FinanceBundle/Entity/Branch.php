<?php

namespace Man\FinanceBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Branch
 */
class Branch
{
    /**
     * @var integer
     */
    private $id;

    /**
     * @var string
     */
    private $branch_name;

    /**
     * @var \Doctrine\Common\Collections\Collection
     */
    private $card;

    /**
     * @var \Doctrine\Common\Collections\Collection
     */
    private $receipt;

    /**
     * Constructor
     */
    public function __construct()
    {
        $this->card = new \Doctrine\Common\Collections\ArrayCollection();
        $this->receipt = new \Doctrine\Common\Collections\ArrayCollection();
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
     * Set branch_name
     *
     * @param string $branchName
     * @return Branch
     */
    public function setBranchName($branchName)
    {
        $this->branch_name = $branchName;

        return $this;
    }

    /**
     * Get branch_name
     *
     * @return string 
     */
    public function getBranchName()
    {
        return $this->branch_name;
    }

    /**
     * Add card
     *
     * @param \Man\FinanceBundle\Entity\Card $card
     * @return Branch
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
     * Add receipt
     *
     * @param \Man\FinanceBundle\Entity\Receipt $receipt
     * @return Branch
     */
    public function addReceipt(\Man\FinanceBundle\Entity\Receipt $receipt)
    {
        $this->receipt[] = $receipt;

        return $this;
    }

    /**
     * Remove receipt
     *
     * @param \Man\FinanceBundle\Entity\Receipt $receipt
     */
    public function removeReceipt(\Man\FinanceBundle\Entity\Receipt $receipt)
    {
        $this->receipt->removeElement($receipt);
    }

    /**
     * Get receipt
     *
     * @return \Doctrine\Common\Collections\Collection 
     */
    public function getReceipt()
    {
        return $this->receipt;
    }
	
	public function __toString()
	{
		return $this->branch_name;
	}
}
