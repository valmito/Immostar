<?php

/**
 * This file has been auto-generated
 * by the Symfony Routing Component.
 */

return [
    false, // $matchHost
    [ // $staticRoutes
        '/_profiler' => [[['_route' => '_profiler_home', '_controller' => 'web_profiler.controller.profiler::homeAction'], null, null, null, true, false, null]],
        '/_profiler/search' => [[['_route' => '_profiler_search', '_controller' => 'web_profiler.controller.profiler::searchAction'], null, null, null, false, false, null]],
        '/_profiler/search_bar' => [[['_route' => '_profiler_search_bar', '_controller' => 'web_profiler.controller.profiler::searchBarAction'], null, null, null, false, false, null]],
        '/_profiler/phpinfo' => [[['_route' => '_profiler_phpinfo', '_controller' => 'web_profiler.controller.profiler::phpinfoAction'], null, null, null, false, false, null]],
        '/_profiler/open' => [[['_route' => '_profiler_open_file', '_controller' => 'web_profiler.controller.profiler::openAction'], null, null, null, false, false, null]],
        '/bien/c' => [[['_route' => 'bien_c', '_controller' => 'App\\Controller\\BienController::index'], null, null, null, false, false, null]],
        '/bien/creerBien' => [[['_route' => 'creerBien', '_controller' => 'App\\Controller\\BienController::creerBien'], null, null, null, false, false, null]],
        '/bien/creerFormConnexionAction' => [[['_route' => 'creerFormConnexionActionBien', '_controller' => 'App\\Controller\\BienController::creerFormConnexionAction'], null, null, null, false, false, null]],
        '/bien/afficherBien' => [[['_route' => 'afficherBien', '_controller' => 'App\\Controller\\BienController::listerBienParCateg1'], null, null, null, false, false, null]],
        '/article/afficher' => [[['_route' => 'affichage_final', '_controller' => 'App\\Controller\\BienController::indexAction'], null, null, null, false, false, null]],
        '/type/c' => [[['_route' => 'type_c', '_controller' => 'App\\Controller\\TypeController::index'], null, null, null, false, false, null]],
        '/user/security' => [[['_route' => 'user_security', '_controller' => 'App\\Controller\\UserSecurityController::index'], null, null, null, false, false, null]],
        '/login' => [[['_route' => 'login', '_controller' => 'App\\Controller\\UserSecurityController::login'], null, null, null, false, false, null]],
        '/visite/c' => [[['_route' => 'visite_c', '_controller' => 'App\\Controller\\VisiteController::index'], null, null, null, false, false, null]],
        '/visiteur/c' => [[['_route' => 'visiteur_c', '_controller' => 'App\\Controller\\VisiteurController::index'], null, null, null, false, false, null]],
        '/' => [[['_route' => 'index', '_controller' => 'App\\Controller\\BienController ::index'], null, null, null, false, false, null]],
    ],
    [ // $regexpList
        0 => '{^(?'
                .'|/_(?'
                    .'|error/(\\d+)(?:\\.([^/]++))?(*:38)'
                    .'|wdt/([^/]++)(*:57)'
                    .'|profiler/([^/]++)(?'
                        .'|/(?'
                            .'|search/results(*:102)'
                            .'|router(*:116)'
                            .'|exception(?'
                                .'|(*:136)'
                                .'|\\.css(*:149)'
                            .')'
                        .')'
                        .'|(*:159)'
                    .')'
                .')'
                .'|/article/(?'
                    .'|update/(?'
                        .'|([^/]++)(*:199)'
                        .'|register(*:215)'
                    .')'
                    .'|verif/supprimer/([^/]++)(*:248)'
                    .'|supprimer/([^/]++)(*:274)'
                .')'
            .')/?$}sDu',
    ],
    [ // $dynamicRoutes
        38 => [[['_route' => '_twig_error_test', '_controller' => 'twig.controller.preview_error::previewErrorPageAction', '_format' => 'html'], ['code', '_format'], null, null, false, true, null]],
        57 => [[['_route' => '_wdt', '_controller' => 'web_profiler.controller.profiler::toolbarAction'], ['token'], null, null, false, true, null]],
        102 => [[['_route' => '_profiler_search_results', '_controller' => 'web_profiler.controller.profiler::searchResultsAction'], ['token'], null, null, false, false, null]],
        116 => [[['_route' => '_profiler_router', '_controller' => 'web_profiler.controller.router::panelAction'], ['token'], null, null, false, false, null]],
        136 => [[['_route' => '_profiler_exception', '_controller' => 'web_profiler.controller.exception::showAction'], ['token'], null, null, false, false, null]],
        149 => [[['_route' => '_profiler_exception_css', '_controller' => 'web_profiler.controller.exception::cssAction'], ['token'], null, null, false, false, null]],
        159 => [[['_route' => '_profiler', '_controller' => 'web_profiler.controller.profiler::panelAction'], ['token'], null, null, false, true, null]],
        199 => [[['_route' => 'upd_route', '_controller' => 'App\\Controller\\BienController::updateAction'], ['id'], null, null, false, true, null]],
        215 => [[['_route' => 'r_register', '_controller' => 'App\\Controller\\BienController::register'], [], null, null, false, false, null]],
        248 => [[['_route' => 'verif_del_art', '_controller' => 'App\\Controller\\BienController::deleteVerif'], ['id'], null, null, false, true, null]],
        274 => [
            [['_route' => 'del_art', '_controller' => 'App\\Controller\\BienController::deleterArticle'], ['id'], null, null, false, true, null],
            [null, null, null, null, false, false, 0],
        ],
    ],
    null, // $checkCondition
];
