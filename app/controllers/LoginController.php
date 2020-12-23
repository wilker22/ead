<?php
namespace app\controllers;

use app\core\Controller;
use app\models\Login;

class LoginController extends Controller{
    
   public function index(){
      $dados['view'] = 'login';
      $this->load('login', $dados);
   } 

   public function logar()
   {
      $objLogin = new Login();
      $email = $_POST['email'];
      $senha = $_POST['senha'];

      
      $cliente = $objLogin->logar($email, $senha);

      if($cliente){
         $_SESSION[SESSION_LOGIN] = $cliente;
         header("Location:" . URL_BASE);
      }else{
         unset($_SESSION[SESSION_LOGIN]);
         echo "login não encontrado";
      }
      echo "<pre></pre>";
      print_r($cliente); 
   }

   public function logoff ()
   {
      unset($_SESSION[SESSION_LOGIN]);
      header("Location:" . URL_BASE . "login");
   }
}
