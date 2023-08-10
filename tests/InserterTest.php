<?php
require_once("app/models/UserModel.php");
require_once("app/controllers/UserController.php");
require_once('routes/Router.php');
class InserterTest extends \PHPUnit\Framework\TestCase
{
    public function testHome()
    {
        // Mock the $_SERVER['REQUEST_URI'] value
        $_SERVER['REQUEST_METHOD'] = 'GET'; // Assuming the home route responds to GET requests
        $_SERVER['REQUEST_URI'] = '/';

        // Use output buffering to capture any output
        ob_start();

        $router = new Router();
        $router->addRoute('/', 'UserController', 'index');
        $router->dispatch($_SERVER['REQUEST_URI']);

        $output = ob_get_clean();

        // Check the output to see if it contains specific content from home.php
        $this->assertStringContainsString('<div class="box">', $output);
    }
}
