<?php

// This file has been auto-generated by the Symfony Routing Component.

return [
    '_preview_error' => [['code', '_format'], ['_controller' => 'error_controller::preview', '_format' => 'html'], ['code' => '\\d+'], [['variable', '.', '[^/]++', '_format', true], ['variable', '/', '\\d+', 'code', true], ['text', '/_error']], [], []],
    '_wdt' => [['token'], ['_controller' => 'web_profiler.controller.profiler::toolbarAction'], [], [['variable', '/', '[^/]++', 'token', true], ['text', '/_wdt']], [], []],
    '_profiler_home' => [[], ['_controller' => 'web_profiler.controller.profiler::homeAction'], [], [['text', '/_profiler/']], [], []],
    '_profiler_search' => [[], ['_controller' => 'web_profiler.controller.profiler::searchAction'], [], [['text', '/_profiler/search']], [], []],
    '_profiler_search_bar' => [[], ['_controller' => 'web_profiler.controller.profiler::searchBarAction'], [], [['text', '/_profiler/search_bar']], [], []],
    '_profiler_phpinfo' => [[], ['_controller' => 'web_profiler.controller.profiler::phpinfoAction'], [], [['text', '/_profiler/phpinfo']], [], []],
    '_profiler_search_results' => [['token'], ['_controller' => 'web_profiler.controller.profiler::searchResultsAction'], [], [['text', '/search/results'], ['variable', '/', '[^/]++', 'token', true], ['text', '/_profiler']], [], []],
    '_profiler_open_file' => [[], ['_controller' => 'web_profiler.controller.profiler::openAction'], [], [['text', '/_profiler/open']], [], []],
    '_profiler' => [['token'], ['_controller' => 'web_profiler.controller.profiler::panelAction'], [], [['variable', '/', '[^/]++', 'token', true], ['text', '/_profiler']], [], []],
    '_profiler_router' => [['token'], ['_controller' => 'web_profiler.controller.router::panelAction'], [], [['text', '/router'], ['variable', '/', '[^/]++', 'token', true], ['text', '/_profiler']], [], []],
    '_profiler_exception' => [['token'], ['_controller' => 'web_profiler.controller.exception_panel::body'], [], [['text', '/exception'], ['variable', '/', '[^/]++', 'token', true], ['text', '/_profiler']], [], []],
    '_profiler_exception_css' => [['token'], ['_controller' => 'web_profiler.controller.exception_panel::stylesheet'], [], [['text', '/exception.css'], ['variable', '/', '[^/]++', 'token', true], ['text', '/_profiler']], [], []],
    'app_register_etudiant' => [[], ['_controller' => 'App\\Controller\\RegistrationController::register'], [], [['text', '/inscription/etudiant']], [], []],
    'app_register_recruteur' => [[], ['_controller' => 'App\\Controller\\RegistrationController::register2'], [], [['text', '/inscription/recruteur']], [], []],
    'app_register_admin' => [[], ['_controller' => 'App\\Controller\\RegistrationController::register3'], [], [['text', '/backend/inscription/admin']], [], []],
    'app_verify_email' => [[], ['_controller' => 'App\\Controller\\RegistrationController::verifyUserEmail'], [], [['text', '/verify/email']], [], []],
    'app_login' => [[], ['_controller' => 'App\\Controller\\SecurityController::login'], [], [['text', '/connexion']], [], []],
    'app_login_recruteur' => [[], ['_controller' => 'App\\Controller\\SecurityController::login'], [], [['text', '/connexion/recruteur']], [], []],
    'app_logout' => [[], ['_controller' => 'App\\Controller\\SecurityController::logout'], [], [['text', '/logout']], [], []],
    'cms_index' => [[], ['_controller' => 'App\\Controller\\cmsController::index'], [], [['text', '/backend/']], [], []],
    'cms_article' => [[], ['_controller' => 'App\\Controller\\cmsController::articles'], [], [['text', '/backend/articles']], [], []],
    'cms_news' => [[], ['_controller' => 'App\\Controller\\cmsController::news'], [], [['text', '/backend/news']], [], []],
    'cms_add_article' => [[], ['_controller' => 'App\\Controller\\cmsController::article'], [], [['text', '/backend/ajouter-un-article']], [], []],
    'cms_edit_article' => [[], ['_controller' => 'App\\Controller\\cmsController::article'], [], [['text', '/backend/editer-un-article']], [], []],
    'cms_add_podcast' => [[], ['_controller' => 'App\\Controller\\cmsController::edit_podcast'], [], [['text', '/backend/ajouter-un-podcast']], [], []],
    'cms_edit_podcast' => [[], ['_controller' => 'App\\Controller\\cmsController::edit_podcast'], [], [['text', '/backend/editer-un-podcast']], [], []],
    'cms_podcast' => [[], ['_controller' => 'App\\Controller\\cmsController::podcast'], [], [['text', '/backend/podcast']], [], []],
    'cms_messages' => [[], ['_controller' => 'App\\Controller\\cmsController::messages'], [], [['text', '/backend/messages']], [], []],
    'cms_reply' => [[], ['_controller' => 'App\\Controller\\cmsController::reply'], [], [['text', '/backend/messages/repondre-au-message']], [], []],
    'cms_faq' => [[], ['_controller' => 'App\\Controller\\cmsController::faq'], [], [['text', '/backend/faq']], [], []],
    'cms_add_faq' => [[], ['_controller' => 'App\\Controller\\cmsController::edit_faq'], [], [['text', '/backend/ajouter-une-question']], [], []],
    'cms_edit_faq' => [[], ['_controller' => 'App\\Controller\\cmsController::edit_faq'], [], [['text', '/backend/editer-une-question']], [], []],
    'cms_categorie' => [[], ['_controller' => 'App\\Controller\\cmsController::categorie'], [], [['text', '/backend/categorie-de-questions']], [], []],
    'cms_add_categorie' => [[], ['_controller' => 'App\\Controller\\cmsController::edit_categorie'], [], [['text', '/backend/ajouter-une-categorie']], [], []],
    'cms_edit_categorie' => [[], ['_controller' => 'App\\Controller\\cmsController::edit_categorie'], [], [['text', '/backend/editer-une-categorie']], [], []],
    'cms_galerie' => [[], ['_controller' => 'App\\Controller\\cmsController::galery'], [], [['text', '/backend/galerie']], [], []],
    'cms_partenaires' => [[], ['_controller' => 'App\\Controller\\cmsController::partenaires'], [], [['text', '/backend/partenaires']], [], []],
    'cms_add_partenaire' => [[], ['_controller' => 'App\\Controller\\cmsController::edit_partenaire'], [], [['text', '/backend/ajouter-un-partenaire']], [], []],
    'cms_edit_partenaire' => [[], ['_controller' => 'App\\Controller\\cmsController::edit_partenaire'], [], [['text', '/backend/editer-un-partenaire']], [], []],
    'cms_comptes' => [[], ['_controller' => 'App\\Controller\\cmsController::comptes'], [], [['text', '/backend/comptes']], [], []],
    'cms_newsletter' => [[], ['_controller' => 'App\\Controller\\cmsController::newsletter'], [], [['text', '/backend/newsletter']], [], []],
    'cms_create_newsletter' => [[], ['_controller' => 'App\\Controller\\cmsController::create_newsletter'], [], [['text', '/backend/envoyer-un-message']], [], []],
    'cms_add_account' => [[], ['_controller' => 'App\\Controller\\cmsController::edit_account'], [], [['text', '/backend/ajouter-un-compte']], [], []],
    'cms_edit_account' => [[], ['_controller' => 'App\\Controller\\cmsController::edit_account'], [], [['text', '/backend/editer-un-compte']], [], []],
    'cms_opportunites' => [[], ['_controller' => 'App\\Controller\\cmsController::opportunitie'], [], [['text', '/backend/opportunites']], [], []],
    'cms_add_offer' => [[], ['_controller' => 'App\\Controller\\cmsController::edit_opportunities'], [], [['text', '/backend/ajouter-une-opportunite']], [], []],
    'cms_edit_offer' => [[], ['_controller' => 'App\\Controller\\cmsController::edit_opportunities'], [], [['text', '/backend/editer-une-opportunite']], [], []],
    'etu_edit_cv' => [[], ['_controller' => 'App\\Controller\\etudiantController::editcv'], [], [['text', '/etudiant/editer-mon-cv']], [], []],
    'etu_cv' => [[], ['_controller' => 'App\\Controller\\etudiantController::cv'], [], [['text', '/etudiant/cv']], [], []],
    'etu_soumissions' => [[], ['_controller' => 'App\\Controller\\etudiantController::soumissions'], [], [['text', '/etudiant/mes-soumissions']], [], []],
    'etu_profil' => [[], ['_controller' => 'App\\Controller\\etudiantController::profil'], [], [['text', '/etudiant/profil']], [], []],
    'etu_index' => [[], ['_controller' => 'App\\Controller\\etudiantController::index'], [], [['text', '/etudiant/']], [], []],
    'etu_about' => [[], ['_controller' => 'App\\Controller\\etudiantController::about'], [], [['text', '/etudiant/a-propos']], [], []],
    'etu_news' => [[], ['_controller' => 'App\\Controller\\etudiantController::news'], [], [['text', '/etudiant/actualites']], [], []],
    'etu_article' => [[], ['_controller' => 'App\\Controller\\etudiantController::article'], [], [['text', '/etudiant/article']], [], []],
    'etu_contact' => [[], ['_controller' => 'App\\Controller\\etudiantController::contact'], [], [['text', '/etudiant/contact']], [], []],
    'etu_emplois' => [[], ['_controller' => 'App\\Controller\\etudiantController::emplois'], [], [['text', '/etudiant/emplois']], [], []],
    'etu_faq' => [[], ['_controller' => 'App\\Controller\\etudiantController::faq'], [], [['text', '/etudiant/faq']], [], []],
    'etu_galerie' => [[], ['_controller' => 'App\\Controller\\etudiantController::galerie'], [], [['text', '/etudiant/galerie']], [], []],
    'etu_offer' => [[], ['_controller' => 'App\\Controller\\etudiantController::offeritem'], [], [['text', '/etudiant/opportunite']], [], []],
    'etu_partenaire' => [[], ['_controller' => 'App\\Controller\\etudiantController::partenaire'], [], [['text', '/etudiant/partenaires']], [], []],
    'etu_podcast' => [[], ['_controller' => 'App\\Controller\\etudiantController::podcast'], [], [['text', '/etudiant/podcast-employabilite']], [], []],
    'etu_publication' => [[], ['_controller' => 'App\\Controller\\etudiantController::publication'], [], [['text', '/etudiant/publications']], [], []],
    'etu_stages' => [[], ['_controller' => 'App\\Controller\\etudiantController::stages'], [], [['text', '/etudiant/stages']], [], []],
    'etu_trucs' => [[], ['_controller' => 'App\\Controller\\etudiantController::trucs'], [], [['text', '/etudiant/trucs-et-astuces']], [], []],
    'etu_search' => [[], ['_controller' => 'App\\Controller\\etudiantController::search'], [], [['text', '/etudiant/rechercher']], [], []],
    'index' => [[], ['_controller' => 'App\\Controller\\frontController::index'], [], [['text', '/']], [], []],
    'about' => [[], ['_controller' => 'App\\Controller\\frontController::about'], [], [['text', '/a-propos']], [], []],
    'news' => [[], ['_controller' => 'App\\Controller\\frontController::news'], [], [['text', '/actualites']], [], []],
    'article' => [[], ['_controller' => 'App\\Controller\\frontController::article'], [], [['text', '/article']], [], []],
    'login' => [[], ['_controller' => 'App\\Controller\\frontController::connexion'], [], [['text', '/connexion']], [], []],
    'login_recruteur' => [[], ['_controller' => 'App\\Controller\\frontController::connexion_recruteur'], [], [['text', '/connexion-recruteurs']], [], []],
    'contact' => [[], ['_controller' => 'App\\Controller\\frontController::contact'], [], [['text', '/contact']], [], []],
    'emplois' => [[], ['_controller' => 'App\\Controller\\frontController::emplois'], [], [['text', '/emplois']], [], []],
    'faq' => [[], ['_controller' => 'App\\Controller\\frontController::faq'], [], [['text', '/faq']], [], []],
    'galerie' => [[], ['_controller' => 'App\\Controller\\frontController::galerie'], [], [['text', '/galerie']], [], []],
    'offer' => [[], ['_controller' => 'App\\Controller\\frontController::offer'], [], [['text', '/opportunite']], [], []],
    'partenaire' => [[], ['_controller' => 'App\\Controller\\frontController::partenaire'], [], [['text', '/partenaires']], [], []],
    'podcast' => [[], ['_controller' => 'App\\Controller\\frontController::podcast'], [], [['text', '/podcast-employabilite']], [], []],
    'prevcon' => [[], ['_controller' => 'App\\Controller\\frontController::prev_connexion'], [], [['text', '/prev-connexion']], [], []],
    'publication' => [[], ['_controller' => 'App\\Controller\\frontController::publication'], [], [['text', '/publications']], [], []],
    'stages' => [[], ['_controller' => 'App\\Controller\\frontController::stages'], [], [['text', '/stages']], [], []],
    'trucs' => [[], ['_controller' => 'App\\Controller\\frontController::trucs'], [], [['text', '/trucs-et-astuces']], [], []],
    'recr_create_offer' => [[], ['_controller' => 'App\\Controller\\recruteurController::createOffer'], [], [['text', '/recruteur/creer-une-opportunite']], [], []],
    'recr_offers' => [[], ['_controller' => 'App\\Controller\\recruteurController::Offer'], [], [['text', '/recruteur/opportunites']], [], []],
    'recr_profil' => [[], ['_controller' => 'App\\Controller\\recruteurController::profil'], [], [['text', '/recruteur/profil']], [], []],
    'recr_search' => [[], ['_controller' => 'App\\Controller\\recruteurController::search'], [], [['text', '/recruteur/recherche']], [], []],
    'recr_soumissions' => [[], ['_controller' => 'App\\Controller\\recruteurController::soumissions'], [], [['text', '/recruteur/soumissions']], [], []],
    'recr_index' => [[], ['_controller' => 'App\\Controller\\recruteurController::index'], [], [['text', '/recruteur/']], [], []],
    'recr_about' => [[], ['_controller' => 'App\\Controller\\recruteurController::about'], [], [['text', '/recruteur/a-propos']], [], []],
    'recr_news' => [[], ['_controller' => 'App\\Controller\\recruteurController::news'], [], [['text', '/recruteur/actualites']], [], []],
    'recr_article' => [[], ['_controller' => 'App\\Controller\\recruteurController::article'], [], [['text', '/recruteur/article']], [], []],
    'recr_contact' => [[], ['_controller' => 'App\\Controller\\recruteurController::contact'], [], [['text', '/recruteur/contact']], [], []],
    'recr_emplois' => [[], ['_controller' => 'App\\Controller\\recruteurController::emplois'], [], [['text', '/recruteur/emplois']], [], []],
    'recr_faq' => [[], ['_controller' => 'App\\Controller\\recruteurController::faq'], [], [['text', '/recruteur/faq']], [], []],
    'recr_galerie' => [[], ['_controller' => 'App\\Controller\\recruteurController::galerie'], [], [['text', '/recruteur/galerie']], [], []],
    'recr_offer' => [[], ['_controller' => 'App\\Controller\\recruteurController::offeritem'], [], [['text', '/recruteur/opportunite']], [], []],
    'recr_partenaire' => [[], ['_controller' => 'App\\Controller\\recruteurController::partenaire'], [], [['text', '/recruteur/partenaires']], [], []],
    'recr_podcast' => [[], ['_controller' => 'App\\Controller\\recruteurController::podcast'], [], [['text', '/recruteur/podcast-employabilite']], [], []],
    'recr_publication' => [[], ['_controller' => 'App\\Controller\\recruteurController::publication'], [], [['text', '/recruteur/publications']], [], []],
    'recr_stages' => [[], ['_controller' => 'App\\Controller\\recruteurController::stages'], [], [['text', '/recruteur/stages']], [], []],
    'recr_trucs' => [[], ['_controller' => 'App\\Controller\\recruteurController::trucs'], [], [['text', '/recruteur/trucs-et-astuces']], [], []],
    'api_entrypoint' => [['index', '_format'], ['_controller' => 'api_platform.action.entrypoint', '_format' => '', '_api_respond' => 'true', 'index' => 'index'], ['index' => 'index'], [['variable', '.', '[^/]++', '_format', true], ['variable', '/', 'index', 'index', true], ['text', '/api']], [], []],
    'api_doc' => [['_format'], ['_controller' => 'api_platform.action.documentation', '_format' => '', '_api_respond' => 'true'], [], [['variable', '.', '[^/]++', '_format', true], ['text', '/api/docs']], [], []],
    'api_jsonld_context' => [['shortName', '_format'], ['_controller' => 'api_platform.jsonld.action.context', '_format' => 'jsonld', '_api_respond' => 'true'], ['shortName' => '.+'], [['variable', '.', '[^/]++', '_format', true], ['variable', '/', '.+', 'shortName', true], ['text', '/api/contexts']], [], []],
    'api_articles_get_collection' => [['_format'], ['_controller' => 'api_platform.action.get_collection', '_format' => null, '_api_resource_class' => 'App\\Entity\\Articles', '_api_collection_operation_name' => 'get'], [], [['variable', '.', '[^/]++', '_format', true], ['text', '/api/articles']], [], []],
    'api_articles_post_collection' => [['_format'], ['_controller' => 'api_platform.action.post_collection', '_format' => null, '_api_resource_class' => 'App\\Entity\\Articles', '_api_collection_operation_name' => 'post'], [], [['variable', '.', '[^/]++', '_format', true], ['text', '/api/articles']], [], []],
    'api_articles_get_item' => [['id', '_format'], ['_controller' => 'api_platform.action.get_item', '_format' => null, '_api_resource_class' => 'App\\Entity\\Articles', '_api_item_operation_name' => 'get'], [], [['variable', '.', '[^/]++', '_format', true], ['variable', '/', '[^/\\.]++', 'id', true], ['text', '/api/articles']], [], []],
    'api_articles_delete_item' => [['id', '_format'], ['_controller' => 'api_platform.action.delete_item', '_format' => null, '_api_resource_class' => 'App\\Entity\\Articles', '_api_item_operation_name' => 'delete'], [], [['variable', '.', '[^/]++', '_format', true], ['variable', '/', '[^/\\.]++', 'id', true], ['text', '/api/articles']], [], []],
    'api_articles_put_item' => [['id', '_format'], ['_controller' => 'api_platform.action.put_item', '_format' => null, '_api_resource_class' => 'App\\Entity\\Articles', '_api_item_operation_name' => 'put'], [], [['variable', '.', '[^/]++', '_format', true], ['variable', '/', '[^/\\.]++', 'id', true], ['text', '/api/articles']], [], []],
    'api_articles_patch_item' => [['id', '_format'], ['_controller' => 'api_platform.action.patch_item', '_format' => null, '_api_resource_class' => 'App\\Entity\\Articles', '_api_item_operation_name' => 'patch'], [], [['variable', '.', '[^/]++', '_format', true], ['variable', '/', '[^/\\.]++', 'id', true], ['text', '/api/articles']], [], []],
    'api_faqs_get_collection' => [['_format'], ['_controller' => 'api_platform.action.get_collection', '_format' => null, '_api_resource_class' => 'App\\Entity\\Faq', '_api_collection_operation_name' => 'get'], [], [['variable', '.', '[^/]++', '_format', true], ['text', '/api/faqs']], [], []],
    'api_faqs_post_collection' => [['_format'], ['_controller' => 'api_platform.action.post_collection', '_format' => null, '_api_resource_class' => 'App\\Entity\\Faq', '_api_collection_operation_name' => 'post'], [], [['variable', '.', '[^/]++', '_format', true], ['text', '/api/faqs']], [], []],
    'api_faqs_get_item' => [['id', '_format'], ['_controller' => 'api_platform.action.get_item', '_format' => null, '_api_resource_class' => 'App\\Entity\\Faq', '_api_item_operation_name' => 'get'], [], [['variable', '.', '[^/]++', '_format', true], ['variable', '/', '[^/\\.]++', 'id', true], ['text', '/api/faqs']], [], []],
    'api_faqs_delete_item' => [['id', '_format'], ['_controller' => 'api_platform.action.delete_item', '_format' => null, '_api_resource_class' => 'App\\Entity\\Faq', '_api_item_operation_name' => 'delete'], [], [['variable', '.', '[^/]++', '_format', true], ['variable', '/', '[^/\\.]++', 'id', true], ['text', '/api/faqs']], [], []],
    'api_faqs_put_item' => [['id', '_format'], ['_controller' => 'api_platform.action.put_item', '_format' => null, '_api_resource_class' => 'App\\Entity\\Faq', '_api_item_operation_name' => 'put'], [], [['variable', '.', '[^/]++', '_format', true], ['variable', '/', '[^/\\.]++', 'id', true], ['text', '/api/faqs']], [], []],
    'api_faqs_patch_item' => [['id', '_format'], ['_controller' => 'api_platform.action.patch_item', '_format' => null, '_api_resource_class' => 'App\\Entity\\Faq', '_api_item_operation_name' => 'patch'], [], [['variable', '.', '[^/]++', '_format', true], ['variable', '/', '[^/\\.]++', 'id', true], ['text', '/api/faqs']], [], []],
    'api_faq_categories_get_collection' => [['_format'], ['_controller' => 'api_platform.action.get_collection', '_format' => null, '_api_resource_class' => 'App\\Entity\\FaqCategorie', '_api_collection_operation_name' => 'get'], [], [['variable', '.', '[^/]++', '_format', true], ['text', '/api/faq_categories']], [], []],
    'api_faq_categories_post_collection' => [['_format'], ['_controller' => 'api_platform.action.post_collection', '_format' => null, '_api_resource_class' => 'App\\Entity\\FaqCategorie', '_api_collection_operation_name' => 'post'], [], [['variable', '.', '[^/]++', '_format', true], ['text', '/api/faq_categories']], [], []],
    'api_faq_categories_get_item' => [['id', '_format'], ['_controller' => 'api_platform.action.get_item', '_format' => null, '_api_resource_class' => 'App\\Entity\\FaqCategorie', '_api_item_operation_name' => 'get'], [], [['variable', '.', '[^/]++', '_format', true], ['variable', '/', '[^/\\.]++', 'id', true], ['text', '/api/faq_categories']], [], []],
    'api_faq_categories_delete_item' => [['id', '_format'], ['_controller' => 'api_platform.action.delete_item', '_format' => null, '_api_resource_class' => 'App\\Entity\\FaqCategorie', '_api_item_operation_name' => 'delete'], [], [['variable', '.', '[^/]++', '_format', true], ['variable', '/', '[^/\\.]++', 'id', true], ['text', '/api/faq_categories']], [], []],
    'api_faq_categories_put_item' => [['id', '_format'], ['_controller' => 'api_platform.action.put_item', '_format' => null, '_api_resource_class' => 'App\\Entity\\FaqCategorie', '_api_item_operation_name' => 'put'], [], [['variable', '.', '[^/]++', '_format', true], ['variable', '/', '[^/\\.]++', 'id', true], ['text', '/api/faq_categories']], [], []],
    'api_faq_categories_patch_item' => [['id', '_format'], ['_controller' => 'api_platform.action.patch_item', '_format' => null, '_api_resource_class' => 'App\\Entity\\FaqCategorie', '_api_item_operation_name' => 'patch'], [], [['variable', '.', '[^/]++', '_format', true], ['variable', '/', '[^/\\.]++', 'id', true], ['text', '/api/faq_categories']], [], []],
    'api_galeries_get_collection' => [['_format'], ['_controller' => 'api_platform.action.get_collection', '_format' => null, '_api_resource_class' => 'App\\Entity\\Galery', '_api_collection_operation_name' => 'get'], [], [['variable', '.', '[^/]++', '_format', true], ['text', '/api/galeries']], [], []],
    'api_galeries_post_collection' => [['_format'], ['_controller' => 'api_platform.action.post_collection', '_format' => null, '_api_resource_class' => 'App\\Entity\\Galery', '_api_collection_operation_name' => 'post'], [], [['variable', '.', '[^/]++', '_format', true], ['text', '/api/galeries']], [], []],
    'api_galeries_get_item' => [['id', '_format'], ['_controller' => 'api_platform.action.get_item', '_format' => null, '_api_resource_class' => 'App\\Entity\\Galery', '_api_item_operation_name' => 'get'], [], [['variable', '.', '[^/]++', '_format', true], ['variable', '/', '[^/\\.]++', 'id', true], ['text', '/api/galeries']], [], []],
    'api_galeries_delete_item' => [['id', '_format'], ['_controller' => 'api_platform.action.delete_item', '_format' => null, '_api_resource_class' => 'App\\Entity\\Galery', '_api_item_operation_name' => 'delete'], [], [['variable', '.', '[^/]++', '_format', true], ['variable', '/', '[^/\\.]++', 'id', true], ['text', '/api/galeries']], [], []],
    'api_galeries_put_item' => [['id', '_format'], ['_controller' => 'api_platform.action.put_item', '_format' => null, '_api_resource_class' => 'App\\Entity\\Galery', '_api_item_operation_name' => 'put'], [], [['variable', '.', '[^/]++', '_format', true], ['variable', '/', '[^/\\.]++', 'id', true], ['text', '/api/galeries']], [], []],
    'api_galeries_patch_item' => [['id', '_format'], ['_controller' => 'api_platform.action.patch_item', '_format' => null, '_api_resource_class' => 'App\\Entity\\Galery', '_api_item_operation_name' => 'patch'], [], [['variable', '.', '[^/]++', '_format', true], ['variable', '/', '[^/\\.]++', 'id', true], ['text', '/api/galeries']], [], []],
    'api_media_objects_post_collection' => [['_format'], ['_controller' => 'App\\Controller\\CreateMediaObjectAction', '_format' => null, '_api_resource_class' => 'App\\Entity\\MediaObject', '_api_collection_operation_name' => 'post'], [], [['variable', '.', '[^/]++', '_format', true], ['text', '/api/media_objects']], [], []],
    'api_media_objects_get_collection' => [['_format'], ['_controller' => 'api_platform.action.get_collection', '_format' => null, '_api_resource_class' => 'App\\Entity\\MediaObject', '_api_collection_operation_name' => 'get'], [], [['variable', '.', '[^/]++', '_format', true], ['text', '/api/media_objects']], [], []],
    'api_media_objects_get_item' => [['id', '_format'], ['_controller' => 'api_platform.action.get_item', '_format' => null, '_api_resource_class' => 'App\\Entity\\MediaObject', '_api_item_operation_name' => 'get'], [], [['variable', '.', '[^/]++', '_format', true], ['variable', '/', '[^/\\.]++', 'id', true], ['text', '/api/media_objects']], [], []],
    'api_messages_get_collection' => [['_format'], ['_controller' => 'api_platform.action.get_collection', '_format' => null, '_api_resource_class' => 'App\\Entity\\Message', '_api_collection_operation_name' => 'get'], [], [['variable', '.', '[^/]++', '_format', true], ['text', '/api/messages']], [], []],
    'api_messages_post_collection' => [['_format'], ['_controller' => 'api_platform.action.post_collection', '_format' => null, '_api_resource_class' => 'App\\Entity\\Message', '_api_collection_operation_name' => 'post'], [], [['variable', '.', '[^/]++', '_format', true], ['text', '/api/messages']], [], []],
    'api_messages_get_item' => [['id', '_format'], ['_controller' => 'api_platform.action.get_item', '_format' => null, '_api_resource_class' => 'App\\Entity\\Message', '_api_item_operation_name' => 'get'], [], [['variable', '.', '[^/]++', '_format', true], ['variable', '/', '[^/\\.]++', 'id', true], ['text', '/api/messages']], [], []],
    'api_messages_delete_item' => [['id', '_format'], ['_controller' => 'api_platform.action.delete_item', '_format' => null, '_api_resource_class' => 'App\\Entity\\Message', '_api_item_operation_name' => 'delete'], [], [['variable', '.', '[^/]++', '_format', true], ['variable', '/', '[^/\\.]++', 'id', true], ['text', '/api/messages']], [], []],
    'api_messages_put_item' => [['id', '_format'], ['_controller' => 'api_platform.action.put_item', '_format' => null, '_api_resource_class' => 'App\\Entity\\Message', '_api_item_operation_name' => 'put'], [], [['variable', '.', '[^/]++', '_format', true], ['variable', '/', '[^/\\.]++', 'id', true], ['text', '/api/messages']], [], []],
    'api_messages_patch_item' => [['id', '_format'], ['_controller' => 'api_platform.action.patch_item', '_format' => null, '_api_resource_class' => 'App\\Entity\\Message', '_api_item_operation_name' => 'patch'], [], [['variable', '.', '[^/]++', '_format', true], ['variable', '/', '[^/\\.]++', 'id', true], ['text', '/api/messages']], [], []],
    'api_newsletter_messages_get_collection' => [['_format'], ['_controller' => 'api_platform.action.get_collection', '_format' => null, '_api_resource_class' => 'App\\Entity\\NewsletterMessage', '_api_collection_operation_name' => 'get'], [], [['variable', '.', '[^/]++', '_format', true], ['text', '/api/newsletter_messages']], [], []],
    'api_newsletter_messages_post_collection' => [['_format'], ['_controller' => 'api_platform.action.post_collection', '_format' => null, '_api_resource_class' => 'App\\Entity\\NewsletterMessage', '_api_collection_operation_name' => 'post'], [], [['variable', '.', '[^/]++', '_format', true], ['text', '/api/newsletter_messages']], [], []],
    'api_newsletter_messages_get_item' => [['id', '_format'], ['_controller' => 'api_platform.action.get_item', '_format' => null, '_api_resource_class' => 'App\\Entity\\NewsletterMessage', '_api_item_operation_name' => 'get'], [], [['variable', '.', '[^/]++', '_format', true], ['variable', '/', '[^/\\.]++', 'id', true], ['text', '/api/newsletter_messages']], [], []],
    'api_newsletter_messages_delete_item' => [['id', '_format'], ['_controller' => 'api_platform.action.delete_item', '_format' => null, '_api_resource_class' => 'App\\Entity\\NewsletterMessage', '_api_item_operation_name' => 'delete'], [], [['variable', '.', '[^/]++', '_format', true], ['variable', '/', '[^/\\.]++', 'id', true], ['text', '/api/newsletter_messages']], [], []],
    'api_newsletter_messages_put_item' => [['id', '_format'], ['_controller' => 'api_platform.action.put_item', '_format' => null, '_api_resource_class' => 'App\\Entity\\NewsletterMessage', '_api_item_operation_name' => 'put'], [], [['variable', '.', '[^/]++', '_format', true], ['variable', '/', '[^/\\.]++', 'id', true], ['text', '/api/newsletter_messages']], [], []],
    'api_newsletter_messages_patch_item' => [['id', '_format'], ['_controller' => 'api_platform.action.patch_item', '_format' => null, '_api_resource_class' => 'App\\Entity\\NewsletterMessage', '_api_item_operation_name' => 'patch'], [], [['variable', '.', '[^/]++', '_format', true], ['variable', '/', '[^/\\.]++', 'id', true], ['text', '/api/newsletter_messages']], [], []],
    'api_opportunities_get_collection' => [['_format'], ['_controller' => 'api_platform.action.get_collection', '_format' => null, '_api_resource_class' => 'App\\Entity\\Opportunities', '_api_collection_operation_name' => 'get'], [], [['variable', '.', '[^/]++', '_format', true], ['text', '/api/opportunities']], [], []],
    'api_opportunities_post_collection' => [['_format'], ['_controller' => 'api_platform.action.post_collection', '_format' => null, '_api_resource_class' => 'App\\Entity\\Opportunities', '_api_collection_operation_name' => 'post'], [], [['variable', '.', '[^/]++', '_format', true], ['text', '/api/opportunities']], [], []],
    'api_opportunities_get_item' => [['id', '_format'], ['_controller' => 'api_platform.action.get_item', '_format' => null, '_api_resource_class' => 'App\\Entity\\Opportunities', '_api_item_operation_name' => 'get'], [], [['variable', '.', '[^/]++', '_format', true], ['variable', '/', '[^/\\.]++', 'id', true], ['text', '/api/opportunities']], [], []],
    'api_opportunities_delete_item' => [['id', '_format'], ['_controller' => 'api_platform.action.delete_item', '_format' => null, '_api_resource_class' => 'App\\Entity\\Opportunities', '_api_item_operation_name' => 'delete'], [], [['variable', '.', '[^/]++', '_format', true], ['variable', '/', '[^/\\.]++', 'id', true], ['text', '/api/opportunities']], [], []],
    'api_opportunities_put_item' => [['id', '_format'], ['_controller' => 'api_platform.action.put_item', '_format' => null, '_api_resource_class' => 'App\\Entity\\Opportunities', '_api_item_operation_name' => 'put'], [], [['variable', '.', '[^/]++', '_format', true], ['variable', '/', '[^/\\.]++', 'id', true], ['text', '/api/opportunities']], [], []],
    'api_opportunities_patch_item' => [['id', '_format'], ['_controller' => 'api_platform.action.patch_item', '_format' => null, '_api_resource_class' => 'App\\Entity\\Opportunities', '_api_item_operation_name' => 'patch'], [], [['variable', '.', '[^/]++', '_format', true], ['variable', '/', '[^/\\.]++', 'id', true], ['text', '/api/opportunities']], [], []],
    'api_partenaires_get_collection' => [['_format'], ['_controller' => 'api_platform.action.get_collection', '_format' => null, '_api_resource_class' => 'App\\Entity\\Partenaire', '_api_collection_operation_name' => 'get'], [], [['variable', '.', '[^/]++', '_format', true], ['text', '/api/partenaires']], [], []],
    'api_partenaires_post_collection' => [['_format'], ['_controller' => 'api_platform.action.post_collection', '_format' => null, '_api_resource_class' => 'App\\Entity\\Partenaire', '_api_collection_operation_name' => 'post'], [], [['variable', '.', '[^/]++', '_format', true], ['text', '/api/partenaires']], [], []],
    'api_partenaires_get_item' => [['id', '_format'], ['_controller' => 'api_platform.action.get_item', '_format' => null, '_api_resource_class' => 'App\\Entity\\Partenaire', '_api_item_operation_name' => 'get'], [], [['variable', '.', '[^/]++', '_format', true], ['variable', '/', '[^/\\.]++', 'id', true], ['text', '/api/partenaires']], [], []],
    'api_partenaires_delete_item' => [['id', '_format'], ['_controller' => 'api_platform.action.delete_item', '_format' => null, '_api_resource_class' => 'App\\Entity\\Partenaire', '_api_item_operation_name' => 'delete'], [], [['variable', '.', '[^/]++', '_format', true], ['variable', '/', '[^/\\.]++', 'id', true], ['text', '/api/partenaires']], [], []],
    'api_partenaires_put_item' => [['id', '_format'], ['_controller' => 'api_platform.action.put_item', '_format' => null, '_api_resource_class' => 'App\\Entity\\Partenaire', '_api_item_operation_name' => 'put'], [], [['variable', '.', '[^/]++', '_format', true], ['variable', '/', '[^/\\.]++', 'id', true], ['text', '/api/partenaires']], [], []],
    'api_partenaires_patch_item' => [['id', '_format'], ['_controller' => 'api_platform.action.patch_item', '_format' => null, '_api_resource_class' => 'App\\Entity\\Partenaire', '_api_item_operation_name' => 'patch'], [], [['variable', '.', '[^/]++', '_format', true], ['variable', '/', '[^/\\.]++', 'id', true], ['text', '/api/partenaires']], [], []],
    'api_podcasts_get_collection' => [['_format'], ['_controller' => 'api_platform.action.get_collection', '_format' => null, '_api_resource_class' => 'App\\Entity\\Podcast', '_api_collection_operation_name' => 'get'], [], [['variable', '.', '[^/]++', '_format', true], ['text', '/api/podcasts']], [], []],
    'api_podcasts_post_collection' => [['_format'], ['_controller' => 'api_platform.action.post_collection', '_format' => null, '_api_resource_class' => 'App\\Entity\\Podcast', '_api_collection_operation_name' => 'post'], [], [['variable', '.', '[^/]++', '_format', true], ['text', '/api/podcasts']], [], []],
    'api_podcasts_get_item' => [['id', '_format'], ['_controller' => 'api_platform.action.get_item', '_format' => null, '_api_resource_class' => 'App\\Entity\\Podcast', '_api_item_operation_name' => 'get'], [], [['variable', '.', '[^/]++', '_format', true], ['variable', '/', '[^/\\.]++', 'id', true], ['text', '/api/podcasts']], [], []],
    'api_podcasts_delete_item' => [['id', '_format'], ['_controller' => 'api_platform.action.delete_item', '_format' => null, '_api_resource_class' => 'App\\Entity\\Podcast', '_api_item_operation_name' => 'delete'], [], [['variable', '.', '[^/]++', '_format', true], ['variable', '/', '[^/\\.]++', 'id', true], ['text', '/api/podcasts']], [], []],
    'api_podcasts_put_item' => [['id', '_format'], ['_controller' => 'api_platform.action.put_item', '_format' => null, '_api_resource_class' => 'App\\Entity\\Podcast', '_api_item_operation_name' => 'put'], [], [['variable', '.', '[^/]++', '_format', true], ['variable', '/', '[^/\\.]++', 'id', true], ['text', '/api/podcasts']], [], []],
    'api_podcasts_patch_item' => [['id', '_format'], ['_controller' => 'api_platform.action.patch_item', '_format' => null, '_api_resource_class' => 'App\\Entity\\Podcast', '_api_item_operation_name' => 'patch'], [], [['variable', '.', '[^/]++', '_format', true], ['variable', '/', '[^/\\.]++', 'id', true], ['text', '/api/podcasts']], [], []],
    'api_users_get_collection' => [['_format'], ['_controller' => 'api_platform.action.get_collection', '_format' => null, '_api_resource_class' => 'App\\Entity\\Users', '_api_collection_operation_name' => 'get'], [], [['variable', '.', '[^/]++', '_format', true], ['text', '/api/users']], [], []],
    'api_users_post_collection' => [['_format'], ['_controller' => 'api_platform.action.post_collection', '_format' => null, '_api_resource_class' => 'App\\Entity\\Users', '_api_collection_operation_name' => 'post'], [], [['variable', '.', '[^/]++', '_format', true], ['text', '/api/users']], [], []],
    'api_users_get_item' => [['id', '_format'], ['_controller' => 'api_platform.action.get_item', '_format' => null, '_api_resource_class' => 'App\\Entity\\Users', '_api_item_operation_name' => 'get'], [], [['variable', '.', '[^/]++', '_format', true], ['variable', '/', '[^/\\.]++', 'id', true], ['text', '/api/users']], [], []],
    'api_users_delete_item' => [['id', '_format'], ['_controller' => 'api_platform.action.delete_item', '_format' => null, '_api_resource_class' => 'App\\Entity\\Users', '_api_item_operation_name' => 'delete'], [], [['variable', '.', '[^/]++', '_format', true], ['variable', '/', '[^/\\.]++', 'id', true], ['text', '/api/users']], [], []],
    'api_users_put_item' => [['id', '_format'], ['_controller' => 'api_platform.action.put_item', '_format' => null, '_api_resource_class' => 'App\\Entity\\Users', '_api_item_operation_name' => 'put'], [], [['variable', '.', '[^/]++', '_format', true], ['variable', '/', '[^/\\.]++', 'id', true], ['text', '/api/users']], [], []],
    'api_users_patch_item' => [['id', '_format'], ['_controller' => 'api_platform.action.patch_item', '_format' => null, '_api_resource_class' => 'App\\Entity\\Users', '_api_item_operation_name' => 'patch'], [], [['variable', '.', '[^/]++', '_format', true], ['variable', '/', '[^/\\.]++', 'id', true], ['text', '/api/users']], [], []],
    'api_login_check' => [[], [], [], [['text', '/api/login']], [], []],
];
