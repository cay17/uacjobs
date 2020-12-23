<?php

namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\Dotenv\Dotenv;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;

/**
 * @Route("/etudiant", name="etu_")
 */
class etudiantController extends AbstractController
{
    /**
     * @Route("/editer-mon-cv", name="edit_cv")
     */
    public function editcv(): Response
    {
        return $this->render('student/editcv.html.twig');
    }
    /**
     * @Route("/cv", name="cv")
     */
    public function cv(): Response
    {
        return $this->render('student/cv.html.twig');
    }
    /**
     * @Route("/mes-soumissions", name="soumissions")
     */
    public function soumissions(): Response
    {
        return $this->render('student/messoumissions.html.twig');
    }
    /**
     * @Route("/profil", name="profil")
     */
    public function profil(): Response
    {
        return $this->render('student/profil.html.twig');
    }


    /**
     * @Route("/", name="index")
     */
    public function index(): Response
    {
        return $this->render('student/index.html.twig');
    }
    /**
     * @Route("/a-propos", name="about")
     */
    public function about(): Response
    {
        return $this->render('student/about.html.twig');
    }
    /**
     * @Route("/actualites", name="news")
     */
    public function news(): Response
    {
        return $this->render('student/actualites.html.twig');
    }
    /**
     * @Route("/article", name="article")
     */
    public function article(): Response
    {
        return $this->render('student/article.html.twig');
    }
    /**
     * @Route("/contact", name="contact")
     */
    public function contact(): Response
    {
        return $this->render('student/contact.html.twig');
    }
    /**
     * @Route("/emplois", name="emplois")
     */
    public function emplois(): Response
    {
        return $this->render('student/emplois.html.twig');
    }

    /**
     * @Route("/faq", name="faq")
     */
    public function faq(): Response
    {
        return $this->render('student/faq.html.twig');
    }

    /**
     * @Route("/galerie", name="galerie")
     */
    public function galerie(): Response
    {
        return $this->render('student/galery.html.twig');
    }
    /**
     * @Route("/opportunite", name="offer")
     */
    public function offeritem(): Response
    {
        return $this->render('student/opportunitesitem.html.twig');
    }
    /**
     * @Route("/partenaires", name="partenaire")
     */
    public function partenaire(): Response
    {
        return $this->render('student/partenaires.html.twig');
    }
    /**
     * @Route("/podcast-employabilite", name="podcast")
     */
    public function podcast(): Response
    {
        return $this->render('student/podcast.html.twig');
    }
    /**
     * @Route("/publications", name="publication")
     */
    public function publication(): Response
    {
        return $this->render('student/publications.html.twig');
    }
    /**
     * @Route("/stages", name="stages")
     */
    public function stages(): Response
    {
        return $this->render('student/stages.html.twig');
    }
    /**
     * @Route("/trucs-et-astuces", name="trucs")
     */
    public function trucs(): Response
    {
        return $this->render('student/trucs.html.twig');
    }
    /**
     * @Route("/rechercher", name="search")
     */
    public function search(): Response
    {
        return $this->render('student/rechercher.html.twig');
    }
}
