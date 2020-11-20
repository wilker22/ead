<?php
namespace app\controllers;

use app\core\Controller;
use app\models\Clientecurso;

class MeuscursosController extends Controller{
    
   public function index(){
      $objClientecurso = new Clientecurso();
      $id_cliente = 1;

      $dados['lista_cursos']  = $objClientecurso->listaCursoPorCliente($id_cliente);
      $dados['view'] = 'meuscursos/index';
      $this->load('template', $dados);
   } 

   
}
