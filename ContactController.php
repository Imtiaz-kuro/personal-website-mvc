<?php
require_once 'models/ContactModel.php';

class ContactController {
    private $model;
    
    public function __construct() {
        $this->model = new ContactModel();
    }
    
    public function index() {
        $data = $this->model->getContactData();
        $pageTitle = "Contact - AI Assistant";
        require_once 'views/contact.php';
    }
}
?>