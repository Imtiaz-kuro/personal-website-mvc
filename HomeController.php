<?php
require_once 'models/HomeModel.php';

class HomeController {
    private $model;
    
    public function __construct() {
        $this->model = new HomeModel();
    }
    
    public function index() {
        $data = $this->model->getHomeData();
        $pageTitle = "Home - AI Assistant";
        require_once 'views/home.php';
    }
}
?>