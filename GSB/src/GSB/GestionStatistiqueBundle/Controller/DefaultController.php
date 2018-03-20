<?php

namespace GSB\GestionStatistiqueBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;

class DefaultController extends Controller
{
    public function indexAction()
    {
        return $this->render('GSBGestionStatistiqueBundle:Default:menu.html.twig');
    }
	public function affichagerStatAction()
	{
		return $this->render('GSBGestionStatistiqueBundle:Default:statistiques.html.twig');
	}
}
