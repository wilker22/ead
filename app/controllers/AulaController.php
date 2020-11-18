<?php
namespace app\controllers;

use app\core\Controller;

class AulaController extends Controller{
    
   public function index(){
      $dados['view'] = 'aula/index';
      $this->load('template', $dados);
   } 
}
