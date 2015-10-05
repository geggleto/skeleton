<?php
/**
 * Created by PhpStorm.
 * User: Glenn
 * Date: 2015-10-05
 * Time: 9:23 AM
 */

namespace Skeleton\View;


use Skeleton\Interfaces\IView;
use Slim\Http\Response;
use Slim\Views\Twig;

/**
 * Class HtmlView
 *
 * @package Skeleton\View
 */
class HtmlView implements IView
{

    protected $twig;

    /**
     * HtmlView constructor.
     *
     * @param \Slim\Views\Twig $twig
     */
    public function __construct (Twig $twig)
    {
        $this->twig = $twig;
    }

    /**
     * @param \Slim\Http\Response                $response
     * @param string                             $template
     * @param array                              $data
     * @return \Psr\Http\Message\ResponseInterface
     */
    public function render (Response $response, $template = "", array $data = [])
    {
        return $this->twig->render($response, $template, $data);
    }
}