<?php

namespace UPC\SunatBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Penalty
 *
 * @ORM\Table(name="penalty")
 * @ORM\Entity
 */
class Penalty
{
    /**
     * @var integer
     *
     * @ORM\Column(name="id", type="integer", nullable=false)
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="IDENTITY")
     */
    private $id;

    /**
     * @var string
     *
     * @ORM\Column(name="ruc", type="string", length=11, nullable=false)
     */
    private $ruc;

    /**
     * @var string
     *
     * @ORM\Column(name="type_payment", type="string", length=150, nullable=false)
     */
    private $typePayment;

    /**
     * @var \DateTime
     *
     * @ORM\Column(name="tributary_period", type="date", nullable=false)
     */
    private $tributaryPeriod;

    /**
     * @var string
     *
     * @ORM\Column(name="resolution", type="string", length=15, nullable=true)
     */
    private $resolution;

    /**
     * @var integer
     *
     * @ORM\Column(name="tribute_code", type="integer", nullable=false)
     */
    private $tributeCode;

    /**
     * @var float
     *
     * @ORM\Column(name="payment", type="decimal", nullable=false)
     */
    private $payment;



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
     * Set ruc
     *
     * @param string $ruc
     * @return Penalty
     */
    public function setRuc($ruc)
    {
        $this->ruc = $ruc;
    
        return $this;
    }

    /**
     * Get ruc
     *
     * @return string 
     */
    public function getRuc()
    {
        return $this->ruc;
    }

    /**
     * Set typePayment
     *
     * @param string $typePayment
     * @return Penalty
     */
    public function setTypePayment($typePayment)
    {
        $this->typePayment = $typePayment;
    
        return $this;
    }

    /**
     * Get typePayment
     *
     * @return string 
     */
    public function getTypePayment()
    {
        return $this->typePayment;
    }

    /**
     * Set tributaryPeriod
     *
     * @param \DateTime $tributaryPeriod
     * @return Penalty
     */
    public function setTributaryPeriod($tributaryPeriod)
    {
        $this->tributaryPeriod = $tributaryPeriod;
    
        return $this;
    }

    /**
     * Get tributaryPeriod
     *
     * @return \DateTime 
     */
    public function getTributaryPeriod()
    {
        return $this->tributaryPeriod;
    }

    /**
     * Set resolution
     *
     * @param string $resolution
     * @return Penalty
     */
    public function setResolution($resolution)
    {
        $this->resolution = $resolution;
    
        return $this;
    }

    /**
     * Get resolution
     *
     * @return string 
     */
    public function getResolution()
    {
        return $this->resolution;
    }

    /**
     * Set tributeCode
     *
     * @param integer $tributeCode
     * @return Penalty
     */
    public function setTributeCode($tributeCode)
    {
        $this->tributeCode = $tributeCode;
    
        return $this;
    }

    /**
     * Get tributeCode
     *
     * @return integer 
     */
    public function getTributeCode()
    {
        return $this->tributeCode;
    }

    /**
     * Set payment
     *
     * @param float $payment
     * @return Penalty
     */
    public function setPayment($payment)
    {
        $this->payment = $payment;
    
        return $this;
    }

    /**
     * Get payment
     *
     * @return float 
     */
    public function getPayment()
    {
        return $this->payment;
    }
}