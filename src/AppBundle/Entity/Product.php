<?php

namespace AppBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Product
 *
 * @ORM\Table(name="product")
 * @ORM\Entity(repositoryClass="AppBundle\Repository\ProductRepository")
 */
class Product
{
    /**
     * @var int
     *
     * @ORM\Column(name="id", type="integer")
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="AUTO")
     */
    private $id;

    /**
     * @var string
     *
     * @ORM\Column(name="name", type="string", length=255, nullable=false, unique=false)
     */
    private $name;

    /**
     * @var int
     *
     * @ORM\Column(name="productid", type="integer", nullable=false, unique=false)
     */
    private $productid;

    /**
     * @var int
     *
     * @ORM\Column(name="size", type="integer", nullable=true, unique=false)
     */
    private $size;

    /**
     * @var string
     *
     * @ORM\Column(name="serialnumber", type="string", length=255, nullable=true, unique=false)
     */
    private $serialnumber;

    /**
     * @var int
     *
     * @ORM\Column(name="yearofproduction", type="integer", nullable=false, unique=false)
     */
    private $yearofproduction;

    /**
     * @var string
     *
     * @ORM\Column(name="coronanumber", type="string", length=255, nullable=true, unique=false)
     */
    private $coronanumber;

    /**
     * @var string
     *
     * @ORM\Column(name="producernumber", type="string", length=255, nullable=true, unique=false)
     */
    private $producernumber;

    /**
     * @var int
     *
     * @ORM\Column(name="customerid", type="integer", nullable=true, unique=false)
     */
    private $customerid;

    /**
     * @var string
     *
     * @ORM\Column(name="descriptionlocation", type="text", nullable=true, unique=false)
     */
    private $descriptionlocation;

    /**
     * @var string
     *
     * @ORM\Column(name="tank", type="text", nullable=true, unique=false)
     */
    private $tank;


    /**
     * Get id
     *
     * @return int
     */
    public function getId()
    {
        return $this->id;
    }

    /**
     * Set name
     *
     * @param string $name
     *
     * @return Product
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
     * Set productid
     *
     * @param integer $productid
     *
     * @return Product
     */
    public function setProductid($productid)
    {
        $this->productid = $productid;

        return $this;
    }

    /**
     * Get productid
     *
     * @return int
     */
    public function getProductid()
    {
        return $this->productid;
    }

    /**
     * Set size
     *
     * @param integer $size
     *
     * @return Product
     */
    public function setSize($size)
    {
        $this->size = $size;

        return $this;
    }

    /**
     * Get size
     *
     * @return int
     */
    public function getSize()
    {
        return $this->size;
    }

    /**
     * Set serialnumber
     *
     * @param string $serialnumber
     *
     * @return Product
     */
    public function setSerialnumber($serialnumber)
    {
        $this->serialnumber = $serialnumber;

        return $this;
    }

    /**
     * Get serialnumber
     *
     * @return string
     */
    public function getSerialnumber()
    {
        return $this->serialnumber;
    }

    /**
     * Set yearofproduction
     *
     * @param integer $yearofproduction
     *
     * @return Product
     */
    public function setYearofproduction($yearofproduction)
    {
        $this->yearofproduction = $yearofproduction;

        return $this;
    }

    /**
     * Get yearofproduction
     *
     * @return int
     */
    public function getYearofproduction()
    {
        return $this->yearofproduction;
    }

    /**
     * Set coronanumber
     *
     * @param string $coronanumber
     *
     * @return Product
     */
    public function setCoronanumber($coronanumber)
    {
        $this->coronanumber = $coronanumber;

        return $this;
    }

    /**
     * Get coronanumber
     *
     * @return string
     */
    public function getCoronanumber()
    {
        return $this->coronanumber;
    }

    /**
     * Set producernumber
     *
     * @param string $producernumber
     *
     * @return Product
     */
    public function setProducernumber($producernumber)
    {
        $this->producernumber = $producernumber;

        return $this;
    }

    /**
     * Get producernumber
     *
     * @return string
     */
    public function getProducernumber()
    {
        return $this->producernumber;
    }

    /**
     * Set customerid
     *
     * @param integer $customerid
     *
     * @return Product
     */
    public function setCustomerid($customerid)
    {
        $this->customerid = $customerid;

        return $this;
    }

    /**
     * Get customerid
     *
     * @return int
     */
    public function getCustomerid()
    {
        return $this->customerid;
    }

    /**
     * Set descriptionlocation
     *
     * @param string $descriptionlocation
     *
     * @return Product
     */
    public function setDescriptionlocation($descriptionlocation)
    {
        $this->descriptionlocation = $descriptionlocation;

        return $this;
    }

    /**
     * Get descriptionlocation
     *
     * @return string
     */
    public function getDescriptionlocation()
    {
        return $this->descriptionlocation;
    }

    /**
     * Set tank
     *
     * @param string $tank
     *
     * @return Product
     */
    public function setTank($tank)
    {
        $this->tank = $tank;

        return $this;
    }

    /**
     * Get tank
     *
     * @return string
     */
    public function getTank()
    {
        return $this->tank;
    }
}

