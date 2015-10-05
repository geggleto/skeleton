<?php
/**
 * Created by PhpStorm.
 * User: Glenn
 * Date: 2015-10-05
 * Time: 9:15 AM
 */

use Skeleton\Controller\DefaultController;
use Skeleton\View\HtmlView;
use Skeleton\View\JsonView;
use Slim\Views\Twig;
use Slim\Views\TwigExtension;

$config = include "app.config.php";
$config['settings']['viewTemplatesDirectory'] = "./templates";

return $config;