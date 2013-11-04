<?php

namespace Lapaillasse\CampaignBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Lapaillasse\CampaignBundle\Entity\Campaign;
use Lapaillasse\CampaignBundle\Entity\UserOptionsForCampaign;
use Symfony\Component\HttpFoundation\Request;

class DefaultController extends Controller
{
    public function indexAction()
    {
        $repository = $this->getDoctrine()
            ->getRepository('LapaillasseCampaignBundle:Campaign');

        // Récupérer toutes les campagnes
        $campaigns = $repository->findAll();

        return $this->render('LapaillasseCampaignBundle:Front:index.html.twig',array(
            'campaigns' => $campaigns,
        ));
    }

    public function mapAction()
    {
        return $this->render('LapaillasseCampaignBundle:Front:map.html.twig');
    }

    public function newCampaignAction(Request $request)
    {
    	// Crée la campagne
        $campaign = new Campaign();

        $form = $this->createFormBuilder($campaign)
            ->add('name', 'text')
            ->add('description', 'textarea')
            ->add('creator', 'hidden', array(
                 'data' => $this->container->get('security.context')->getToken()->getUser()->getId()
                ))
            ->add('optionalfield', 'text')
            ->getForm();

        // Soumision et validation du formulaire
        $form->handleRequest($request);

        if ($form->isValid()) {
            // Sauvegarder la campagne dans la bdd            
            $campaign->setCreated(new \Datetime());
            $em = $this->getDoctrine()->getManager();

            $em->persist($campaign);
            $em->flush();

            //return $this->redirect($this->generateUrl('task_success'));
        }

    	return $this->render('LapaillasseCampaignBundle:Front:newCampaign.html.twig', array(
            'form' => $form->createView(),
        ));
    }

    public function mapCampaignViewAction($id){
        $repository = $this->getDoctrine()
            ->getRepository('LapaillasseCampaignBundle:Campaign');

        $campaign = $repository->find($id);

        return $this->render('LapaillasseCampaignBundle:Front:mapCampaignView.html.twig', array(
            'campaign' => $campaign
        ));
    }

    public function campaignJoinAction($id){
        $repository = $this->getDoctrine()
            ->getRepository('LapaillasseCampaignBundle:Campaign');

        $campaign = $repository->find($id);

        // Crée l'objet d'option de campagne
        $UserOptionsForCampaign = new UserOptionsForCampaign();

        $form = $this->createFormBuilder($UserOptionsForCampaign)
            ->add('user_options', 'text')
            ->getForm();
            
        return $this->render('LapaillasseCampaignBundle:Front:campaignJoin.html.twig', array(
            'form' => $form->createView(),
            'campaign' => $campaign
        ));
    }
}
