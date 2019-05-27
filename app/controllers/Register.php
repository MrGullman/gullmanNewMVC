<?php

class Register extends Controller {

    public function __construct($controller, $action) {
        parent::__construct($controller, $action);
        $this->load_model('Users');
        $this->view->setLayout('default');
    }

    public function loginAction(){
        $validation = new Validate();

        if($_POST){

            // form validation
            $validation->check($_POST, [
                'username' => [
                    'display' => 'Username',
                    'required' => true
                ],
                'password' => [
                    'display' => 'Password',
                    'required' => true,
                    'min' => 6
                ]
            ]);


            // dnd($validation);

            if($validation->passed()){
                // dnd('Validates');
            // if($validation == true){
                $user = $this->UsersModel->findByUsername($_POST['username']);
                if($user && password_verify(Input::get('password'), $user->password)){
                    $remember = (isset($_POST['remember_me']) && Input::get('remember_me')) ? true : false;
                    $user->login($remember);
                    Router::redirect('');
                }else{
                    $validation->addError("There is an error with your username od password.");
                }
            }
            // dnd('validation error');
        }
        // dnd('något fel');
        $this->view->displayErrors = $validation->displayErrors();
        $this->view->render('register/login');
    }

    public function registerAction(){
        $this->view->render('register/register');
    }

    public function logoutAction(){

        if(currentUser()){
            currentUser()->logout();
        }
        Router::redirect('register/login');
    }
}


?>