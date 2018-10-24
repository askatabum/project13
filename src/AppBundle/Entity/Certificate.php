<?php

namespace AppBundle\Entity;

use Doctrine\ORM\Mapping as ORM;
use Symfony\Component\Validator\Constraints as Assert;
/**
 * Certificate
 *
 * @ORM\Table(name="certificate")
 * @ORM\Entity(repositoryClass="AppBundle\Repository\CertificateRepository")
 */
class Certificate
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
     * @ORM\Column(type="string")
     *
     * @Assert\NotBlank(message="Please, upload the product brochure as a PDF file.")
     * @Assert\File(mimeTypes={ "application/pdf" })
     */
    private $pdfFile;

  

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
     * Set pdfFile
     *
     * @param string $pdfFile
     *
     * @return Certificate
     */
    public function setPdfFile($pdfFile)
    {
        $this->pdfFile = $pdfFile;

        return $this;
    }

    /**
     * Get pdfFile
     *
     * @return string
     */
    public function getPdfFile()
    {
        return $this->pdfFile;
    }
}
