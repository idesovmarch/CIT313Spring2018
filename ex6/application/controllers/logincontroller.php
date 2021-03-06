<?php

class LoginController extends Controller{

   protected $userObject;

   public function index() {

   }

   public function do_login() {
	   // handle login

       $this->userObject = new Users();

       if($this->userObject->checkUser($_POST['email'],$_POST['password'])) {

           $userInfo = $this->userObject->getUserFromEmail($_POST['email']);

           $_SESSION['uID'] = $userInfo['uID'];

           if(strlen($_SESSION['redirect']) > 0 ){
             $view = $_SESSION['redirect'];
             unset($_SESSION['redirect']);
             header('Location: '.BASE_URL.$view);
           }
           else {
             header('Location: '.BASE_URL);
           }



       }
       else {
           $this->set('error','Wrong password / email combination');
       }

   }

   public function logout() {

    //session id - unset
    unset($_SESSION['uID']);

    //close session
      session_write_close();

      //send home
      header('location: '.BASE_URL);

   }

}
