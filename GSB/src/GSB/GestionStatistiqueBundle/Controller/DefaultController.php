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
		$listVisiteur = $repository->getDepartement();

		var_dump($listVisiteur);

		return $this->render('GSBGestionStatistiqueBundle:Default:delegue.html.twig',array('liste'=>$listVisiteur));
	}

    public function afficherStatRegionAction()
    {
        $lesRegions = $this->getDoctrine()->getManager()->getRepository('GSBGestionStatistiqueBundle:Region')->findAll();
        $inc = 0;
        $nbsVisiteurs = array();
        $nbsDelegues = array();
        foreach ($lesRegions as $reg)
        {
            $repository = $this->getDoctrine()->getRepository('GSBGestionStatistiqueBundle:Travailler');
            $nbsVisiteurs[$inc] = $repository->getNombreVisiteursDeLaRegion($reg->getId());
            $nbsDelegues[$inc] = $repository->getNombreDeleguesDeLaRegion($reg->getId());
            $inc ++;
        }
        return $this->render('GSBGestionStatistiqueBundle:Default:regions.html.twig', array('lesRegions'=>$lesRegions, 'lesNombresDeVisiteurs'=>$nbsVisiteurs, 'lesNombresDeDelegues'=>$nbsDelegues));
    }

    public function afficherStatSecteurAction()
    {
        $visiteursParSecteur = array();
        $repository = $this->getDoctrine()->getManager()->getRepository('GSBGestionStatistiqueBundle:Secteur');
        $visiteursParSecteur = $repository->getNbVisiteurs();
        return $this->render('GSBGestionStatistiqueBundle:Default:secteur.html.twig', array('lesSecteurs'=>$lesSecteurs, 'visiteursParSecteur'=>$visiteursParSecteur));
    }

    public function afficherVisiteursRegionAction($idReg)
    {
        $repository = $this->getDoctrine()->getRepository('GSBGestionStatistiqueBundle:Travailler');
        $lesVisiteurs = $repository->getVisiteursDeLaRegion($idReg);
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
