<?php
namespace app\controllers;

use app\core\Controller;

class CursoController extends Controller{
    
   public function index(){
      $dados['view'] = 'curso/index';
      $this->load('template', $dados);
   } 
}
