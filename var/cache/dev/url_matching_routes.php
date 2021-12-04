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
        '/admin/video' => [[['_route' => 'admin_video', '_controller' => 'App\\Controller\\AdminController::index'], null, ['GET' => 0, 'POST' => 1], null, false, false, null]],
        '/admin/user' => [[['_route' => 'admin_user_index', '_controller' => 'App\\Controller\\AdminController::indexUser'], null, ['GET' => 0, 'POST' => 1], null, false, false, null]],
        '/comment' => [[['_route' => 'comment_index', '_controller' => 'App\\Controller\\CommentController::index'], null, ['GET' => 0], null, true, false, null]],
        '/comment/new' => [[['_route' => 'comment_new', '_controller' => 'App\\Controller\\CommentController::new'], null, ['GET' => 0, 'POST' => 1], null, false, false, null]],
        '/' => [[['_route' => 'index', '_controller' => 'App\\Controller\\IndexController::index'], null, ['GET' => 0], null, false, false, null]],
        '/register' => [[['_route' => 'app_register', '_controller' => 'App\\Controller\\RegistrationController::register'], null, null, null, false, false, null]],
        '/login' => [[['_route' => 'app_login', '_controller' => 'App\\Controller\\SecurityController::login'], null, null, null, false, false, null]],
        '/logout' => [[['_route' => 'app_logout', '_controller' => 'App\\Controller\\SecurityController::logout'], null, null, null, false, false, null]],
        '/user' => [[['_route' => 'user_index', '_controller' => 'App\\Controller\\UserController::index'], null, ['GET' => 0], null, true, false, null]],
        '/video' => [[['_route' => 'video_index', '_controller' => 'App\\Controller\\VideoController::index'], null, ['GET' => 0], null, true, false, null]],
        '/video/trend' => [[['_route' => 'video_trend', '_controller' => 'App\\Controller\\VideoController::trend'], null, ['GET' => 0], null, false, false, null]],
        '/video/new' => [[['_route' => 'video_new', '_controller' => 'App\\Controller\\VideoController::new'], null, ['GET' => 0, 'POST' => 1], null, false, false, null]],
        '/video/followed' => [[['_route' => 'video_followed', '_controller' => 'App\\Controller\\VideoController::followed'], null, ['GET' => 0], null, false, false, null]],
        '/video/discovery' => [[['_route' => 'video_discovery', '_controller' => 'App\\Controller\\VideoController::discovery'], null, ['GET' => 0], null, false, false, null]],
    ],
    [ // $regexpList
        0 => '{^(?'
                .'|/_(?'
                    .'|wdt/([^/]++)(*:24)'
                    .'|profiler/([^/]++)(?'
                        .'|/(?'
                            .'|search/results(*:69)'
                            .'|router(*:82)'
                            .'|exception(?'
                                .'|(*:101)'
                                .'|\\.css(*:114)'
                            .')'
                        .')'
                        .'|(*:124)'
                    .')'
                    .'|error/(\\d+)(?:\\.([^/]++))?(*:159)'
                .')'
                .'|/admin/(?'
                    .'|video/([^/]++)(*:192)'
                    .'|user/([^/]++)(*:213)'
                .')'
                .'|/comment/([^/]++)(?'
                    .'|(*:242)'
                    .'|/edit(*:255)'
                    .'|(*:263)'
                .')'
                .'|/user/(?'
                    .'|([^/]++)(*:289)'
                    .'|new(*:300)'
                    .'|([^/]++)(?'
                        .'|(*:319)'
                        .'|/(?'
                            .'|edit(*:335)'
                            .'|([^/]++)(*:351)'
                        .')'
                    .')'
                .')'
                .'|/video/(?'
                    .'|([^/]++)/delete(*:387)'
                    .'|add_view/([^/]++)(*:412)'
                    .'|([^/]++)(?'
                        .'|(*:431)'
                        .'|/edit(*:444)'
                    .')'
                .')'
            .')/?$}sDu',
    ],
    [ // $dynamicRoutes
        24 => [[['_route' => '_wdt', '_controller' => 'web_profiler.controller.profiler::toolbarAction'], ['token'], null, null, false, true, null]],
        69 => [[['_route' => '_profiler_search_results', '_controller' => 'web_profiler.controller.profiler::searchResultsAction'], ['token'], null, null, false, false, null]],
        82 => [[['_route' => '_profiler_router', '_controller' => 'web_profiler.controller.router::panelAction'], ['token'], null, null, false, false, null]],
        101 => [[['_route' => '_profiler_exception', '_controller' => 'web_profiler.controller.exception_panel::body'], ['token'], null, null, false, false, null]],
        114 => [[['_route' => '_profiler_exception_css', '_controller' => 'web_profiler.controller.exception_panel::stylesheet'], ['token'], null, null, false, false, null]],
        124 => [[['_route' => '_profiler', '_controller' => 'web_profiler.controller.profiler::panelAction'], ['token'], null, null, false, true, null]],
        159 => [[['_route' => '_preview_error', '_controller' => 'error_controller::preview', '_format' => 'html'], ['code', '_format'], null, null, false, true, null]],
        192 => [[['_route' => 'admin_video_show', '_controller' => 'App\\Controller\\AdminController::showVideo'], ['id'], ['GET' => 0], null, false, true, null]],
        213 => [[['_route' => 'admin_user_show', '_controller' => 'App\\Controller\\AdminController::showUser'], ['id'], ['GET' => 0, 'POST' => 1], null, true, true, null]],
        242 => [[['_route' => 'comment_show', '_controller' => 'App\\Controller\\CommentController::show'], ['id'], ['GET' => 0], null, false, true, null]],
        255 => [[['_route' => 'comment_edit', '_controller' => 'App\\Controller\\CommentController::edit'], ['id'], ['GET' => 0, 'POST' => 1], null, false, false, null]],
        263 => [[['_route' => 'comment_delete', '_controller' => 'App\\Controller\\CommentController::delete'], ['id'], ['POST' => 0], null, false, true, null]],
        289 => [[['_route' => 'user_delete', '_controller' => 'App\\Controller\\UserController::userDelete'], ['id'], ['POST' => 0], null, false, true, null]],
        300 => [[['_route' => 'user_new', '_controller' => 'App\\Controller\\UserController::new'], [], ['GET' => 0, 'POST' => 1], null, false, false, null]],
        319 => [[['_route' => 'user_show', '_controller' => 'App\\Controller\\UserController::show'], ['id'], ['GET' => 0, 'POST' => 1], null, false, true, null]],
        335 => [[['_route' => 'user_edit', '_controller' => 'App\\Controller\\UserController::edit'], ['id'], ['GET' => 0, 'POST' => 1], null, false, false, null]],
        351 => [[['_route' => 'user_follow', '_controller' => 'App\\Controller\\UserController::follow'], ['user', 'follow'], ['POST' => 0], null, true, true, null]],
        387 => [[['_route' => 'video_delete', '_controller' => 'App\\Controller\\VideoController::delete'], ['id'], ['POST' => 0], null, false, false, null]],
        412 => [[['_route' => 'video_add_view', '_controller' => 'App\\Controller\\VideoController::addView'], ['id'], ['GET' => 0], null, false, true, null]],
        431 => [[['_route' => 'video_show', '_controller' => 'App\\Controller\\VideoController::show'], ['id'], ['GET' => 0, 'POST' => 1], null, false, true, null]],
        444 => [
            [['_route' => 'video_edit', '_controller' => 'App\\Controller\\VideoController::edit'], ['id'], ['GET' => 0, 'POST' => 1], null, false, false, null],
            [null, null, null, null, false, false, 0],
        ],
    ],
    null, // $checkCondition
];
