<?php
// Simple Router
$page = $_GET['page'] ?? 'home';

// Include the appropriate controller
switch($page) {
    case 'home':
        require_once 'controllers/HomeController.php';
        $controller = new HomeController();
        $controller->index();
        break;
    case 'about':
        require_once 'controllers/AboutController.php';
        $controller = new AboutController();
        $controller->index();
        break;
    case 'contact':
        require_once 'controllers/ContactController.php';
        $controller = new ContactController();
        $controller->index();
        break;
    default:
        require_once 'controllers/HomeController.php';
        $controller = new HomeController();
        $controller->index();
        break;
}
?>