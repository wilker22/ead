<?php
namespace app\controllers;

use app\core\Controller;
use app\models\Aula;
use app\models\Aula_assistida;

class AulaController extends Controller{
    
   public function index(){
      $dados['view'] = 'aula/index';
      $this->load('template', $dados);
   } 

   public function assistir ($id_aula)
   {
      $objAula = new Aula();
      $objAula_assistida = new Aula_assistida();
      $id_cliente = 1;

      $aula = $objAula->getAula($id_aula);

      $objAula_assistida->marcarComoAssistido($id_aula, $id_cliente, $aula['id_curso']);
      $dados['aula_atual'] = $aula;
      $dados['aulas'] = $objAula->listaPorCurso($aula['id_curso']);
      $dados['view'] = 'aula/index';

      $this->load('template', $dados);
   }
}
