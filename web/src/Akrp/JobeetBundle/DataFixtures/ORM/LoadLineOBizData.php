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
        $design = new LineOBiz();
        $design->setName('Design');

        $programming = new LineOBiz();
        $programming->setName('Programming');

        $manager = new LineOBiz();
        $manager->setName('Manager');

        $administrator = new LineOBiz();
        $administrator->setName('Administrator');

        $em->persist($design);
        $em->persist($programming);
        $em->persist($manager);
        $em->persist($administrator);

        $em->flush();

        $this->addReference('lob-design', $design);
        $this->addReference('lob-programming', $programming);
        $this->addReference('lob-manager', $manager);
        $this->addReference('lob-administrator', $administrator);
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
