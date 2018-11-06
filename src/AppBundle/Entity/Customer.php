<?php

namespace AppBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Customer
 *
 * @ORM\Table(name="customer")
 * @ORM\Entity(repositoryClass="AppBundle\Repository\CustomerRepository")
 */
class Customer
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
     * @ORM\ManyToOne(targetEntity="CustomerGroup", inversedBy="customer")
     * @ORM\JoinColumn(name="customerid", referencedColumnName="id")
     */
   private $customerid; 
    /**
     * @var string
     *
     * @ORM\Column(name="name", type="string", length=150)
     */
    private $name;

    /**
     * @var string
     *
     * @ORM\Column(name="company", type="string", length=150)
     */
    private $company;

    /**
     * @var string
     *
     * @ORM\Column(name="street", type="string", length=150)
     */
    private $street;

    /**
     * @var string
     *
     * @ORM\Column(name="city", type="string", length=255)
     */
    private $city;

    /**
     * @var string
     *
     * @ORM\Column(name="zipcode", type="string", length=6)
     */
    private $zipcode;

    /**
     * @var string
     *
     * @ORM\Column(name="postoffice", type="string", length=100)
     */
    private $postoffice;

    
/**
     * @ORM\ManyToOne(targetEntity="Province", inversedBy="customer")
     * @ORM\JoinColumn(name="provinceid", referencedColumnName="id")
     */
   private $province; 
    /**
     * @var string
     *
     * @ORM\Column(name="nip", type="string", length=20, unique=true)
     */
    private $nip;

    /**
     * @var string
     *
     * @ORM\Column(name="email", type="string", length=100)
     */
    private $email;

    /**
     * @var string
     *
     * @ORM\Column(name="phone1", type="string", length=15)
     */
    private $phone1;

    /**
     * @var string
     *
     * @ORM\Column(name="phone2", type="string", length=15, nullable=true)
     */
    private $phone2;

    /**
     * @var string
     *
     * @ORM\Column(name="www", type="string", length=100, nullable=true)
     */
    private $www;
  

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
     * Set name
     *
     * @param string $name
     *
     * @return Customer
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
     * Set company
     *
     * @param string $company
     *
     * @return Customer
     */
    public function setCompany($company)
    {
        $this->company = $company;

        return $this;
    }

    /**
     * Get company
     *
     * @return string
     */
    public function getCompany()
    {
        return $this->company;
    }

    /**
     * Set street
     *
     * @param string $street
     *
     * @return Customer
     */
    public function setStreet($street)
    {
        $this->street = $street;

        return $this;
    }

    /**
     * Get street
     *
     * @return string
     */
    public function getStreet()
    {
        return $this->street;
    }

    /**
     * Set city
     *
     * @param string $city
     *
     * @return Customer
     */
    public function setCity($city)
    {
        $this->city = $city;

        return $this;
    }

    /**
     * Get city
     *
     * @return string
     */
    public function getCity()
    {
        return $this->city;
    }

    /**
     * Set zipcode
     *
     * @param string $zipcode
     *
     * @return Customer
     */
    public function setZipcode($zipcode)
    {
        $this->zipcode = $zipcode;

        return $this;
    }

    /**
     * Get zipcode
     *
     * @return string
     */
    public function getZipcode()
    {
        return $this->zipcode;
    }

    /**
     * Set postoffice
     *
     * @param string $postoffice
     *
     * @return Customer
     */
    public function setPostoffice($postoffice)
    {
        $this->postoffice = $postoffice;

        return $this;
    }

    /**
     * Get postoffice
     *
     * @return string
     */
    public function getPostoffice()
    {
        return $this->postoffice;
    }

    /**
     * Set province
     *
     * @param string $province
     *
     * @return Customer
     */
    public function setProvince($province)
    {
        $this->province = $province;

        return $this;
    }

    /**
     * Get province
     *
     * @return string
     */
    public function getProvince()
    {
        return $this->province;
    }

    /**
     * Set nip
     *
     * @param string $nip
     *
     * @return Customer
     */
    public function setNip($nip)
    {
        $this->nip = $nip;

        return $this;
    }

    /**
     * Get nip
     *
     * @return string
     */
    public function getNip()
    {
        return $this->nip;
    }

    /**
     * Set email
     *
     * @param string $email
     *
     * @return Customer
     */
    public function setEmail($email)
    {
        $this->email = $email;

        return $this;
    }

    /**
     * Get email
     *
     * @return string
     */
    public function getEmail()
    {
        return $this->email;
    }

    /**
     * Set phone1
     *
     * @param string $phone1
     *
     * @return Customer
     */
    public function setPhone1($phone1)
    {
        $this->phone1 = $phone1;

        return $this;
    }

    /**
     * Get phone1
     *
     * @return string
     */
    public function getPhone1()
    {
        return $this->phone1;
    }

    /**
     * Set phone2
     *
     * @param string $phone2
     *
     * @return Customer
     */
    public function setPhone2($phone2)
    {
        $this->phone2 = $phone2;

        return $this;
    }

    /**
     * Get phone2
     *
     * @return string
     */
    public function getPhone2()
    {
        return $this->phone2;
    }

    /**
     * Set www
     *
     * @param string $www
     *
     * @return Customer
     */
    public function setWww($www)
    {
        $this->www = $www;

        return $this;
    }

    /**
     * Get www
     *
     * @return string
     */
    public function getWww()
    {
        return $this->www;
    }

    /**
     * Set customerid
     *
     * @param \AppBundle\Entity\CustomerGroup $customerid
     *
     * @return Customer
     */
    public function setCustomerid(\AppBundle\Entity\CustomerGroup $customerid = null)
    {
        $this->customerid = $customerid;

        return $this;
    }

    /**
     * Get customerid
     *
     * @return \AppBundle\Entity\CustomerGroup
     */
    public function getCustomerid()
    {
        return $this->customerid;
    }
}
