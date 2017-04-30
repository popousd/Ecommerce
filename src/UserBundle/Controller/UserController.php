<?php

namespace UserBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Route;

class UserController extends Controller
{
    /**
     * @Route("/register")
     */
    public function addAction()
    {
        return $this->render('UserBundle:User:register.html.twig', array(
            // ...
        ));
    }

    /**
     * @Route("/delete-user")
     */
    public function deleteAction()
    {
        return $this->render('UserBundle:User:delete.html.twig', array(
            // ...
        ));
    }

    /**
     * @Route("/connect")
     */
    public function connectAction()
    {
        return $this->render('UserBundle:User:layout.html.twig', array(
            // ...
        ));
    }

}
