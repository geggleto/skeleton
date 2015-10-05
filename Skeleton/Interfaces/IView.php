<?php
/**
 * Created by PhpStorm.
 * User: Glenn
 * Date: 2015-10-05
 * Time: 9:25 AM
 */

namespace Skeleton\Interfaces;


use Slim\Http\Response;

interface IView
{
    public function render(Response $response, $template = "", array $data = []);
}