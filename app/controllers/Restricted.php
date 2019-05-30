<?php

class Restricted extends Controller {

    public function __construct($controller, $action){
        parent::__construct($controller, $action);
    }

    public function indexAction(){
        // $db = DB::getInstance();
        $this->view->render('restricted/index');
    }
}




?>