<?php
/**
 * Created by PhpStorm.
 * User: Glenn
 * Date: 2015-10-05
 * Time: 9:15 AM
 */

use Slim\Views\Twig;
use Slim\Views\TwigExtension;

return [
    "settings" => [
        'viewTemplatesDirectory' => "../templates",
        "session_name" => "VMS2",
        "db" => ['dsn' => 'mysql://root@localhost/skeleton']
    ],

    'view' => function ($container) {
        $view = new Twig(
            $container['settings']['viewTemplatesDirectory'],
            ['cache' => false]
        );

        // Instantiate and add Slim specific extension
        $view->addExtension(
            new TwigExtension(
                $container['router'],
                $container['request']->getUri()
            )
        );

        return $view;
    },
    'locator' => function ($container) {
        $cfg = new \Spot\Config();

        // MySQL
        $cfg->addConnection('mysql', $container['settings']['db']['dsn']);
        // Sqlite
        //$cfg->addConnection('sqlite', 'sqlite://path/to/database.sqlite');

        return new \Spot\Locator($cfg);
    },
    'html' => function ($container) {
        return new \Skeleton\View\HtmlView($container['view']);
    },
    'json' => function ($container) {
        return new \Skeleton\View\JsonView($container['view']);
    }
];