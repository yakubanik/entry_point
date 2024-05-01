<?php

/*
 * разобраться как передавать апарметры через гет форму
 */


namespace Core;

class Router
{
    private static $routes = [];

    public static function add_route($uri, $template)
    {
        self::$routes[] = [
            'uri' => $uri,
            'template' => $template,
            'is_post' => false,
        ];
    }

    public static function add_post($uri, $controller)
    {
        self::$routes[] = [
            'uri' => $uri,
            'controller' => $controller,
            'is_post' => true,
        ];
    }

    public static function add_get($uri, $template, $controller)
    {
        self::$routes[] = [
            'uri' => $uri,
            'template' => $template,
            'controller' => $controller,
            'is_post' => false,
        ];
    }

    public static function get($request_uri, $get_params = [])
    {
        foreach (self::$routes as $route) {
            if ($route['uri'] == $request_uri) {
                if ($route['is_post'] || !empty($get_params)) {
                    require_once __DIR__ . "/../controllers/" . $route['controller'];
                } else {
                    require_once "../templates/" . $route['template'];
                }
                die();
            }
        }
        self::error(404);
        die();
    }

    public
    static function error($code)
    {
        require_once "../templates/errors/$code.php";
    }

}