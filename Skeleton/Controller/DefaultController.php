<?php
/**
 * Created by PhpStorm.
 * User: Glenn
 * Date: 2015-10-05
 * Time: 9:59 AM
 */

namespace Skeleton\Controller;


use Skeleton\View\HtmlView;
use Slim\Http\Request;
use Slim\Http\Response;

class DefaultController
{
    /**
     * @var \Skeleton\View\HtmlView
     */
    protected $html;

    /**
     * DefaultController constructor.
     *
     * @param \Skeleton\View\HtmlView $html
     */
    public function __construct (HtmlView $html)
    {
        $this->html = $html;
    }

    /**
     * @param \Slim\Http\Request  $request
     * @param \Slim\Http\Response $response
     * @param                     $args
     * @return \Psr\Http\Message\ResponseInterface
     */
    public function index(Request $request, Response $response, $args) {
        return $this->html->render($response, "index.twig", ["content" => "Ready To Go!"]);
    }
}