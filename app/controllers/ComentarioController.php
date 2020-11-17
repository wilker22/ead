<?php
namespace app\controllers;

use app\core\Controller;

class ComentarioController extends Controller{
    
   public function index(){
      $dados["view"] = "comentario/index";
      $this->load('template', $dados);
   } 
}
