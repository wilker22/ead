<?php
namespace app\controllers;

use app\core\Controller;

class PerfilController extends Controller{
    
   public function index(){
      $dados['view'] = 'perfil/index';
      $this->load('template', $dados);
   } 
}
