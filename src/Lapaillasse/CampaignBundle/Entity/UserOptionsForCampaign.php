<?php
// src/Lapaillasse/CampaignBundle/Entity/UserOptionsForCampaign.php

namespace Lapaillasse\CampaignBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * @ORM\Entity
 * @ORM\Table(name="cm_user_options_for_campaign")
 */
class UserOptionsForCampaign
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
    protected $user_id;

    /**
     * @ORM\Column(type="text")
     */
    protected $campaign_id;

    /**
     * @ORM\Column(name="optionalfield", type="text")
     */
    private $user_options;

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
     * Set user_id
     *
     * @param string $userId
     * @return UserOptionsForCampaign
     */
    public function setUserId($userId)
    {
        $this->user_id = $userId;
    
        return $this;
    }

    /**
     * Get user_id
     *
     * @return string 
     */
    public function getUserId()
    {
        return $this->user_id;
    }

    /**
     * Set campaign_id
     *
     * @param string $campaignId
     * @return UserOptionsForCampaign
     */
    public function setCampaignId($campaignId)
    {
        $this->campaign_id = $campaignId;
    
        return $this;
    }

    /**
     * Get campaign_id
     *
     * @return string 
     */
    public function getCampaignId()
    {
        return $this->campaign_id;
    }

    /**
     * Set user_options
     *
     * @param string $userOptions
     * @return UserOptionsForCampaign
     */
    public function setUserOptions($userOptions)
    {
        $this->user_options = $userOptions;
    
        return $this;
    }

    /**
     * Get user_options
     *
     * @return string 
     */
    public function getUserOptions()
    {
        return $this->user_options;
    }

    /**
     * Set created
     *
     * @param \DateTime $created
     * @return UserOptionsForCampaign
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