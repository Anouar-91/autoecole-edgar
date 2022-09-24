<?php

namespace App\Controller\front;

use Symfony\Component\Mime\Email;
use Symfony\Component\Mime\Address;
use Symfony\Component\Mailer\Mailer;
use Symfony\Bridge\Twig\Mime\TemplatedEmail;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\Mailer\MailerInterface;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;

class PageController extends AbstractController
{
    /**
     * @Route("/", name="home")
     */
    public function index(): Response
    {
        return $this->render('front/pages/index.html.twig', [
        ]);
    }
    /**
     * @Route("/permis-b", name="permis-b")
     */
    public function permisB(): Response
    {
        return $this->render('front/pages/permis_b.html.twig', [
        ]);
    }
    /**
     * @Route("/conduite-accompagnee", name="conduite-accompagnee")
     */
    public function conduiteAccompagnee(): Response
    {
        return $this->render('front/pages/conduite_accompagnee.html.twig', [
        ]);
    }
    
    /**
     * @Route("/permis-accelere", name="permis-accelere")
     */
    public function permisAccelere(): Response
    {
        return $this->render('front/pages/permis_accelere.html.twig', [
        ]);
    }
    
    /**
     * @Route("/conduite-supervisee", name="conduite-supervisee")
     */
    public function conduiteSupervisee(): Response
    {
        return $this->render('front/pages/conduite_supervisee.html.twig', [
        ]);
    }
    
    /**
     * @Route("/perfectionnement", name="perfectionnement")
     */
    public function perfectionnement(): Response
    {
        return $this->render('front/pages/perfectionnement.html.twig', [
        ]);
    }
    
    
    /**
     * @Route("/permis-boite-auto", name="permis-boite-auto")
     */
    public function permisBoiteAuto(): Response
    {
        return $this->render('front/pages/permis_boite_auto.html.twig', [
        ]);
    }
    
    
    /**
     * @Route("/permis-am", name="permis-am")
     */
    public function permisAm(): Response
    {
        return $this->render('front/pages/permis_am.html.twig', [
        ]);
    }
    /**
     * @Route("/permis-a2", name="permis-a2")
     */
    public function permisA2(): Response
    {
        return $this->render('front/pages/permis_a2.html.twig', [
        ]);
    }

    /**
     * @Route("/formation125", name="formation125")
     */
    public function formation125(): Response
    {
        return $this->render('front/pages/formation125.html.twig', [
        ]);
    }
    
    /**
     * @Route("/stages-intensifs", name="stages-intensifs")
     */
    public function stagesIntensifs(): Response
    {
        return $this->render('front/pages/stages_intensifs.html.twig', [
        ]);
    }
    
    /**
     * @Route("/annulation", name="annulation")
     */
    public function annulation(): Response
    {
        return $this->render('front/pages/annulation.html.twig', [
        ]);
    }
    
    
    /**
     * @Route("/les-differents-permis", name="les-differents-permis")
     */
    public function differentPermis(): Response
    {
        return $this->render('front/pages/les_differents_permis.html.twig', [
        ]);
    }
    
    
    /**
     * @Route("/handicap-info", name="handicap-info")
     */
    public function handicapInfo(): Response
    {
        return $this->render('front/pages/handicap_info.html.twig', [
        ]);
    }
    
    /**
     * @Route("/les-enjeux-de-la-formation", name="enjeux-formation")
     */
    public function enjeuxFormation(): Response
    {
        return $this->render('front/pages/enjeux_formation.html.twig', [
        ]);
    }
    
    /**
     * @Route("/nos-engagements", name="nos-engagements")
     */
    public function nosEngagements(): Response
    {
        return $this->render('front/pages/nos_engagements.html.twig', [
        ]);
    }
    /**
     * @Route("/reglement-interieur", name="reglement-interieur")
     */
    public function reglementInterieur(): Response
    {
        return $this->render('front/pages/reglement_interieur.html.twig', [
        ]);
    }
    /**
     * @Route("/parcours-de-formation", name="parcours-de-formation")
     */
    public function parcoursFormation(): Response
    {
        return $this->render('front/pages/parcours_de_formation.html.twig', [
        ]);
    }
    
    /**
     * @Route("/programme-de-formation", name="programme-de-formation")
     */
    public function programmeFormation(): Response
    {
        return $this->render('front/pages/programme_de_formation.html.twig', [
        ]);
    }
    

} 