<?php
/**
 * Created by PhpStorm.
 * User: Glenn
 * Date: 2015-10-05
 * Time: 10:13 AM
 */

namespace Controller;

use Skeleton\Controller\DefaultController;
use Slim\Http\Environment;
use Slim\Http\Request;
use Slim\Http\Response;

class DefaultControllerTest extends \PHPUnit_Framework_TestCase
{
    /**
     * @var \Skeleton\Controller\DefaultController
     */
    protected $controller;
    protected $request;
    protected $response;
    protected $args;

    public function setUp() {
        $container = new \Slim\Container(include "./Skeleton/Config/test.config.php");

        $this->controller = $container[DefaultController::class];

        $this->response = new Response();
        $this->request = Request::createFromEnvironment(Environment::mock());
        $this->args = [];
    }

    public function testIndex() {
        $output = $this->controller->index($this->request, $this->response, $this->args);

        $this->assertInstanceOf('\Slim\Http\Response', $output);
    }
}