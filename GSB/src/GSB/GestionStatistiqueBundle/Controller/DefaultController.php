<?php

namespace GSB\GestionStatistiqueBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Symfony\Bundle\GSBGestionStatistique\Travailler;

class DefaultController extends Controller
{
    public function indexAction()
    {
        return $this->render('GSBGestionStatistiqueBundle:Default:accueil.html.twig');
    }

	public function afficherDelAction()
	{
		return $this->render('GSBGestionStatistiqueBundle:Default:delegue.html.twig');
	}

    public function afficherStatRegionAction()
    {
        $lesRegions = $this->getDoctrine()->getManager()->getRepository('GSBGestionStatistiqueBundle:Region');
        $inc = 0;
        $nbsVisiteurs = array();
        $nbsDelegues = array();
        foreach ($lesRegions as $reg)
        {
            $nbsVisiteurs[$inc] = Travailler::getVisiteursRegion($reg->getCodeReg());
            $nbsDelegues[inc] = Travailler::getDeleguesRegion($reg->getCodeReg());
            $inc ++;
        }
        return $this->render('GSBGestionStatistiqueBundle:Default:regions.html.twig', array('lesRegions'=>$lesRegions, 'lesNombresDeVisiteurs'=>$nbsVisiteurs, 'lesNombresDeDelegues'=>$nbsDelegues));
    }

    public function afficherStatSecteurAction()
    {
        return $this->render('GSBGestionStatistiqueBundle:Default:secteur.html.twig');
    }
}
