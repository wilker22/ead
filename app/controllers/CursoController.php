<?php
namespace app\controllers;

use app\core\Controller;

class CursoController extends Controller{
    
   public function index(){
      $dados['view'] = 'curso';
      $this->load('template', $dados);
   } 
}
