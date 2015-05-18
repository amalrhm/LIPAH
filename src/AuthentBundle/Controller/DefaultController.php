<?php

namespace AuthentBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Route;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Template;

class DefaultController extends Controller
{
    /**
     * @Route("/")
     * @Template()
     */
    public function indexAction()
    {
        return array();
    }
    public function showAction() {
        $users = $this->getDoctrine()
            ->getRepository('UserBundle:User')
            ->findAll();
      if (!$users) {
        throw $this->createNotFoundException('No users found');
      }
  
      $build['users'] = $users;
      return $this->render('AuthentBundle:Default:index.html.twig', $build);
    }
}
