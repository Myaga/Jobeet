<?php
namespace Akrp\JobeetBundle\DataFixtures\ORM;

use Doctrine\Common\DataFixtures\AbstractFixture;
use Doctrine\Common\DataFixtures\OrderedFixtureInterface;
use Doctrine\Common\Persistence\ObjectManager;
use \Akrp\JobeetBundle\Entity\LineOBiz;
/**
 * Created by JetBrains PhpStorm.
 * User: imerayo
 * Date: 8/6/12
 * Time: 10:18 AM
 * To change this template use File | Settings | File Templates.
 */
class LoadLineOBizData extends AbstractFixture implements OrderedFixtureInterface
{
    /**
     * Create objects to load
     *
     * @param \Doctrine\Common\Persistence\ObjectManager $em
     */
    public function load(ObjectManager $em)
    {
        $systems = new LineOBiz();
        $systems->setName('Systems/BE');

        $applications = new LineOBiz();
        $applications->setName('Applications');

        $frontend = new LineOBiz();
        $frontend->setName('Front End/UI-UX');

        $mobile = new LineOBiz();
        $mobile->setName('Mobile');

        $em->persist($systems);
        $em->persist($applications);
        $em->persist($frontend);
        $em->persist($mobile);

        $em->flush();

        $this->addReference('lob-systems', $systems);
        $this->addReference('lob-applications', $applications);
        $this->addReference('lob-frontend', $frontend);
        $this->addReference('lob-mobile', $mobile);
    }
    /**
     * Order in which fixtures will be loaded
     *
     * @return int
     */
    public function getOrder()
    {
        return 1;
    }
}
