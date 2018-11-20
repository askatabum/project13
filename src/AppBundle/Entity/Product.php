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
     * @ORM\ManyToOne(targetEntity="Customer", inversedBy="product")
     * @ORM\JoinColumn(name="customerid", referencedColumnName="id")
     */
    private $customerid;
   /**
     * @ORM\ManyToOne(targetEntity="ProductSize", inversedBy="product")
     * @ORM\JoinColumn(name="productsizeid", referencedColumnName="id")
     */
    private $productsizeid;
    
    /**
     * @ORM\ManyToOne(targetEntity="ProductType", inversedBy="product")
     * @ORM\JoinColumn(name="producttypeid", referencedColumnName="id")
     */
    private $producttypeid;
/**
     * @ORM\ManyToOne(targetEntity="Producer", inversedBy="product")
     * @ORM\JoinColumn(name="producerid", referencedColumnName="id")
     */
    private $producerid;
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
     * @ORM\ManyToOne(targetEntity="User", inversedBy="product")
     * @ORM\JoinColumn(name="userid", referencedColumnName="id")
     */
    private $userid;   

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

    /**
     * Set productsizeid
     *
     * @param \AppBundle\Entity\ProductSize $productsizeid
     *
     * @return Product
     */
    public function setProductsizeid(\AppBundle\Entity\ProductSize $productsizeid = null)
    {
        $this->productsizeid = $productsizeid;

        return $this;
    }

    /**
     * Get productsizeid
     *
     * @return \AppBundle\Entity\ProductSize
     */
    public function getProductsizeid()
    {
        return $this->productsizeid;
    }

    /**
     * Set producttypeid
     *
     * @param \AppBundle\Entity\ProductType $producttypeid
     *
     * @return Product
     */
    public function setProducttypeid(\AppBundle\Entity\ProductType $producttypeid = null)
    {
        $this->producttypeid = $producttypeid;

        return $this;
    }

    /**
     * Get producttypeid
     *
     * @return \AppBundle\Entity\ProductType
     */
    public function getProducttypeid()
    {
        return $this->producttypeid;
    }

    /**
     * Set producerid
     *
     * @param \AppBundle\Entity\Producer $producerid
     *
     * @return Product
     */
    public function setProducerid(\AppBundle\Entity\Producer $producerid = null)
    {
        $this->producerid = $producerid;

        return $this;
    }

    /**
     * Get producerid
     *
     * @return \AppBundle\Entity\Producer
     */
    public function getProducerid()
    {
        return $this->producerid;
    }

    /**
     * Set userid
     *
     * @param \AppBundle\Entity\User $userid
     *
     * @return Product
     */
    public function setUserid(\AppBundle\Entity\User $userid = null)
    {
        $user = $this->get('security.context')->getToken()->getUser();
        $userId = $user->getId();
        
        $this->userid = $userId;

        return $this;
    }
 
    /**
     * Get userid
     *
     * @return \AppBundle\Entity\User
     */
    public function getUserid()
    {
        return $this->userid;
    }
}
