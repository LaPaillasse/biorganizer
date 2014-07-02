<?php
// src/Lapaillasse/CampaignBundle/Entity/Option.php

namespace Lapaillasse\CampaignBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * @ORM\Entity
 * @ORM\Table(name="cm_option")
 */
class Option
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
    protected $title;

    /**
     * Campaign ID
     * @ORM\Column(type="integer")
     */
    protected $_related_campaign;

    /**
     * @ORM\Column(name="option", type="array")
     */
    private $terms;

    /**
     * Parent Option (if exist)
     * @ORM\Column(type="integer")
     */
    protected $parent;

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
     * Set title
     *
     * @param string $title
     * @return Option
     */
    public function setTitle($title)
    {
        $this->title = $title;
    
        return $this;
    }

    /**
     * Get title
     *
     * @return string 
     */
    public function getTitle()
    {
        return $this->title;
    }

    /**
     * Set _related_campaign
     *
     * @param integer $relatedCampaign
     * @return Option
     */
    public function setRelatedCampaign($relatedCampaign)
    {
        $this->_related_campaign = $relatedCampaign;
    
        return $this;
    }

    /**
     * Get _related_campaign
     *
     * @return integer 
     */
    public function getRelatedCampaign()
    {
        return $this->_related_campaign;
    }

    /**
     * Set terms
     *
     * @param array $terms
     * @return Option
     */
    public function setTerms($terms)
    {
        $this->terms = $terms;
    
        return $this;
    }

    /**
     * Get terms
     *
     * @return array 
     */
    public function getTerms()
    {
        return $this->terms;
    }

    /**
     * Set parent
     *
     * @param integer $parent
     * @return Option
     */
    public function setParent($parent)
    {
        $this->parent = $parent;
    
        return $this;
    }

    /**
     * Get parent
     *
     * @return integer 
     */
    public function getParent()
    {
        return $this->parent;
    }
}