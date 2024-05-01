<?php

use Core\Router;

require_once __DIR__ . "/../vendor/autoload.php";


$uri_parts = explode('?', $_SERVER['REQUEST_URI']);
$request_uri = trim($uri_parts[0], '/');


$params_vals = [];
if (isset($uri_parts[1])) {
    parse_str($uri_parts[1], $params_vals);
}

Router::add_route('/', 'home.php');
Router::add_route('/login', 'login.php');

Router::add_get('/get_form', 'get_form.php', 'get_form.php');

Router::add_post('/auth/login', 'login.php');
Router::add_post('/auth/logout', 'logout.php');

Router::get("/$request_uri", $params_vals);
