<?php

include_once '../model/ModelMenu.php';

class ServiceMenu {

    private $model;

    function __construct() {
        $this->model = new ModelMenu();
    }
    
    function getMenu() {
        return $this->model->getMenu();
    }
    
}
