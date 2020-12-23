<?php

namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\Dotenv\Dotenv;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;

class frontController extends AbstractController
{
    /**
     * @Route("/", name="index")
     */
    public function index(): Response
    {
        return $this->render('front/index.html.twig');
    }
    /**
     * @Route("/a-propos", name="about")
     */
    public function about(): Response
    {
        return $this->render('front/about.html.twig');
    }
    /**
     * @Route("/actualites", name="news")
     */
    public function news(): Response
    {
        return $this->render('front/actualites.html.twig');
    }
    /**
     * @Route("/article", name="article")
     */
    public function article(): Response
    {
        return $this->render('front/article.html.twig');
    }
    /**
     * @Route("/connexion", name="login")
     */
    public function connexion(): Response
    {
        return $this->render('front/connexion.html.twig');
    }
    /**
     * @Route("/connexion-recruteurs", name="login_recruteur")
     */
    public function connexion_recruteur(): Response
    {
        return $this->render('front/connexionpartenaire.html.twig');
    }
    /**
     * @Route("/contact", name="contact")
     */
    public function contact(): Response
    {
        return $this->render('front/contact.html.twig');
    }
    /**
     * @Route("/emplois", name="emplois")
     */
    public function emplois(): Response
    {
        return $this->render('front/emplois.html.twig');
    }

    /**
     * @Route("/faq", name="faq")
     */
    public function faq(): Response
    {
        return $this->render('front/faq.html.twig');
    }

    /**
     * @Route("/galerie", name="galerie")
     */
    public function galerie(): Response
    {
        return $this->render('front/galery.html.twig');
    }
    /**
     * @Route("/opportunite", name="offer")
     */
    public function offer(): Response
    {
        return $this->render('front/opportunitesitem.html.twig');
    }
    /**
     * @Route("/partenaires", name="partenaire")
     */
    public function partenaire(): Response
    {
        return $this->render('front/partenaires.html.twig');
    }
    /**
     * @Route("/podcast-employabilite", name="podcast")
     */
    public function podcast(): Response
    {
        return $this->render('front/podcast.html.twig');
    }
    /**
     * @Route("/prev-connexion", name="prevcon")
     */
    public function prev_connexion(): Response
    {
        return $this->render('front/preconnexion.html.twig');
    }
    /**
     * @Route("/publications", name="publication")
     */
    public function publication(): Response
    {
        return $this->render('front/publications.html.twig');
    }
    /**
     * @Route("/stages", name="stages")
     */
    public function stages(): Response
    {
        return $this->render('front/stages.html.twig');
    }
    /**
     * @Route("/trucs-et-astuces", name="trucs")
     */
    public function trucs(): Response
    {
        return $this->render('front/trucs.html.twig');
    }

}
