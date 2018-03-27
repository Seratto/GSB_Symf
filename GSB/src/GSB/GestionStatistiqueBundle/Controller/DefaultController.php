<?php

namespace GSB\GestionStatistiqueBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;

class DefaultController extends Controller
{
    public function indexAction()
    {
        return $this->render('GSBGestionStatistiqueBundle:Default:accueil.html.twig');
    }

	public function afficherStatAction()
	{
		return $this->render('GSBGestionStatistiqueBundle:Default:statistiquesReg.html.twig');
	}

	public function afficherVisAction()
	{
		return $this->render('GSBGestionStatistiqueBundle:Default:visiteur.html.twig');
	}

    public function afficherStatRegion()
    {
        $lesRegions = $this->getDoctrine()->getManager()->getRepository('GSBGestionStatistiqueBundle:Region');
        return $this->render('GSBGestionStatistiqueBundle:Default:regions.html.twig', array("regions"=>$lesRegions));
    }
}
