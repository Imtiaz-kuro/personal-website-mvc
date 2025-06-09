<?php
require_once 'models/AboutModel.php';

class AboutController {
    private $model;
    
    public function __construct() {
        $this->model = new AboutModel();
    }
    
    public function index() {
        $data = $this->model->getAboutData();
        $pageTitle = "About Me - AI Assistant";
        require_once 'views/about.php';
    }
}
?>