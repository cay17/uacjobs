<?php

namespace App\Controller;

use App\Entity\Users;
use App\Form\RegistrationFormType;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\Dotenv\Dotenv;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;

/**
 * @Route("/backend", name="cms_")
 */
class cmsController extends AbstractController
{
    /**
     * @Route("/", name="index")
     */
    public function index(): Response
    {
        return $this->render('cms/index.html.twig');
    }
    /**
     * @Route("/articles", name="article")
     */
    public function articles(): Response
    {
        return $this->render('cms/articles.html.twig');
    }
    /**
     * @Route("/news", name="news")
     */
    public function news(): Response
    {
        return $this->render('cms/news.html.twig');
    }
    /**
     * @Route("/ajouter-un-article", name="add_article")
     * @Route("/editer-un-article", name="edit_article")
     */
    public function article(): Response
    {
        return $this->render('cms/edit_article.html.twig');
    }


    /**
     * @Route("/ajouter-un-podcast", name="add_podcast")
     * @Route("/editer-un-podcast", name="edit_podcast")
     */
    public function edit_podcast(): Response
    {
        return $this->render('cms/edit_podcast.html.twig');
    }
    /**
     * @Route("/podcast", name="podcast")
     */
    public function podcast(): Response
    {
        return $this->render('cms/podcast.html.twig');
    }


    /**
     * @Route("/messages", name="messages")
     */
    public function messages(): Response
    {
        return $this->render('cms/message.html.twig');
    }
    /**
     * @Route("/messages/repondre-au-message", name="reply")
     */
    public function reply(): Response
    {
        return $this->render('cms/reply_to_message.html.twig');
    }


    /**
     * @Route("/faq", name="faq")
     */
    public function faq(): Response
    {
        return $this->render('cms/faq.html.twig');
    }
    /**
     * @Route("/ajouter-une-question", name="add_faq")
     * @Route("/editer-une-question", name="edit_faq")
     */
    public function edit_faq(): Response
    {
        return $this->render('cms/edit_faq.html.twig');
    }


    /**
     * @Route("/categorie-de-questions", name="categorie")
     */
    public function categorie(): Response
    {
        return $this->render('cms/categorie.html.twig');
    }
    /**
     * @Route("/ajouter-une-categorie", name="add_categorie")
     * @Route("/editer-une-categorie", name="edit_categorie")
     */
    public function edit_categorie(): Response
    {
        return $this->render('cms/edit_categorie.html.twig');
    }

    /**
     * @Route("/galerie", name="galerie")
     */
    public function galery(): Response
    {
        return $this->render('cms/galery.html.twig');
    }

    /**
     * @Route("/partenaires", name="partenaires")
     */
    public function partenaires(): Response
    {
        return $this->render('cms/patenaire.html.twig');
    }
    /**
     * @Route("/ajouter-un-partenaire", name="add_partenaire")
     * @Route("/editer-un-partenaire", name="edit_partenaire")
     */
    public function edit_partenaire(): Response
    {
        return $this->render('cms/edit_partenaire.html.twig');
    }

    /**
     * @Route("/comptes", name="comptes")
     */
    public function comptes(): Response
    {
        return $this->render('cms/users_accounts.html.twig');
    }

    /**
     * @Route("/newsletter", name="newsletter")
     */
    public function newsletter(): Response
    {
        return $this->render('cms/newsletter.html.twig');
    }
    /**
     * @Route("/envoyer-un-message", name="create_newsletter")
     */
    public function create_newsletter(): Response
    {
        return $this->render('cms/create_newsletter.html.twig');
    }


    /**
     * @Route("/ajouter-un-compte", name="add_account")
     * @Route("/editer-un-compte", name="edit_account")
     */
    public function edit_account(Request $request): Response
    {
        $user = new Users();
        $form = $this->createForm(RegistrationFormType::class, $user);
        $form->handleRequest($request);
        return $this->render('cms/edit_account.html.twig', [
            'registrationForm' => $form->createView(),
        ]);
    }



    /**
     * @Route("/opportunites", name="opportunites")
     */
    public function opportunitie(): Response
    {
        return $this->render('cms/opportunities.html.twig');
    }
    /**
     * @Route("/ajouter-une-opportunite", name="add_offer")
     * @Route("/editer-une-opportunite", name="edit_offer")
     */
    public function edit_opportunities(Request $request): Response
    {
        return $this->render('cms/edit_opportunities.html.twig');
    }
}
