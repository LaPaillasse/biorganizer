<?php

namespace Lapaillasse\CampaignBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;

class DefaultController extends Controller
{
    public function indexAction()
    {
        return $this->render('LapaillasseCampaignBundle:Front:index.html.twig');
    }
}
