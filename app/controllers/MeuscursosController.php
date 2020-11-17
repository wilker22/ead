<?php
namespace app\controllers;

use app\core\Controller;

class MeuscursosController extends Controller{
    
   public function index(){
      $dados['view'] = 'meuscursos/index';
      $this->load('template', $dados);
   } 
}
