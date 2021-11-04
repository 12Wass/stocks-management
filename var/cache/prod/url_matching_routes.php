<?php

/**
 * This file has been auto-generated
 * by the Symfony Routing Component.
 */

return [
    false, // $matchHost
    [ // $staticRoutes
        '/flux' => [[['_route' => 'flux', '_controller' => 'App\\Controller\\FluxController::index'], null, null, null, false, false, null]],
        '/' => [[['_route' => 'home', '_controller' => 'App\\Controller\\HomeController::index'], null, null, null, false, false, null]],
        '/data_management' => [[['_route' => 'data_management', '_controller' => 'App\\Controller\\HomeController::data_management'], null, null, null, false, false, null]],
        '/label' => [[['_route' => 'label_index', '_controller' => 'App\\Controller\\LabelController::index'], null, null, null, false, false, null]],
        '/label/generateWord' => [[['_route' => 'generate_word', '_controller' => 'App\\Controller\\LabelController::generateWordFile'], null, null, null, false, false, null]],
        '/label/download' => [[['_route' => 'download_label', '_controller' => 'App\\Controller\\LabelController::downloadLabels'], null, null, null, false, false, null]],
        '/product' => [[['_route' => 'product_index', '_controller' => 'App\\Controller\\ProductController::index'], null, ['GET' => 0], null, true, false, null]],
        '/product/entries_exits' => [[['_route' => 'product_es', '_controller' => 'App\\Controller\\ProductController::es'], null, ['GET' => 0, 'POST' => 1], null, false, false, null]],
        '/product/new' => [[['_route' => 'product_new', '_controller' => 'App\\Controller\\ProductController::new'], null, ['GET' => 0, 'POST' => 1], null, false, false, null]],
        '/product/search' => [[['_route' => 'product_search', '_controller' => 'App\\Controller\\ProductController::searchByBarcode'], null, ['POST' => 0, 'GET' => 1], null, false, false, null]],
        '/product/generate_barcode' => [[['_route' => 'generate_barcode', '_controller' => 'App\\Controller\\ProductController::generateBarcode'], null, ['POST' => 0, 'GET' => 1], null, false, false, null]],
        '/provider' => [[['_route' => 'provider_index', '_controller' => 'App\\Controller\\ProviderController::index'], null, ['GET' => 0], null, true, false, null]],
        '/provider/new' => [[['_route' => 'provider_new', '_controller' => 'App\\Controller\\ProviderController::new'], null, ['GET' => 0, 'POST' => 1], null, false, false, null]],
        '/register' => [[['_route' => 'app_register', '_controller' => 'App\\Controller\\RegistrationController::register'], null, null, null, false, false, null]],
        '/login' => [[['_route' => 'app_login', '_controller' => 'App\\Controller\\SecurityController::login'], null, null, null, false, false, null]],
        '/logout' => [[['_route' => 'app_logout', '_controller' => 'App\\Controller\\SecurityController::logout'], null, null, null, false, false, null]],
        '/user' => [[['_route' => 'user_index', '_controller' => 'App\\Controller\\UserController::index'], null, ['GET' => 0], null, true, false, null]],
        '/user/new' => [[['_route' => 'user_new', '_controller' => 'App\\Controller\\UserController::new'], null, ['GET' => 0, 'POST' => 1], null, false, false, null]],
    ],
    [ // $regexpList
        0 => '{^(?'
                .'|/pro(?'
                    .'|duct/([^/]++)(?'
                        .'|(*:30)'
                        .'|/edit(*:42)'
                        .'|(*:49)'
                    .')'
                    .'|vider/([^/]++)(?'
                        .'|(*:74)'
                        .'|/edit(*:86)'
                        .'|(*:93)'
                    .')'
                .')'
                .'|/user/([^/]++)(?'
                    .'|(*:119)'
                    .'|/edit(*:132)'
                    .'|(*:140)'
                .')'
            .')/?$}sDu',
    ],
    [ // $dynamicRoutes
        30 => [[['_route' => 'product_show', '_controller' => 'App\\Controller\\ProductController::show'], ['id'], ['GET' => 0], null, false, true, null]],
        42 => [[['_route' => 'product_edit', '_controller' => 'App\\Controller\\ProductController::edit'], ['id'], ['GET' => 0, 'POST' => 1], null, false, false, null]],
        49 => [[['_route' => 'product_delete', '_controller' => 'App\\Controller\\ProductController::delete'], ['id'], ['POST' => 0], null, false, true, null]],
        74 => [[['_route' => 'provider_show', '_controller' => 'App\\Controller\\ProviderController::show'], ['id'], ['GET' => 0], null, false, true, null]],
        86 => [[['_route' => 'provider_edit', '_controller' => 'App\\Controller\\ProviderController::edit'], ['id'], ['GET' => 0, 'POST' => 1], null, false, false, null]],
        93 => [[['_route' => 'provider_delete', '_controller' => 'App\\Controller\\ProviderController::delete'], ['id'], ['POST' => 0], null, false, true, null]],
        119 => [[['_route' => 'user_show', '_controller' => 'App\\Controller\\UserController::show'], ['id'], ['GET' => 0], null, false, true, null]],
        132 => [[['_route' => 'user_edit', '_controller' => 'App\\Controller\\UserController::edit'], ['id'], ['GET' => 0, 'POST' => 1], null, false, false, null]],
        140 => [
            [['_route' => 'user_delete', '_controller' => 'App\\Controller\\UserController::delete'], ['id'], ['POST' => 0], null, false, true, null],
            [null, null, null, null, false, false, 0],
        ],
    ],
    null, // $checkCondition
];
