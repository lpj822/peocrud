<?php
/**
 * This router prase the url and load it's corresponding controller.
 *
 * @author : Lahiru Jayakody
 * Project : PEO PHP CRUD
 */

require('functions.php');

$uri = parse_url($_SERVER['REQUEST_URI'])['path'];

$routes = [
'/index' => 'controller/index.php',
'/about' => 'controller/about.php',
'/contact' => 'controller/contact.php' ];

if (array_key_exists($uri, $routes)) {

    require $routes[$uri];

} else {

    http_response_code(404);
    require('views/404.view.php');
}