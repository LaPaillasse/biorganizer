<?php
// src/Lapaillasse/CampaignBundle/Entity/Campaign.php

namespace Lapaillasse\CampaignBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * @ORM\Entity
 * @ORM\Table(name="cm_campaign")
 */
class Campaign
{
    /**
     * @ORM\Id
     * @ORM\Column(type="integer")
     * @ORM\GeneratedValue(strategy="AUTO")
     */
    protected $id;

    /**
     * @ORM\Column(type="text")
     */
    protected $name;

    /**
     * @ORM\Column(type="text")
     */
    protected $description;

    /**
     * User ID
     * @ORM\Column(type="integer")
     */
    protected $creator;

    /**
     * @ORM\Column(name="optionalfield", type="text")
     */
    private $optionalfield;

    /**
     *
     * @ORM\Column(type="datetime")
     */
    private $created;

    

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
     * @return Campaign
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
     * Set description
     *
     * @param string $description
     * @return Campaign
     */
    public function setDescription($description)
    {
        $this->description = $description;
    
        return $this;
    }

    /**
     * Get description
     *
     * @return string 
     */
    public function getDescription()
    {
        return $this->description;
    }

    /**
     * Set creator
     *
     * @param integer $creator
     * @return Campaign
     */
    public function setCreator($creator)
    {
        $this->creator = $creator;
    
        return $this;
    }

    /**
     * Get creator
     *
     * @return integer 
     */
    public function getCreator()
    {
        return $this->creator;
    }

    /**
     * Set optionalfield
     *
     * @param string $optionalfield
     * @return Campaign
     */
    public function setOptionalfield($optionalfield)
    {
        $this->optionalfield = $optionalfield;
    
        return $this;
    }

    /**
     * Get optionalfield
     *
     * @return string 
     */
    public function getOptionalfield()
    {
        return $this->optionalfield;
    }

    /**
     * Set created
     *
     * @param \DateTime $created
     * @return Campaign
     */
    public function setCreated($created)
    {
        $this->created = $created;
    
        return $this;
    }

    /**
     * Get created
     *
     * @return \DateTime 
     */
    public function getCreated()
    {
        return $this->created;
    }
}