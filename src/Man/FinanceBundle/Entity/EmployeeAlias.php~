<?php

namespace Man\FinanceBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * EmployeeAlias
 */
class EmployeeAlias
{
    /**
     * @var integer
     */
    private $id;

    /**
     * @var string
     */
    private $username;

    /**
     * @var string
     */
    private $password;

    /**
     * @var string
     */
    private $name;

    /**
     * @var string
     */
    private $mobile;

    /**
     * @var boolean
     */
    private $is_openalias;

    /**
     * @var boolean
     */
    private $is_alias;

    /**
     * @var \DateTime
     */
    private $created_at;

    /**
     * @var \DateTime
     */
    private $last_login_at;

    /**
     * @var string
     */
    private $last_login_ip;

    /**
     * @var \DateTime
     */
    private $last_activity;

    /**
     * @var string
     */
    private $session_id;

    /**
     * @var \Man\FinanceBundle\Entity\Employee
     */
    private $employee;


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
     * Set username
     *
     * @param string $username
     * @return EmployeeAlias
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
     * Set password
     *
     * @param string $password
     * @return EmployeeAlias
     */
    public function setPassword($password)
    {
        $this->password = $password;

        return $this;
    }

    /**
     * Get password
     *
     * @return string 
     */
    public function getPassword()
    {
        return $this->password;
    }

    /**
     * Set name
     *
     * @param string $name
     * @return EmployeeAlias
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
     * Set mobile
     *
     * @param string $mobile
     * @return EmployeeAlias
     */
    public function setMobile($mobile)
    {
        $this->mobile = $mobile;

        return $this;
    }

    /**
     * Get mobile
     *
     * @return string 
     */
    public function getMobile()
    {
        return $this->mobile;
    }

    /**
     * Set is_openalias
     *
     * @param boolean $isOpenalias
     * @return EmployeeAlias
     */
    public function setIsOpenalias($isOpenalias)
    {
        $this->is_openalias = $isOpenalias;

        return $this;
    }

    /**
     * Get is_openalias
     *
     * @return boolean 
     */
    public function getIsOpenalias()
    {
        return $this->is_openalias;
    }

    /**
     * Set is_alias
     *
     * @param boolean $isAlias
     * @return EmployeeAlias
     */
    public function setIsAlias($isAlias)
    {
        $this->is_alias = $isAlias;

        return $this;
    }

    /**
     * Get is_alias
     *
     * @return boolean 
     */
    public function getIsAlias()
    {
        return $this->is_alias;
    }

    /**
     * Set created_at
     *
     * @param \DateTime $createdAt
     * @return EmployeeAlias
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
     * Set last_login_at
     *
     * @param \DateTime $lastLoginAt
     * @return EmployeeAlias
     */
    public function setLastLoginAt($lastLoginAt)
    {
        $this->last_login_at = $lastLoginAt;

        return $this;
    }

    /**
     * Get last_login_at
     *
     * @return \DateTime 
     */
    public function getLastLoginAt()
    {
        return $this->last_login_at;
    }

    /**
     * Set last_login_ip
     *
     * @param string $lastLoginIp
     * @return EmployeeAlias
     */
    public function setLastLoginIp($lastLoginIp)
    {
        $this->last_login_ip = $lastLoginIp;

        return $this;
    }

    /**
     * Get last_login_ip
     *
     * @return string 
     */
    public function getLastLoginIp()
    {
        return $this->last_login_ip;
    }

    /**
     * Set last_activity
     *
     * @param \DateTime $lastActivity
     * @return EmployeeAlias
     */
    public function setLastActivity($lastActivity)
    {
        $this->last_activity = $lastActivity;

        return $this;
    }

    /**
     * Get last_activity
     *
     * @return \DateTime 
     */
    public function getLastActivity()
    {
        return $this->last_activity;
    }

    /**
     * Set session_id
     *
     * @param string $sessionId
     * @return EmployeeAlias
     */
    public function setSessionId($sessionId)
    {
        $this->session_id = $sessionId;

        return $this;
    }

    /**
     * Get session_id
     *
     * @return string 
     */
    public function getSessionId()
    {
        return $this->session_id;
    }

    /**
     * Set employee
     *
     * @param \Man\FinanceBundle\Entity\Employee $employee
     * @return EmployeeAlias
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
     * @ORM\PrePersist
     */
    public function setCreatedAtValue()
    {
        // Add your code here
    }
}
