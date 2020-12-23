<?php

namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\Dotenv\Dotenv;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;

/**
 * @Route("/recruteur", name="recr_")
 */
class recruteurController extends AbstractController
{
    /**
     * @Route("/creer-une-opportunite", name="create_offer")
     */
    public function createOffer(): Response
    {
        return $this->render('recruteur/create-opportunitie.html.twig');
    }
    /**
     * @Route("/opportunites", name="offers")
     */
    public function Offer(): Response
    {
        return $this->render('recruteur/mesoffres.html.twig');
    }
    /**
     * @Route("/profil", name="profil")
     */
    public function profil(): Response
    {
        return $this->render('recruteur/profilrecruteurs.html.twig');
    }
    /**
     * @Route("/recherche", name="search")
     */
    public function search(): Response
    {
        return $this->render('recruteur/rechercheprofil.html.twig');
    }
    /**
     * @Route("/soumissions", name="soumissions")
     */
    public function soumissions(): Response
    {
        return $this->render('recruteur/soumissionslist.html.twig');
    }


    /**
     * @Route("/", name="index")
     */
    public function index(): Response
    {
        return $this->render('recruteur/index.html.twig');
    }
    /**
     * @Route("/a-propos", name="about")
     */
    public function about(): Response
    {
        return $this->render('recruteur/about.html.twig');
    }
    /**
     * @Route("/actualites", name="news")
     */
    public function news(): Response
    {
        return $this->render('recruteur/actualites.html.twig');
    }
    /**
     * @Route("/article", name="article")
     */
    public function article(): Response
    {
        return $this->render('recruteur/article.html.twig');
    }
    /**
     * @Route("/contact", name="contact")
     */
    public function contact(): Response
    {
        return $this->render('recruteur/contact.html.twig');
    }
    /**
     * @Route("/emplois", name="emplois")
     */
    public function emplois(): Response
    {
        return $this->render('recruteur/emplois.html.twig');
    }

    /**
     * @Route("/faq", name="faq")
     */
    public function faq(): Response
    {
        return $this->render('recruteur/faq.html.twig');
    }

    /**
     * @Route("/galerie", name="galerie")
     */
    public function galerie(): Response
    {
        return $this->render('recruteur/galery.html.twig');
    }
    /**
     * @Route("/opportunite", name="offer")
     */
    public function offeritem(): Response
    {
        return $this->render('recruteur/opportunitesitem.html.twig');
    }
    /**
     * @Route("/partenaires", name="partenaire")
     */
    public function partenaire(): Response
    {
        return $this->render('recruteur/partenaires.html.twig');
    }
    /**
     * @Route("/podcast-employabilite", name="podcast")
     */
    public function podcast(): Response
    {
        return $this->render('recruteur/podcast.html.twig');
    }
    /**
     * @Route("/publications", name="publication")
     */
    public function publication(): Response
    {
        return $this->render('recruteur/publications.html.twig');
    }
    /**
     * @Route("/stages", name="stages")
     */
    public function stages(): Response
    {
        return $this->render('recruteur/stages.html.twig');
    }
    /**
     * @Route("/trucs-et-astuces", name="trucs")
     */
    public function trucs(): Response
    {
        return $this->render('recruteur/trucs.html.twig');
    }

}
