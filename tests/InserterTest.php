<?php
require_once("app/models/UserModel.php");
require_once("app/controllers/UserController.php");
require_once('routes/Router.php');
class InserterTest extends \PHPUnit\Framework\TestCase {
    public function testHome() {
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
        $this->assertStringContainsString('
        <div class="box"> 
      <form method="POST" action="index.php" enctype="multipart/form-data">
      <h2>Input form</h2>
          <div class="inputBox">
              <input type="text" id="first_name" name="first_name" required><br>
              <label for="first_name">First Name:</label>
          </div>
          <div class="inputBox">
              <input type="text" id="last_name" name="last_name" required><br>
              <label for="last_name">Last Name:</label>
          </div>
          <div class="inputBox">
              <input type="email" id="email" name="email" required><br>
              <label for="email">Email:</label>
          </div>
           <br> <br>
          <div class="inputBox">
              <input type="submit" name="submit" value="Υποβολή">
          </div>
          </form>
      
      
      </div>
      ', $output);
    }
}
