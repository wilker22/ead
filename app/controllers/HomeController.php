<?php
namespace app\controllers;

use app\core\Controller;
use app\models\Clientecurso;

class HomeController extends Controller{
    
   public function index(){
      $objClientecurso = new Clientecurso();
      $id_cliente = 1;

      $dados['lista_cursos']  = $objClientecurso->listaCursoPorCliente($id_cliente);
      //echo "<pre>";
       //  print_r($dados['lista_cursos']);
      //exit;
      $dados['view']          = 'home';
      
      $this->load('template', $dados);
   } 
}
