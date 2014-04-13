<?php
namespace Akrp\JobeetBundle\DataFixtures\ORM;

use Doctrine\Common\Persistence\ObjectManager;
use Doctrine\Common\DataFixtures\AbstractFixture;
use Doctrine\Common\DataFixtures\OrderedFixtureInterface;
use Akrp\JobeetBundle\Entity\Job;
/**
 * Created by JetBrains PhpStorm.
 * User: imerayo
 * Date: 8/6/12
 * Time: 10:28 AM
 * To change this template use File | Settings | File Templates.
 */
class LoadJobData extends AbstractFixture implements OrderedFixtureInterface
{
    /**
     * Loading Job
     *
     * @param \Doctrine\Common\Persistence\ObjectManager $em
     */
    public function load(ObjectManager $em)
    {
        $job_systems = new Job();
        $job_systems->setLineOBiz($em->merge($this->getReference('lob-systems')));
        $job_systems->setType('full-time');
        $job_systems->setCompany('Secura');
        $job_systems->setLogo('sensio-labs.gif');
        $job_systems->setUrl('http://www.sensiolabs.com/');
        $job_systems->setPosition('Contractor 2013-14');
        $job_systems->setLocation('EPP Client');
        $job_systems->setDescription('xx.');
        $job_systems->setHowToApply('Send your resume to fabien.potencier [at] sensio.com');
        $job_systems->setIsPublic(true);
        $job_systems->setIsActivated(true);
        $job_systems->setToken('job_systems');
        $job_systems->setEmail('job@example.com');
        $job_systems->setExpiresAt(new \DateTime('2014-09-01'));
        $job_systems->setCreatedAt(new \DateTime('2014-04-11'));

        $job_applications = new Job();
        $job_applications->setLineOBiz($em->merge($this->getReference('lob-applications')));
        $job_applications->setType('part-time');
        $job_applications->setCompany('Acordex');
        $job_applications->setLogo('extreme-sensio.gif');
        $job_applications->setUrl('http://www.extreme-sensio.com/');
        $job_applications->setPosition('Contractor 2012-13');
        $job_applications->setLocation('Browser Plugin');
        $job_applications->setDescription('Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in.');
        $job_applications->setHowToApply('Send your resume to fabien.potencier [at] sensio.com');
        $job_applications->setIsPublic(true);
        $job_applications->setIsActivated(true);
        $job_applications->setToken('job_applications');
        $job_applications->setEmail('job@example.com');
        $job_applications->setExpiresAt(new \DateTime('2014-09-10'));
        $job_applications->setCreatedAt(new \DateTime('2014-04-01'));

        $job_mobile = new Job();
        $job_mobile->setLineOBiz($em->merge($this->getReference('lob-mobile')));
        $job_mobile->setType('part-time');
        $job_mobile->setCompany('Course Smart/PTI');
        $job_mobile->setLogo('extreme-sensio.gif');
        $job_mobile->setUrl('http://www.extreme-sensio.com/');
        $job_mobile->setPosition('Subcontractor 2011');
        $job_mobile->setLocation('iOS->Android,New Features');
        $job_mobile->setDescription('Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in.');
        $job_mobile->setHowToApply('Send your resume to fabien.potencier [at] sensio.com');
        $job_mobile->setIsPublic(true);
        $job_mobile->setIsActivated(true);
        $job_mobile->setToken('job_mobile');
        $job_mobile->setEmail('job@example.com');
        $job_mobile->setExpiresAt(new \DateTime('2014-09-10'));
        $job_mobile->setCreatedAt(new \DateTime('2014-04-01'));
        
        $job_frontend = new Job();
        $job_frontend->setLineOBiz($em->merge($this->getReference('lob-frontend')));
        $job_frontend->setType('full-time');
        $job_frontend->setCompany('Real Estate MLS');
        $job_frontend->setLogo('sensio-labs.gif');
        $job_frontend->setUrl('http://www.sensiolabs.com/');
        $job_frontend->setPosition('Contractor 2014');
        $job_frontend->setLocation('New FE for Cold Fusion App');
        $job_frontend->setDescription('Lorem ipsum dolor sit amet, consectetur adipisicing elit.');
        $job_frontend->setHowToApply('Send your resume to lorem.ipsum [at] dolor.sit');
        $job_frontend->setIsPublic(true);
        $job_frontend->setIsActivated(true);
        $job_frontend->setToken('job_frontend');
        $job_frontend->setEmail('job@example.com');
        $job_frontend->setCreatedAt(new \DateTime('2014-04-01'));
        $job_frontend->setExpiresAt(new \DateTime('2014-09-10'));

        $em->persist($job_applications);
        $em->persist($job_frontend);
        $em->persist($job_systems);
        $em->persist($job_mobile);

        //for($i = 100; $i < 130; $i++)
        	if (0)
        {
            $job = new Job();
            $job->setLineOBiz($em->merge($this->getReference('lob-programming')));
            $job->setType('full-time');
            $job->setCompany('Company '.$i);
            $job->setPosition('Web Developer');
            $job->setLocation('Paris, France');
            $job->setDescription('Lorem ipsum dolor sit amet, consectetur adipisicing elit.');
            $job->setHowToApply('Send your resume to lorem.ipsum [at] dolor.sit');
            $job->setIsPublic(true);
            $job->setIsActivated(true);
            $job->setToken('job_'.$i);
            $job->setEmail('job@example.com');
            $job->setCreatedAt(new \DateTime('2014-04-01'));
            $job->setExpiresAt(new \DateTime('2014-09-10'));

            $em->persist($job);
        }

        $em->flush();
    }
    /**
     * the order in which fixtures will be loaded
     * @return int
     */
    public function getOrder()
    {
        return 2;
    }
}
