<?php

namespace Akrp\JobeetBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * LineOBizAffiliate
 */
class LineOBizAffiliate
{
    /**
     * @var integer
     */
    private $id;

    /**
     * @var \Akrp\JobeetBundle\Entity\LineOBiz
     */
    private $lob;

    /**
     * @var \Akrp\JobeetBundle\Entity\Affiliate
     */
    private $affiliate;


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
     * Set lob
     *
     * @param \Akrp\JobeetBundle\Entity\LineOBiz $lob
     * @return LineOBizAffiliate
     */
    public function setLineOBiz(\Akrp\JobeetBundle\Entity\LineOBiz $lob = null)
    {
        $this->lob = $lob;

        return $this;
    }

    /**
     * Get lob
     *
     * @return \Akrp\JobeetBundle\Entity\LineOBiz 
     */
    public function getLineOBiz()
    {
        return $this->lob;
    }

    /**
     * Set affiliate
     *
     * @param \Akrp\JobeetBundle\Entity\Affiliate $affiliate
     * @return LineOBizAffiliate
     */
    public function setAffiliate(\Akrp\JobeetBundle\Entity\Affiliate $affiliate = null)
    {
        $this->affiliate = $affiliate;

        return $this;
    }

    /**
     * Get affiliate
     *
     * @return \Akrp\JobeetBundle\Entity\Affiliate 
     */
    public function getAffiliate()
    {
        return $this->affiliate;
    }

    /**
     * Set lob
     *
     * @param \Akrp\JobeetBundle\Entity\LineOBiz $lob
     * @return LineOBizAffiliate
     */
    public function setLob(\Akrp\JobeetBundle\Entity\LineOBiz $lob = null)
    {
        $this->lob = $lob;

        return $this;
    }

    /**
     * Get lob
     *
     * @return \Akrp\JobeetBundle\Entity\LineOBiz 
     */
    public function getLob()
    {
        return $this->lob;
    }
}
