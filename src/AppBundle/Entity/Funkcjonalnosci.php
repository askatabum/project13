<?php

namespace AppBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Funkcjonalnosci
 *
 * @ORM\Table(name="funkcjonalnosci")
 * @ORM\Entity(repositoryClass="AppBundle\Repository\FunkcjonalnosciRepository")
 */
class Funkcjonalnosci
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
     * @ORM\Column(name="nazwa", type="string", length=100, nullable=false, unique=false)
     */
    private $nazwa;

    /**
     * @var string
     *
     * @ORM\Column(name="opis", type="text")
     */
    private $opis;

    /**
     * @var string
     *
     * @ORM\Column(name="staus", type="string", length=20, nullable=true, unique=false)
     */
    private $staus;


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
     * Set nazwa
     *
     * @param string $nazwa
     *
     * @return Funkcjonalnosci
     */
    public function setNazwa($nazwa)
    {
        $this->nazwa = $nazwa;

        return $this;
    }

    /**
     * Get nazwa
     *
     * @return string
     */
    public function getNazwa()
    {
        return $this->nazwa;
    }

    /**
     * Set opis
     *
     * @param string $opis
     *
     * @return Funkcjonalnosci
     */
    public function setOpis($opis)
    {
        $this->opis = $opis;

        return $this;
    }

    /**
     * Get opis
     *
     * @return string
     */
    public function getOpis()
    {
        return $this->opis;
    }

    /**
     * Set staus
     *
     * @param string $staus
     *
     * @return Funkcjonalnosci
     */
    public function setStaus($staus)
    {
        $this->staus = $staus;

        return $this;
    }

    /**
     * Get staus
     *
     * @return string
     */
    public function getStaus()
    {
        return $this->staus;
    }
}

