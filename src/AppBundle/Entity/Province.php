<?php

namespace AppBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Province
 *
 * @ORM\Table(name="province")
 * @ORM\Entity(repositoryClass="AppBundle\Repository\ProvinceRepository")
 */
class Province {

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
     * @ORM\Column(name="name", type="string", length=255, nullable=false, unique=true)
     */
    private $name;

    /**
     * @ORM\OneToMany(targetEntity="CustomerGroup", mappedBy="province")
     */
    private $customergroup;

    /**
     * @ORM\OneToMany(targetEntity="Customer", mappedBy="province")
     */
    private $customer;

    public function __toString() {
        return (string) $this->getName();
    }

    /**
     * Constructor
     */
    public function __construct() {
        $this->customergroup = new \Doctrine\Common\Collections\ArrayCollection();
    }

    /**
     * Get id
     *
     * @return integer
     */
    public function getId() {
        return $this->id;
    }

    /**
     * Set name
     *
     * @param string $name
     *
     * @return Province
     */
    public function setName($name) {
        $this->name = $name;

        return $this;
    }

    /**
     * Get name
     *
     * @return string
     */
    public function getName() {
        return $this->name;
    }

    /**
     * Add customergroup
     *
     * @param \AppBundle\Entity\CustomerGroup $customergroup
     *
     * @return Province
     */
    public function addCustomergroup(\AppBundle\Entity\CustomerGroup $customergroup) {
        $this->customergroup[] = $customergroup;

        return $this;
    }

    /**
     * Remove customergroup
     *
     * @param \AppBundle\Entity\CustomerGroup $customergroup
     */
    public function removeCustomergroup(\AppBundle\Entity\CustomerGroup $customergroup) {
        $this->customergroup->removeElement($customergroup);
    }

    /**
     * Get customergroup
     *
     * @return \Doctrine\Common\Collections\Collection
     */
    public function getCustomergroup() {
        return $this->customergroup;
    }

}
