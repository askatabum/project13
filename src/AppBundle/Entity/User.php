<?php
// src/AppBundle/Entity/User.php

namespace AppBundle\Entity;

use FOS\UserBundle\Model\User as BaseUser;
use Doctrine\ORM\Mapping as ORM;

/**
 * @ORM\Entity
 * @ORM\Table(name="appuser")
 */
class User extends BaseUser
{
    /**
     * @ORM\Id
     * @ORM\Column(type="integer")
     * @ORM\GeneratedValue(strategy="AUTO")
     */
    protected $id;

    
    
    public function __construct()
    {
       parent::__construct();
       $this->addRole("ROLE_USER");
    }

   

   

    /**
     * Add hosting
     *
     * @param \AppBundle\Entity\Hosting $hosting
     *
     * @return User
     */
    public function addHosting(\AppBundle\Entity\Hosting $hosting)
    {
        $this->hosting[] = $hosting;

        return $this;
    }

    /**
     * Remove hosting
     *
     * @param \AppBundle\Entity\Hosting $hosting
     */
    public function removeHosting(\AppBundle\Entity\Hosting $hosting)
    {
        $this->hosting->removeElement($hosting);
    }

    /**
     * Get hosting
     *
     * @return \Doctrine\Common\Collections\Collection
     */
    public function getHosting()
    {
        return $this->hosting;
    }

    /**
     * Add customerevent
     *
     * @param \AppBundle\Entity\CustomerEvent $customerevent
     *
     * @return User
     */
    public function addCustomerevent(\AppBundle\Entity\CustomerEvent $customerevent)
    {
        $this->customerevent[] = $customerevent;

        return $this;
    }

    /**
     * Remove customerevent
     *
     * @param \AppBundle\Entity\CustomerEvent $customerevent
     */
    public function removeCustomerevent(\AppBundle\Entity\CustomerEvent $customerevent)
    {
        $this->customerevent->removeElement($customerevent);
    }

    /**
     * Get customerevent
     *
     * @return \Doctrine\Common\Collections\Collection
     */
    public function getCustomerevent()
    {
        return $this->customerevent;
    }

    /**
     * Add project
     *
     * @param \AppBundle\Entity\Project $project
     *
     * @return User
     */
    public function addProject(\AppBundle\Entity\Project $project)
    {
        $this->project[] = $project;

        return $this;
    }

    /**
     * Remove project
     *
     * @param \AppBundle\Entity\Project $project
     */
    public function removeProject(\AppBundle\Entity\Project $project)
    {
        $this->project->removeElement($project);
    }

    /**
     * Get project
     *
     * @return \Doctrine\Common\Collections\Collection
     */
    public function getProject()
    {
        return $this->project;
    }
}
