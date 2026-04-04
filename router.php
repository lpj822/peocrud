<?php
/**
 * This router prase the url and load it's corresponding controller.
 *
 * @author : Lahiru Jayakody
 * Project : PEO PHP CRUD
 */

$uri = parse_url($_SERVER['REQUEST_URI'])['path'];

$routes = [
'/index' => 'controller/index.php',
'/about' => 'controller/about.php',
'/contact' => 'controller/contact.php' ];

/**
 * Map the router to it's corresponding controller.
 *
 * @param $uri
 * @param $routes
 * @return void
 */
function routeToController ( $uri, $routes )
{
    if (array_key_exists($uri, $routes)) {

        require $routes[$uri];

    } else {

        routeAbort();

    }
}


/**
 * Abort invalid routes
 *
 * @param $response_code
 * @return void
 */
function routeAbort ( $response_code = 404 )
{
    http_response_code($response_code);
    require("views/{$response_code}.php");
}


routeToController ( $uri, $routes );