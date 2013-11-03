<?php

namespace Lapaillasse\UserBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;

class DefaultController extends Controller
{
    public function indexAction()
    {
        return $this->render('LapaillasseUserBundle:Default:index.html.twig');
    }
}
