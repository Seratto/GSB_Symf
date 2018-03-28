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

	public function afficherVisAction()
	{
		return $this->render('GSBGestionStatistiqueBundle:Default:visiteur.html.twig');
	}

    public function afficherStatRegionAction()
    {
        $lesRegions = $this->getDoctrine()->getManager()->getRepository('GSBGestionStatistiqueBundle:Region');
        $inc = 0;
        foreach ($lesRegions as $reg)
        {
            $nbsVisiteurs[$inc] = Travailler::getVisiteursRegion($reg->getCodeReg());
            $inc ++;
        }
        return $this->render('GSBGestionStatistiqueBundle:Default:regions.html.twig', array('lesRegions'=>$lesRegions, 'lesNombresDeVisiteurs'=>$nbsVisiteurs));
    }
}
