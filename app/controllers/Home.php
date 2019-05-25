<?php

class Home extends Controller
{

    public function __construct($controller, $action)
    {
        parent::__construct($controller, $action);

    }

    // public function indexAction()
    // {
    //     $db = DB::getInstance();
    //     $fields = [
    //         'fname' => 'Kajsa',
    //         'email' => 'kajsaAnka@ankeborg.com'
    //     ];
    //     // $sql = "SELECT * FROM contacts";
    //     $contacts = $db->find('contacts', [
    //         'conditions' => "lname = ?",     // Use String
    //         // 'conditions' => ['fname = ?','lname = ?'],  // Use Array
    //         // 'bind' => ['Jesper', 'Gullman'],             // Use with Array
    //         'bind' => ['Gullman'],
    //         'order' => "lname",
    //         'limit' => 5
    //     ]);

    //     $contactsFirst = $db->findFirst('contacts', [
    //         'conditions' => "lname = ?",     // Use String
    //         'bind' => ['Gullman']
    //     ]);
    //     // $contact = $db->query("SELECT * FROM contacts ORDER BY lname, fname")->lastID();

    //     $this->view->render('home/index');
    // }

    public function indexAction(){
        $db = DB::getInstance();

        $this->view->render('home/index');
    }
}



?>