<?php

namespace GSB\GestionStatistiqueBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Symfony\Bundle\GSBGestionStatistiqueBundle\Travailler;
use Symfony\Component\HttpFoundation\Response;

class DefaultController extends Controller
{
    public function indexAction()
    {
        return $this->render('GSBGestionStatistiqueBundle:Default:accueil.html.twig');
    }

	public function afficherDelAction()
	{

		$repository = $this
  			->getDoctrine()
  			->getManager()
  			->getRepository('GSBGestionStatistiqueBundle:Visiteur');

		$listVisiteur = $repository->findAll();

		return $this->render('GSBGestionStatistiqueBundle:Default:delegue.html.twig',array('liste',$listVisiteur));
	}

    public function afficherStatRegionAction()
    {
        $lesRegions = $this->getDoctrine()->getManager()->getRepository('GSBGestionStatistiqueBundle:Region')->findAll();
        $inc = 0;
        $nbsVisiteurs = array();
        $nbsDelegues = array();
        foreach ($lesRegions as $reg)
        {
            var_dump($reg->getId());
            $nbsVisiteurs[$inc] = Travailler::getNbVisiteursRegion($reg->getId());
            $nbsDelegues[$inc] = Travailler::getNbDeleguesRegion($reg->getId());
            $inc ++;
        }
        $this->render('GSBGestionStatistiqueBundle:Default:regions.html.twig', array('lesRegions'=>$lesRegions, 'lesNombresDeVisiteurs'=>$nbsVisiteurs, 'lesNombresDeDelegues'=>$nbsDelegues));
    }

    public function afficherStatSecteurAction()
    {
        $rep = $this->getDoctrine()->getManager()->getRepository('GSBGestionStatistiqueBundle:Secteur');
		$lesSecteurs = $rep->findAll();
        $nbsVisiteurs = array();
        return $this->render('GSBGestionStatistiqueBundle:Default:secteur.html.twig', array('lesSecteurs'=>$lesSecteurs));
    }

    public function afficherVisiteursRegionAction($idRegion)
    {
        $lesVisiteurs = Travailler::getVisiteursRegion($idRegion);
        return $this->render('GSBGestionStatistiqueBundle:Default:region.html.twig', array('lesVisiteurs'=>$lesVisiteurs));
    }

    public function pageConnexionAction()
    {
        return $this->render('GSBGestionStatistiqueBundle:Default:connexion.html.twig');
    }

    public function pageCreationAction()
    {
        return $this->render('GSBGestionStatistiqueBundle:Default:creation.html.twig');
    }
}
