<?php
namespace app\controllers;

use app\core\Controller;

class LoginController extends Controller{
    
   public function index(){
      $dados['view'] = 'login';
      $this->load('template', $dados);
   } 
}
