<?php

namespace Akrp\JobeetBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Akrp\JobeetBundle\Entity\LineOBiz;
/**
 * LineOBiz controller
 *
 * User: imerayo
 * Date: 8/9/12
 * Time: 1:22 PM
 * To change this template use File | Settings | File Templates.
 */
class LineOBizController extends Controller
{
    /**
     * @param $slug
     * @param $page
     * @return \Symfony\Component\HttpFoundation\Response
     * @throws \Symfony\Component\HttpKernel\Exception\NotFoundHttpException
     */
    public function showAction($slug, $page)
    {
        $em = $this->getDoctrine()->getManager();

        $lob = $em->getRepository('AkrpJobeetBundle:LineOBiz')->findOneBySlug($slug);

        if (!$lob) {
            throw $this->createNotFoundException('Unable to find LineOBiz entity.');
        }
        $total_jobs = $em->getRepository('AkrpJobeetBundle:Job')->countActiveJobs($lob->getId());
        $jobs_per_page = $this->container->getParameter('max_jobs_on_lob');
        $last_page = ceil($total_jobs / $jobs_per_page);
        $previous_page = $page > 1 ? $page - 1 : 1;
        $next_page = $page < $last_page ? $page + 1 : $last_page;
        $lob->setActiveJobs($em->getRepository('AkrpJobeetBundle:Job')->getActiveJobs($lob->getId(), $jobs_per_page, ($page - 1) * $jobs_per_page ));
        $format = $this->getRequest()->getRequestFormat();

        return $this->render('AkrpJobeetBundle:LineOBiz:show.' . $format . '.twig', array(
            'lob' => $lob,
            'last_page' => $last_page,
            'previous_page' => $previous_page,
            'current_page' => $page,
            'next_page' => $next_page,
            'total_jobs' => $total_jobs,
            'feedId' => sha1($this->get('router')
                            ->generate('AkrpJobeetBundle_lob',
                                    array('slug' =>  $lob->getSlug(),
                                        '_format' => 'atom'), true)),
        ));
    }

}
