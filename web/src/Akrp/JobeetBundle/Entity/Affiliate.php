<?php

namespace Akrp\JobeetBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Affiliate
 */
class Affiliate
{
    /**
     * @var integer
     */
    private $id;

    /**
     * @var string
     */
    private $url;

    /**
     * @var string
     */
    private $email;

    /**
     * @var string
     */
    private $token;

    /**
     * @var \DateTime
     */
    private $created_at;

    /**
     * @var \Doctrine\Common\Collections\Collection
     */
    private $lob_affiliates;

    /**
     * Constructor
     */
    public function __construct()
    {
        $this->lob_affiliates = new \Doctrine\Common\Collections\ArrayCollection();
    }

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
     * Set url
     *
     * @param string $url
     * @return Affiliate
     */
    public function setUrl($url)
    {
        $this->url = $url;

        return $this;
    }

    /**
     * Get url
     *
     * @return string 
     */
    public function getUrl()
    {
        return $this->url;
    }

    /**
     * Set email
     *
     * @param string $email
     * @return Affiliate
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
     * Set token
     *
     * @param string $token
     * @return Affiliate
     */
    public function setToken($token)
    {
        $this->token = $token;

        return $this;
    }

    /**
     * Get token
     *
     * @return string 
     */
    public function getToken()
    {
        return $this->token;
    }

    /**
     * Set created_at
     *
     * @param \DateTime $createdAt
     * @return Affiliate
     */
    public function setCreatedAt($createdAt)
    {
        $this->created_at = $createdAt;

        return $this;
    }

    /**
     * Get created_at
     *
     * @return \DateTime 
     */
    public function getCreatedAt()
    {
        return $this->created_at;
    }

    /**
     * Add lob_affiliates
     *
     * @param \Akrp\JobeetBundle\Entity\LineOBizAffiliate $lobAffiliates
     * @return Affiliate
     */
    public function addLineOBizAffiliate(\Akrp\JobeetBundle\Entity\LineOBizAffiliate $lobAffiliates)
    {
        $this->lob_affiliates[] = $lobAffiliates;

        return $this;
    }

    /**
     * Remove lob_affiliates
     *
     * @param \Akrp\JobeetBundle\Entity\LineOBizAffiliate $lobAffiliates
     */
    public function removeLineOBizAffiliate(\Akrp\JobeetBundle\Entity\LineOBizAffiliate $lobAffiliates)
    {
        $this->lob_affiliates->removeElement($lobAffiliates);
    }

    /**
     * Get lob_affiliates
     *
     * @return \Doctrine\Common\Collections\Collection 
     */
    public function getLineOBizAffiliates()
    {
        return $this->lob_affiliates;
    }
    /**
     * @ORM\PrePersist
     */
    public function setCreatedAtValue()
    {
        // Add your code here
    }

    /**
     * Add lob_affiliates
     *
     * @param \Akrp\JobeetBundle\Entity\LineOBizAffiliate $lobAffiliates
     * @return Affiliate
     */
    public function addLobAffiliate(\Akrp\JobeetBundle\Entity\LineOBizAffiliate $lobAffiliates)
    {
        $this->lob_affiliates[] = $lobAffiliates;

        return $this;
    }

    /**
     * Remove lob_affiliates
     *
     * @param \Akrp\JobeetBundle\Entity\LineOBizAffiliate $lobAffiliates
     */
    public function removeLobAffiliate(\Akrp\JobeetBundle\Entity\LineOBizAffiliate $lobAffiliates)
    {
        $this->lob_affiliates->removeElement($lobAffiliates);
    }

    /**
     * Get lob_affiliates
     *
     * @return \Doctrine\Common\Collections\Collection 
     */
    public function getLobAffiliates()
    {
        return $this->lob_affiliates;
    }
}
