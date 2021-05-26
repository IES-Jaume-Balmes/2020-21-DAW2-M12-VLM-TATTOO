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
    'calendari' => [[], ['_controller' => 'App\\Controller\\CalendariController::index'], [], [['text', '/calendari']], [], []],
    'cliente' => [[], ['_controller' => 'App\\Controller\\ClienteController::index'], [], [['text', '/cliente']], [], []],
    'dashboard' => [[], ['_controller' => 'App\\Controller\\DashboardController::index'], [], [['text', '/']], [], []],
    'descripcion' => [[], ['_controller' => 'App\\Controller\\DescripcionController::index'], [], [['text', '/descripcion']], [], []],
    'pagamiento' => [[], ['_controller' => 'App\\Controller\\PagamientoController::index'], [], [['text', '/pagamiento']], [], []],
    'portfolio' => [[], ['_controller' => 'App\\Controller\\PortfolioController::index'], [], [['text', '/portfolio']], [], []],
    'reserva' => [[], ['_controller' => 'App\\Controller\\ReservaController::index'], [], [['text', '/reserva']], [], []],
    'app_reserva_update' => [['id'], ['_controller' => 'App\\Controller\\ReservaController::update'], [], [['variable', '/', '[^/]++', 'id', true], ['text', '/reserva/edit']], [], []],
    'app_reserva_reservatimes' => [[], ['_controller' => 'App\\Controller\\ReservaController::reservaTimes'], [], [['text', '/reserva-times']], [], []],
    'app_reserva_delete' => [['id'], ['_controller' => 'App\\Controller\\ReservaController::delete'], [], [['variable', '/', '[^/]++', 'id', true], ['text', '/reserva/delete']], [], []],
    'success' => [[], ['_controller' => 'App\\Controller\\ReservaController::success'], [], [['text', '/success']], [], []],
    'error' => [[], ['_controller' => 'App\\Controller\\ReservaController::error'], [], [['text', '/error']], [], []],
    'checkout' => [[], ['_controller' => 'App\\Controller\\ReservaController::checkout'], [], [['text', '/create-checkout-session']], [], []],
    'app_login' => [[], ['_controller' => 'App\\Controller\\SecurityController::login'], [], [['text', '/login']], [], []],
    'app_logout' => [[], ['_controller' => 'App\\Controller\\SecurityController::logout'], [], [['text', '/logout']], [], []],
    'tatuador' => [[], ['_controller' => 'App\\Controller\\TatuadorController::index'], [], [['text', '/tatuador']], [], []],
    'videos' => [[], ['_controller' => 'App\\Controller\\VideosController::index'], [], [['text', '/videos']], [], []],
];
