<?php

namespace Man\FinanceBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * CardEffective
 */
class CardEffective
{
    /**
     * @var integer
     */
    private $id;

    /**
     * @var string
     */
    private $late_year;

    /**
     * @var string
     */
    private $late_month;

    /**
     * @var string
     */
    private $late_day;

    /**
     * @var boolean
     */
    private $is_firstmonth;

    /**
     * @var \Man\FinanceBundle\Entity\Card
     */
    private $card;


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
     * Set late_year
     *
     * @param string $lateYear
     * @return CardEffective
     */
    public function setLateYear($lateYear)
    {
        $this->late_year = $lateYear;

        return $this;
    }

    /**
     * Get late_year
     *
     * @return string 
     */
    public function getLateYear()
    {
        return $this->late_year;
    }

    /**
     * Set late_month
     *
     * @param string $lateMonth
     * @return CardEffective
     */
    public function setLateMonth($lateMonth)
    {
        $this->late_month = $lateMonth;

        return $this;
    }

    /**
     * Get late_month
     *
     * @return string 
     */
    public function getLateMonth()
    {
        return $this->late_month;
    }

    /**
     * Set late_day
     *
     * @param string $lateDay
     * @return CardEffective
     */
    public function setLateDay($lateDay)
    {
        $this->late_day = $lateDay;

        return $this;
    }

    /**
     * Get late_day
     *
     * @return string 
     */
    public function getLateDay()
    {
        return $this->late_day;
    }

    /**
     * Set is_firstmonth
     *
     * @param boolean $isFirstmonth
     * @return CardEffective
     */
    public function setIsFirstmonth($isFirstmonth)
    {
        $this->is_firstmonth = $isFirstmonth;

        return $this;
    }

    /**
     * Get is_firstmonth
     *
     * @return boolean 
     */
    public function getIsFirstmonth()
    {
        return $this->is_firstmonth;
    }

    /**
     * Set card
     *
     * @param \Man\FinanceBundle\Entity\Card $card
     * @return CardEffective
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
}
