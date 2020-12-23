<?php

/**
 * This file has been auto-generated
 * by the Symfony Routing Component.
 */

return [
    false, // $matchHost
    [ // $staticRoutes
        '/inscription/etudiant' => [[['_route' => 'app_register_etudiant', '_controller' => 'App\\Controller\\RegistrationController::register'], null, null, null, false, false, null]],
        '/inscription/recruteur' => [[['_route' => 'app_register_recruteur', '_controller' => 'App\\Controller\\RegistrationController::register2'], null, null, null, false, false, null]],
        '/backend/inscription/admin' => [[['_route' => 'app_register_admin', '_controller' => 'App\\Controller\\RegistrationController::register3'], null, null, null, false, false, null]],
        '/verify/email' => [[['_route' => 'app_verify_email', '_controller' => 'App\\Controller\\RegistrationController::verifyUserEmail'], null, null, null, false, false, null]],
        '/connexion' => [
            [['_route' => 'app_login', '_controller' => 'App\\Controller\\SecurityController::login'], null, null, null, false, false, null],
            [['_route' => 'login', '_controller' => 'App\\Controller\\frontController::connexion'], null, null, null, false, false, null],
        ],
        '/connexion/recruteur' => [[['_route' => 'app_login_recruteur', '_controller' => 'App\\Controller\\SecurityController::login'], null, null, null, false, false, null]],
        '/logout' => [[['_route' => 'app_logout', '_controller' => 'App\\Controller\\SecurityController::logout'], null, null, null, false, false, null]],
        '/backend' => [[['_route' => 'cms_index', '_controller' => 'App\\Controller\\cmsController::index'], null, null, null, true, false, null]],
        '/backend/articles' => [[['_route' => 'cms_article', '_controller' => 'App\\Controller\\cmsController::articles'], null, null, null, false, false, null]],
        '/backend/news' => [[['_route' => 'cms_news', '_controller' => 'App\\Controller\\cmsController::news'], null, null, null, false, false, null]],
        '/backend/ajouter-un-article' => [[['_route' => 'cms_add_article', '_controller' => 'App\\Controller\\cmsController::article'], null, null, null, false, false, null]],
        '/backend/editer-un-article' => [[['_route' => 'cms_edit_article', '_controller' => 'App\\Controller\\cmsController::article'], null, null, null, false, false, null]],
        '/backend/ajouter-un-podcast' => [[['_route' => 'cms_add_podcast', '_controller' => 'App\\Controller\\cmsController::edit_podcast'], null, null, null, false, false, null]],
        '/backend/editer-un-podcast' => [[['_route' => 'cms_edit_podcast', '_controller' => 'App\\Controller\\cmsController::edit_podcast'], null, null, null, false, false, null]],
        '/backend/podcast' => [[['_route' => 'cms_podcast', '_controller' => 'App\\Controller\\cmsController::podcast'], null, null, null, false, false, null]],
        '/backend/messages' => [[['_route' => 'cms_messages', '_controller' => 'App\\Controller\\cmsController::messages'], null, null, null, false, false, null]],
        '/backend/messages/repondre-au-message' => [[['_route' => 'cms_reply', '_controller' => 'App\\Controller\\cmsController::reply'], null, null, null, false, false, null]],
        '/backend/faq' => [[['_route' => 'cms_faq', '_controller' => 'App\\Controller\\cmsController::faq'], null, null, null, false, false, null]],
        '/backend/ajouter-une-question' => [[['_route' => 'cms_add_faq', '_controller' => 'App\\Controller\\cmsController::edit_faq'], null, null, null, false, false, null]],
        '/backend/editer-une-question' => [[['_route' => 'cms_edit_faq', '_controller' => 'App\\Controller\\cmsController::edit_faq'], null, null, null, false, false, null]],
        '/backend/categorie-de-questions' => [[['_route' => 'cms_categorie', '_controller' => 'App\\Controller\\cmsController::categorie'], null, null, null, false, false, null]],
        '/backend/ajouter-une-categorie' => [[['_route' => 'cms_add_categorie', '_controller' => 'App\\Controller\\cmsController::edit_categorie'], null, null, null, false, false, null]],
        '/backend/editer-une-categorie' => [[['_route' => 'cms_edit_categorie', '_controller' => 'App\\Controller\\cmsController::edit_categorie'], null, null, null, false, false, null]],
        '/backend/galerie' => [[['_route' => 'cms_galerie', '_controller' => 'App\\Controller\\cmsController::galery'], null, null, null, false, false, null]],
        '/backend/partenaires' => [[['_route' => 'cms_partenaires', '_controller' => 'App\\Controller\\cmsController::partenaires'], null, null, null, false, false, null]],
        '/backend/ajouter-un-partenaire' => [[['_route' => 'cms_add_partenaire', '_controller' => 'App\\Controller\\cmsController::edit_partenaire'], null, null, null, false, false, null]],
        '/backend/editer-un-partenaire' => [[['_route' => 'cms_edit_partenaire', '_controller' => 'App\\Controller\\cmsController::edit_partenaire'], null, null, null, false, false, null]],
        '/backend/comptes' => [[['_route' => 'cms_comptes', '_controller' => 'App\\Controller\\cmsController::comptes'], null, null, null, false, false, null]],
        '/backend/newsletter' => [[['_route' => 'cms_newsletter', '_controller' => 'App\\Controller\\cmsController::newsletter'], null, null, null, false, false, null]],
        '/backend/envoyer-un-message' => [[['_route' => 'cms_create_newsletter', '_controller' => 'App\\Controller\\cmsController::create_newsletter'], null, null, null, false, false, null]],
        '/backend/ajouter-un-compte' => [[['_route' => 'cms_add_account', '_controller' => 'App\\Controller\\cmsController::edit_account'], null, null, null, false, false, null]],
        '/backend/editer-un-compte' => [[['_route' => 'cms_edit_account', '_controller' => 'App\\Controller\\cmsController::edit_account'], null, null, null, false, false, null]],
        '/backend/opportunites' => [[['_route' => 'cms_opportunites', '_controller' => 'App\\Controller\\cmsController::opportunitie'], null, null, null, false, false, null]],
        '/backend/ajouter-une-opportunite' => [[['_route' => 'cms_add_offer', '_controller' => 'App\\Controller\\cmsController::edit_opportunities'], null, null, null, false, false, null]],
        '/backend/editer-une-opportunite' => [[['_route' => 'cms_edit_offer', '_controller' => 'App\\Controller\\cmsController::edit_opportunities'], null, null, null, false, false, null]],
        '/etudiant/editer-mon-cv' => [[['_route' => 'etu_edit_cv', '_controller' => 'App\\Controller\\etudiantController::editcv'], null, null, null, false, false, null]],
        '/etudiant/mes-soumissions' => [[['_route' => 'etu_soumissions', '_controller' => 'App\\Controller\\etudiantController::soumissions'], null, null, null, false, false, null]],
        '/etudiant/profil' => [[['_route' => 'etu_profil', '_controller' => 'App\\Controller\\etudiantController::profil'], null, null, null, false, false, null]],
        '/etudiant' => [[['_route' => 'etu_index', '_controller' => 'App\\Controller\\etudiantController::index'], null, null, null, true, false, null]],
        '/etudiant/a-propos' => [[['_route' => 'etu_about', '_controller' => 'App\\Controller\\etudiantController::about'], null, null, null, false, false, null]],
        '/etudiant/actualites' => [[['_route' => 'etu_news', '_controller' => 'App\\Controller\\etudiantController::news'], null, null, null, false, false, null]],
        '/etudiant/article' => [[['_route' => 'etu_article', '_controller' => 'App\\Controller\\etudiantController::article'], null, null, null, false, false, null]],
        '/etudiant/contact' => [[['_route' => 'etu_contact', '_controller' => 'App\\Controller\\etudiantController::contact'], null, null, null, false, false, null]],
        '/etudiant/emplois' => [[['_route' => 'etu_emplois', '_controller' => 'App\\Controller\\etudiantController::emplois'], null, null, null, false, false, null]],
        '/etudiant/faq' => [[['_route' => 'etu_faq', '_controller' => 'App\\Controller\\etudiantController::faq'], null, null, null, false, false, null]],
        '/etudiant/galerie' => [[['_route' => 'etu_galerie', '_controller' => 'App\\Controller\\etudiantController::galerie'], null, null, null, false, false, null]],
        '/etudiant/opportunite' => [[['_route' => 'etu_offer', '_controller' => 'App\\Controller\\etudiantController::offeritem'], null, null, null, false, false, null]],
        '/etudiant/partenaires' => [[['_route' => 'etu_partenaire', '_controller' => 'App\\Controller\\etudiantController::partenaire'], null, null, null, false, false, null]],
        '/etudiant/podcast-employabilite' => [[['_route' => 'etu_podcast', '_controller' => 'App\\Controller\\etudiantController::podcast'], null, null, null, false, false, null]],
        '/etudiant/publications' => [[['_route' => 'etu_publication', '_controller' => 'App\\Controller\\etudiantController::publication'], null, null, null, false, false, null]],
        '/etudiant/stages' => [[['_route' => 'etu_stages', '_controller' => 'App\\Controller\\etudiantController::stages'], null, null, null, false, false, null]],
        '/etudiant/trucs-et-astuces' => [[['_route' => 'etu_trucs', '_controller' => 'App\\Controller\\etudiantController::trucs'], null, null, null, false, false, null]],
        '/etudiant/rechercher' => [[['_route' => 'etu_search', '_controller' => 'App\\Controller\\etudiantController::search'], null, null, null, false, false, null]],
        '/' => [[['_route' => 'index', '_controller' => 'App\\Controller\\frontController::index'], null, null, null, false, false, null]],
        '/a-propos' => [[['_route' => 'about', '_controller' => 'App\\Controller\\frontController::about'], null, null, null, false, false, null]],
        '/actualites' => [[['_route' => 'news', '_controller' => 'App\\Controller\\frontController::news'], null, null, null, false, false, null]],
        '/article' => [[['_route' => 'article', '_controller' => 'App\\Controller\\frontController::article'], null, null, null, false, false, null]],
        '/connexion-recruteurs' => [[['_route' => 'login_recruteur', '_controller' => 'App\\Controller\\frontController::connexion_recruteur'], null, null, null, false, false, null]],
        '/contact' => [[['_route' => 'contact', '_controller' => 'App\\Controller\\frontController::contact'], null, null, null, false, false, null]],
        '/emplois' => [[['_route' => 'emplois', '_controller' => 'App\\Controller\\frontController::emplois'], null, null, null, false, false, null]],
        '/faq' => [[['_route' => 'faq', '_controller' => 'App\\Controller\\frontController::faq'], null, null, null, false, false, null]],
        '/galerie' => [[['_route' => 'galerie', '_controller' => 'App\\Controller\\frontController::galerie'], null, null, null, false, false, null]],
        '/opportunite' => [[['_route' => 'offer', '_controller' => 'App\\Controller\\frontController::offer'], null, null, null, false, false, null]],
        '/partenaires' => [[['_route' => 'partenaire', '_controller' => 'App\\Controller\\frontController::partenaire'], null, null, null, false, false, null]],
        '/podcast-employabilite' => [[['_route' => 'podcast', '_controller' => 'App\\Controller\\frontController::podcast'], null, null, null, false, false, null]],
        '/prev-connexion' => [[['_route' => 'prevcon', '_controller' => 'App\\Controller\\frontController::prev_connexion'], null, null, null, false, false, null]],
        '/publications' => [[['_route' => 'publication', '_controller' => 'App\\Controller\\frontController::publication'], null, null, null, false, false, null]],
        '/stages' => [[['_route' => 'stages', '_controller' => 'App\\Controller\\frontController::stages'], null, null, null, false, false, null]],
        '/trucs-et-astuces' => [[['_route' => 'trucs', '_controller' => 'App\\Controller\\frontController::trucs'], null, null, null, false, false, null]],
        '/recruteur/creer-une-opportunite' => [[['_route' => 'recr_create_offer', '_controller' => 'App\\Controller\\recruteurController::createOffer'], null, null, null, false, false, null]],
        '/recruteur/opportunites' => [[['_route' => 'recr_offers', '_controller' => 'App\\Controller\\recruteurController::Offer'], null, null, null, false, false, null]],
        '/recruteur/profil' => [[['_route' => 'recr_profil', '_controller' => 'App\\Controller\\recruteurController::profil'], null, null, null, false, false, null]],
        '/recruteur/recherche' => [[['_route' => 'recr_search', '_controller' => 'App\\Controller\\recruteurController::search'], null, null, null, false, false, null]],
        '/recruteur/soumissions' => [[['_route' => 'recr_soumissions', '_controller' => 'App\\Controller\\recruteurController::soumissions'], null, null, null, false, false, null]],
        '/recruteur' => [[['_route' => 'recr_index', '_controller' => 'App\\Controller\\recruteurController::index'], null, null, null, true, false, null]],
        '/recruteur/a-propos' => [[['_route' => 'recr_about', '_controller' => 'App\\Controller\\recruteurController::about'], null, null, null, false, false, null]],
        '/recruteur/actualites' => [[['_route' => 'recr_news', '_controller' => 'App\\Controller\\recruteurController::news'], null, null, null, false, false, null]],
        '/recruteur/article' => [[['_route' => 'recr_article', '_controller' => 'App\\Controller\\recruteurController::article'], null, null, null, false, false, null]],
        '/recruteur/contact' => [[['_route' => 'recr_contact', '_controller' => 'App\\Controller\\recruteurController::contact'], null, null, null, false, false, null]],
        '/recruteur/emplois' => [[['_route' => 'recr_emplois', '_controller' => 'App\\Controller\\recruteurController::emplois'], null, null, null, false, false, null]],
        '/recruteur/faq' => [[['_route' => 'recr_faq', '_controller' => 'App\\Controller\\recruteurController::faq'], null, null, null, false, false, null]],
        '/recruteur/galerie' => [[['_route' => 'recr_galerie', '_controller' => 'App\\Controller\\recruteurController::galerie'], null, null, null, false, false, null]],
        '/recruteur/opportunite' => [[['_route' => 'recr_offer', '_controller' => 'App\\Controller\\recruteurController::offeritem'], null, null, null, false, false, null]],
        '/recruteur/partenaires' => [[['_route' => 'recr_partenaire', '_controller' => 'App\\Controller\\recruteurController::partenaire'], null, null, null, false, false, null]],
        '/recruteur/podcast-employabilite' => [[['_route' => 'recr_podcast', '_controller' => 'App\\Controller\\recruteurController::podcast'], null, null, null, false, false, null]],
        '/recruteur/publications' => [[['_route' => 'recr_publication', '_controller' => 'App\\Controller\\recruteurController::publication'], null, null, null, false, false, null]],
        '/recruteur/stages' => [[['_route' => 'recr_stages', '_controller' => 'App\\Controller\\recruteurController::stages'], null, null, null, false, false, null]],
        '/recruteur/trucs-et-astuces' => [[['_route' => 'recr_trucs', '_controller' => 'App\\Controller\\recruteurController::trucs'], null, null, null, false, false, null]],
        '/api/login' => [[['_route' => 'api_login_check'], null, ['POST' => 0], null, false, false, null]],
    ],
    [ // $regexpList
        0 => '{^(?'
                .'|/api(?'
                    .'|(?:/(index)(?:\\.([^/]++))?)?(*:42)'
                    .'|/(?'
                        .'|docs(?:\\.([^/]++))?(*:72)'
                        .'|contexts/(.+)(?:\\.([^/]++))?(*:107)'
                        .'|articles(?'
                            .'|(?:\\.([^/]++))?(?'
                                .'|(*:144)'
                            .')'
                            .'|/([^/\\.]++)(?:\\.([^/]++))?(?'
                                .'|(*:182)'
                            .')'
                        .')'
                        .'|faq(?'
                            .'|s(?'
                                .'|(?:\\.([^/]++))?(?'
                                    .'|(*:220)'
                                .')'
                                .'|/([^/\\.]++)(?:\\.([^/]++))?(?'
                                    .'|(*:258)'
                                .')'
                            .')'
                            .'|_categories(?'
                                .'|(?:\\.([^/]++))?(?'
                                    .'|(*:300)'
                                .')'
                                .'|/([^/\\.]++)(?:\\.([^/]++))?(?'
                                    .'|(*:338)'
                                .')'
                            .')'
                        .')'
                        .'|galeries(?'
                            .'|(?:\\.([^/]++))?(?'
                                .'|(*:378)'
                            .')'
                            .'|/([^/\\.]++)(?:\\.([^/]++))?(?'
                                .'|(*:416)'
                            .')'
                        .')'
                        .'|me(?'
                            .'|dia_objects(?'
                                .'|(?:\\.([^/]++))?(?'
                                    .'|(*:463)'
                                .')'
                                .'|/([^/\\.]++)(?:\\.([^/]++))?(*:498)'
                            .')'
                            .'|ssages(?'
                                .'|(?:\\.([^/]++))?(?'
                                    .'|(*:534)'
                                .')'
                                .'|/([^/\\.]++)(?:\\.([^/]++))?(?'
                                    .'|(*:572)'
                                .')'
                            .')'
                        .')'
                        .'|newsletter_messages(?'
                            .'|(?:\\.([^/]++))?(?'
                                .'|(*:623)'
                            .')'
                            .'|/([^/\\.]++)(?:\\.([^/]++))?(?'
                                .'|(*:661)'
                            .')'
                        .')'
                        .'|opportunities(?'
                            .'|(?:\\.([^/]++))?(?'
                                .'|(*:705)'
                            .')'
                            .'|/([^/\\.]++)(?:\\.([^/]++))?(?'
                                .'|(*:743)'
                            .')'
                        .')'
                        .'|p(?'
                            .'|artenaires(?'
                                .'|(?:\\.([^/]++))?(?'
                                    .'|(*:788)'
                                .')'
                                .'|/([^/\\.]++)(?:\\.([^/]++))?(?'
                                    .'|(*:826)'
                                .')'
                            .')'
                            .'|odcasts(?'
                                .'|(?:\\.([^/]++))?(?'
                                    .'|(*:864)'
                                .')'
                                .'|/([^/\\.]++)(?:\\.([^/]++))?(?'
                                    .'|(*:902)'
                                .')'
                            .')'
                        .')'
                        .'|users(?'
                            .'|(?:\\.([^/]++))?(?'
                                .'|(*:939)'
                            .')'
                            .'|/([^/\\.]++)(?:\\.([^/]++))?(?'
                                .'|(*:977)'
                            .')'
                        .')'
                    .')'
                .')'
            .')/?$}sDu',
    ],
    [ // $dynamicRoutes
        42 => [[['_route' => 'api_entrypoint', '_controller' => 'api_platform.action.entrypoint', '_format' => '', '_api_respond' => 'true', 'index' => 'index'], ['index', '_format'], null, null, false, true, null]],
        72 => [[['_route' => 'api_doc', '_controller' => 'api_platform.action.documentation', '_format' => '', '_api_respond' => 'true'], ['_format'], null, null, false, true, null]],
        107 => [[['_route' => 'api_jsonld_context', '_controller' => 'api_platform.jsonld.action.context', '_format' => 'jsonld', '_api_respond' => 'true'], ['shortName', '_format'], null, null, false, true, null]],
        144 => [
            [['_route' => 'api_articles_get_collection', '_controller' => 'api_platform.action.get_collection', '_format' => null, '_api_resource_class' => 'App\\Entity\\Articles', '_api_collection_operation_name' => 'get'], ['_format'], ['GET' => 0], null, false, true, null],
            [['_route' => 'api_articles_post_collection', '_controller' => 'api_platform.action.post_collection', '_format' => null, '_api_resource_class' => 'App\\Entity\\Articles', '_api_collection_operation_name' => 'post'], ['_format'], ['POST' => 0], null, false, true, null],
        ],
        182 => [
            [['_route' => 'api_articles_get_item', '_controller' => 'api_platform.action.get_item', '_format' => null, '_api_resource_class' => 'App\\Entity\\Articles', '_api_item_operation_name' => 'get'], ['id', '_format'], ['GET' => 0], null, false, true, null],
            [['_route' => 'api_articles_delete_item', '_controller' => 'api_platform.action.delete_item', '_format' => null, '_api_resource_class' => 'App\\Entity\\Articles', '_api_item_operation_name' => 'delete'], ['id', '_format'], ['DELETE' => 0], null, false, true, null],
            [['_route' => 'api_articles_put_item', '_controller' => 'api_platform.action.put_item', '_format' => null, '_api_resource_class' => 'App\\Entity\\Articles', '_api_item_operation_name' => 'put'], ['id', '_format'], ['PUT' => 0], null, false, true, null],
            [['_route' => 'api_articles_patch_item', '_controller' => 'api_platform.action.patch_item', '_format' => null, '_api_resource_class' => 'App\\Entity\\Articles', '_api_item_operation_name' => 'patch'], ['id', '_format'], ['PATCH' => 0], null, false, true, null],
        ],
        220 => [
            [['_route' => 'api_faqs_get_collection', '_controller' => 'api_platform.action.get_collection', '_format' => null, '_api_resource_class' => 'App\\Entity\\Faq', '_api_collection_operation_name' => 'get'], ['_format'], ['GET' => 0], null, false, true, null],
            [['_route' => 'api_faqs_post_collection', '_controller' => 'api_platform.action.post_collection', '_format' => null, '_api_resource_class' => 'App\\Entity\\Faq', '_api_collection_operation_name' => 'post'], ['_format'], ['POST' => 0], null, false, true, null],
        ],
        258 => [
            [['_route' => 'api_faqs_get_item', '_controller' => 'api_platform.action.get_item', '_format' => null, '_api_resource_class' => 'App\\Entity\\Faq', '_api_item_operation_name' => 'get'], ['id', '_format'], ['GET' => 0], null, false, true, null],
            [['_route' => 'api_faqs_delete_item', '_controller' => 'api_platform.action.delete_item', '_format' => null, '_api_resource_class' => 'App\\Entity\\Faq', '_api_item_operation_name' => 'delete'], ['id', '_format'], ['DELETE' => 0], null, false, true, null],
            [['_route' => 'api_faqs_put_item', '_controller' => 'api_platform.action.put_item', '_format' => null, '_api_resource_class' => 'App\\Entity\\Faq', '_api_item_operation_name' => 'put'], ['id', '_format'], ['PUT' => 0], null, false, true, null],
            [['_route' => 'api_faqs_patch_item', '_controller' => 'api_platform.action.patch_item', '_format' => null, '_api_resource_class' => 'App\\Entity\\Faq', '_api_item_operation_name' => 'patch'], ['id', '_format'], ['PATCH' => 0], null, false, true, null],
        ],
        300 => [
            [['_route' => 'api_faq_categories_get_collection', '_controller' => 'api_platform.action.get_collection', '_format' => null, '_api_resource_class' => 'App\\Entity\\FaqCategorie', '_api_collection_operation_name' => 'get'], ['_format'], ['GET' => 0], null, false, true, null],
            [['_route' => 'api_faq_categories_post_collection', '_controller' => 'api_platform.action.post_collection', '_format' => null, '_api_resource_class' => 'App\\Entity\\FaqCategorie', '_api_collection_operation_name' => 'post'], ['_format'], ['POST' => 0], null, false, true, null],
        ],
        338 => [
            [['_route' => 'api_faq_categories_get_item', '_controller' => 'api_platform.action.get_item', '_format' => null, '_api_resource_class' => 'App\\Entity\\FaqCategorie', '_api_item_operation_name' => 'get'], ['id', '_format'], ['GET' => 0], null, false, true, null],
            [['_route' => 'api_faq_categories_delete_item', '_controller' => 'api_platform.action.delete_item', '_format' => null, '_api_resource_class' => 'App\\Entity\\FaqCategorie', '_api_item_operation_name' => 'delete'], ['id', '_format'], ['DELETE' => 0], null, false, true, null],
            [['_route' => 'api_faq_categories_put_item', '_controller' => 'api_platform.action.put_item', '_format' => null, '_api_resource_class' => 'App\\Entity\\FaqCategorie', '_api_item_operation_name' => 'put'], ['id', '_format'], ['PUT' => 0], null, false, true, null],
            [['_route' => 'api_faq_categories_patch_item', '_controller' => 'api_platform.action.patch_item', '_format' => null, '_api_resource_class' => 'App\\Entity\\FaqCategorie', '_api_item_operation_name' => 'patch'], ['id', '_format'], ['PATCH' => 0], null, false, true, null],
        ],
        378 => [
            [['_route' => 'api_galeries_get_collection', '_controller' => 'api_platform.action.get_collection', '_format' => null, '_api_resource_class' => 'App\\Entity\\Galery', '_api_collection_operation_name' => 'get'], ['_format'], ['GET' => 0], null, false, true, null],
            [['_route' => 'api_galeries_post_collection', '_controller' => 'api_platform.action.post_collection', '_format' => null, '_api_resource_class' => 'App\\Entity\\Galery', '_api_collection_operation_name' => 'post'], ['_format'], ['POST' => 0], null, false, true, null],
        ],
        416 => [
            [['_route' => 'api_galeries_get_item', '_controller' => 'api_platform.action.get_item', '_format' => null, '_api_resource_class' => 'App\\Entity\\Galery', '_api_item_operation_name' => 'get'], ['id', '_format'], ['GET' => 0], null, false, true, null],
            [['_route' => 'api_galeries_delete_item', '_controller' => 'api_platform.action.delete_item', '_format' => null, '_api_resource_class' => 'App\\Entity\\Galery', '_api_item_operation_name' => 'delete'], ['id', '_format'], ['DELETE' => 0], null, false, true, null],
            [['_route' => 'api_galeries_put_item', '_controller' => 'api_platform.action.put_item', '_format' => null, '_api_resource_class' => 'App\\Entity\\Galery', '_api_item_operation_name' => 'put'], ['id', '_format'], ['PUT' => 0], null, false, true, null],
            [['_route' => 'api_galeries_patch_item', '_controller' => 'api_platform.action.patch_item', '_format' => null, '_api_resource_class' => 'App\\Entity\\Galery', '_api_item_operation_name' => 'patch'], ['id', '_format'], ['PATCH' => 0], null, false, true, null],
        ],
        463 => [
            [['_route' => 'api_media_objects_post_collection', '_controller' => 'App\\Controller\\CreateMediaObjectAction', '_format' => null, '_api_resource_class' => 'App\\Entity\\MediaObject', '_api_collection_operation_name' => 'post'], ['_format'], ['POST' => 0], null, false, true, null],
            [['_route' => 'api_media_objects_get_collection', '_controller' => 'api_platform.action.get_collection', '_format' => null, '_api_resource_class' => 'App\\Entity\\MediaObject', '_api_collection_operation_name' => 'get'], ['_format'], ['GET' => 0], null, false, true, null],
        ],
        498 => [[['_route' => 'api_media_objects_get_item', '_controller' => 'api_platform.action.get_item', '_format' => null, '_api_resource_class' => 'App\\Entity\\MediaObject', '_api_item_operation_name' => 'get'], ['id', '_format'], ['GET' => 0], null, false, true, null]],
        534 => [
            [['_route' => 'api_messages_get_collection', '_controller' => 'api_platform.action.get_collection', '_format' => null, '_api_resource_class' => 'App\\Entity\\Message', '_api_collection_operation_name' => 'get'], ['_format'], ['GET' => 0], null, false, true, null],
            [['_route' => 'api_messages_post_collection', '_controller' => 'api_platform.action.post_collection', '_format' => null, '_api_resource_class' => 'App\\Entity\\Message', '_api_collection_operation_name' => 'post'], ['_format'], ['POST' => 0], null, false, true, null],
        ],
        572 => [
            [['_route' => 'api_messages_get_item', '_controller' => 'api_platform.action.get_item', '_format' => null, '_api_resource_class' => 'App\\Entity\\Message', '_api_item_operation_name' => 'get'], ['id', '_format'], ['GET' => 0], null, false, true, null],
            [['_route' => 'api_messages_delete_item', '_controller' => 'api_platform.action.delete_item', '_format' => null, '_api_resource_class' => 'App\\Entity\\Message', '_api_item_operation_name' => 'delete'], ['id', '_format'], ['DELETE' => 0], null, false, true, null],
            [['_route' => 'api_messages_put_item', '_controller' => 'api_platform.action.put_item', '_format' => null, '_api_resource_class' => 'App\\Entity\\Message', '_api_item_operation_name' => 'put'], ['id', '_format'], ['PUT' => 0], null, false, true, null],
            [['_route' => 'api_messages_patch_item', '_controller' => 'api_platform.action.patch_item', '_format' => null, '_api_resource_class' => 'App\\Entity\\Message', '_api_item_operation_name' => 'patch'], ['id', '_format'], ['PATCH' => 0], null, false, true, null],
        ],
        623 => [
            [['_route' => 'api_newsletter_messages_get_collection', '_controller' => 'api_platform.action.get_collection', '_format' => null, '_api_resource_class' => 'App\\Entity\\NewsletterMessage', '_api_collection_operation_name' => 'get'], ['_format'], ['GET' => 0], null, false, true, null],
            [['_route' => 'api_newsletter_messages_post_collection', '_controller' => 'api_platform.action.post_collection', '_format' => null, '_api_resource_class' => 'App\\Entity\\NewsletterMessage', '_api_collection_operation_name' => 'post'], ['_format'], ['POST' => 0], null, false, true, null],
        ],
        661 => [
            [['_route' => 'api_newsletter_messages_get_item', '_controller' => 'api_platform.action.get_item', '_format' => null, '_api_resource_class' => 'App\\Entity\\NewsletterMessage', '_api_item_operation_name' => 'get'], ['id', '_format'], ['GET' => 0], null, false, true, null],
            [['_route' => 'api_newsletter_messages_delete_item', '_controller' => 'api_platform.action.delete_item', '_format' => null, '_api_resource_class' => 'App\\Entity\\NewsletterMessage', '_api_item_operation_name' => 'delete'], ['id', '_format'], ['DELETE' => 0], null, false, true, null],
            [['_route' => 'api_newsletter_messages_put_item', '_controller' => 'api_platform.action.put_item', '_format' => null, '_api_resource_class' => 'App\\Entity\\NewsletterMessage', '_api_item_operation_name' => 'put'], ['id', '_format'], ['PUT' => 0], null, false, true, null],
            [['_route' => 'api_newsletter_messages_patch_item', '_controller' => 'api_platform.action.patch_item', '_format' => null, '_api_resource_class' => 'App\\Entity\\NewsletterMessage', '_api_item_operation_name' => 'patch'], ['id', '_format'], ['PATCH' => 0], null, false, true, null],
        ],
        705 => [
            [['_route' => 'api_opportunities_get_collection', '_controller' => 'api_platform.action.get_collection', '_format' => null, '_api_resource_class' => 'App\\Entity\\Opportunities', '_api_collection_operation_name' => 'get'], ['_format'], ['GET' => 0], null, false, true, null],
            [['_route' => 'api_opportunities_post_collection', '_controller' => 'api_platform.action.post_collection', '_format' => null, '_api_resource_class' => 'App\\Entity\\Opportunities', '_api_collection_operation_name' => 'post'], ['_format'], ['POST' => 0], null, false, true, null],
        ],
        743 => [
            [['_route' => 'api_opportunities_get_item', '_controller' => 'api_platform.action.get_item', '_format' => null, '_api_resource_class' => 'App\\Entity\\Opportunities', '_api_item_operation_name' => 'get'], ['id', '_format'], ['GET' => 0], null, false, true, null],
            [['_route' => 'api_opportunities_delete_item', '_controller' => 'api_platform.action.delete_item', '_format' => null, '_api_resource_class' => 'App\\Entity\\Opportunities', '_api_item_operation_name' => 'delete'], ['id', '_format'], ['DELETE' => 0], null, false, true, null],
            [['_route' => 'api_opportunities_put_item', '_controller' => 'api_platform.action.put_item', '_format' => null, '_api_resource_class' => 'App\\Entity\\Opportunities', '_api_item_operation_name' => 'put'], ['id', '_format'], ['PUT' => 0], null, false, true, null],
            [['_route' => 'api_opportunities_patch_item', '_controller' => 'api_platform.action.patch_item', '_format' => null, '_api_resource_class' => 'App\\Entity\\Opportunities', '_api_item_operation_name' => 'patch'], ['id', '_format'], ['PATCH' => 0], null, false, true, null],
        ],
        788 => [
            [['_route' => 'api_partenaires_get_collection', '_controller' => 'api_platform.action.get_collection', '_format' => null, '_api_resource_class' => 'App\\Entity\\Partenaire', '_api_collection_operation_name' => 'get'], ['_format'], ['GET' => 0], null, false, true, null],
            [['_route' => 'api_partenaires_post_collection', '_controller' => 'api_platform.action.post_collection', '_format' => null, '_api_resource_class' => 'App\\Entity\\Partenaire', '_api_collection_operation_name' => 'post'], ['_format'], ['POST' => 0], null, false, true, null],
        ],
        826 => [
            [['_route' => 'api_partenaires_get_item', '_controller' => 'api_platform.action.get_item', '_format' => null, '_api_resource_class' => 'App\\Entity\\Partenaire', '_api_item_operation_name' => 'get'], ['id', '_format'], ['GET' => 0], null, false, true, null],
            [['_route' => 'api_partenaires_delete_item', '_controller' => 'api_platform.action.delete_item', '_format' => null, '_api_resource_class' => 'App\\Entity\\Partenaire', '_api_item_operation_name' => 'delete'], ['id', '_format'], ['DELETE' => 0], null, false, true, null],
            [['_route' => 'api_partenaires_put_item', '_controller' => 'api_platform.action.put_item', '_format' => null, '_api_resource_class' => 'App\\Entity\\Partenaire', '_api_item_operation_name' => 'put'], ['id', '_format'], ['PUT' => 0], null, false, true, null],
            [['_route' => 'api_partenaires_patch_item', '_controller' => 'api_platform.action.patch_item', '_format' => null, '_api_resource_class' => 'App\\Entity\\Partenaire', '_api_item_operation_name' => 'patch'], ['id', '_format'], ['PATCH' => 0], null, false, true, null],
        ],
        864 => [
            [['_route' => 'api_podcasts_get_collection', '_controller' => 'api_platform.action.get_collection', '_format' => null, '_api_resource_class' => 'App\\Entity\\Podcast', '_api_collection_operation_name' => 'get'], ['_format'], ['GET' => 0], null, false, true, null],
            [['_route' => 'api_podcasts_post_collection', '_controller' => 'api_platform.action.post_collection', '_format' => null, '_api_resource_class' => 'App\\Entity\\Podcast', '_api_collection_operation_name' => 'post'], ['_format'], ['POST' => 0], null, false, true, null],
        ],
        902 => [
            [['_route' => 'api_podcasts_get_item', '_controller' => 'api_platform.action.get_item', '_format' => null, '_api_resource_class' => 'App\\Entity\\Podcast', '_api_item_operation_name' => 'get'], ['id', '_format'], ['GET' => 0], null, false, true, null],
            [['_route' => 'api_podcasts_delete_item', '_controller' => 'api_platform.action.delete_item', '_format' => null, '_api_resource_class' => 'App\\Entity\\Podcast', '_api_item_operation_name' => 'delete'], ['id', '_format'], ['DELETE' => 0], null, false, true, null],
            [['_route' => 'api_podcasts_put_item', '_controller' => 'api_platform.action.put_item', '_format' => null, '_api_resource_class' => 'App\\Entity\\Podcast', '_api_item_operation_name' => 'put'], ['id', '_format'], ['PUT' => 0], null, false, true, null],
            [['_route' => 'api_podcasts_patch_item', '_controller' => 'api_platform.action.patch_item', '_format' => null, '_api_resource_class' => 'App\\Entity\\Podcast', '_api_item_operation_name' => 'patch'], ['id', '_format'], ['PATCH' => 0], null, false, true, null],
        ],
        939 => [
            [['_route' => 'api_users_get_collection', '_controller' => 'api_platform.action.get_collection', '_format' => null, '_api_resource_class' => 'App\\Entity\\Users', '_api_collection_operation_name' => 'get'], ['_format'], ['GET' => 0], null, false, true, null],
            [['_route' => 'api_users_post_collection', '_controller' => 'api_platform.action.post_collection', '_format' => null, '_api_resource_class' => 'App\\Entity\\Users', '_api_collection_operation_name' => 'post'], ['_format'], ['POST' => 0], null, false, true, null],
        ],
        977 => [
            [['_route' => 'api_users_get_item', '_controller' => 'api_platform.action.get_item', '_format' => null, '_api_resource_class' => 'App\\Entity\\Users', '_api_item_operation_name' => 'get'], ['id', '_format'], ['GET' => 0], null, false, true, null],
            [['_route' => 'api_users_delete_item', '_controller' => 'api_platform.action.delete_item', '_format' => null, '_api_resource_class' => 'App\\Entity\\Users', '_api_item_operation_name' => 'delete'], ['id', '_format'], ['DELETE' => 0], null, false, true, null],
            [['_route' => 'api_users_put_item', '_controller' => 'api_platform.action.put_item', '_format' => null, '_api_resource_class' => 'App\\Entity\\Users', '_api_item_operation_name' => 'put'], ['id', '_format'], ['PUT' => 0], null, false, true, null],
            [['_route' => 'api_users_patch_item', '_controller' => 'api_platform.action.patch_item', '_format' => null, '_api_resource_class' => 'App\\Entity\\Users', '_api_item_operation_name' => 'patch'], ['id', '_format'], ['PATCH' => 0], null, false, true, null],
            [null, null, null, null, false, false, 0],
        ],
    ],
    null, // $checkCondition
];
