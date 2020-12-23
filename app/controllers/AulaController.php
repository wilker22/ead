<?php
namespace app\controllers;

use app\core\Controller;
use app\models\Aula;
use app\models\Aula_assistida;
use app\models\Login;

class AulaController extends Controller{
    

   public function __construct()
   {
    $objLogin = new Login();
    $this->id_cliente = $objLogin->retornaIdCliente();
    if(!$this->id_cliente){
       header("Location:" . URL_BASE."login");
    }
   }

   public function index(){
      $dados['view'] = 'aula/index';
      $this->load('template', $dados);
   } 

   public function assistir ($id_aula)
   {
      $objAula = new Aula();
      $objAula_assistida = new Aula_assistida();

      $aula = $objAula->getAula($id_aula);

      if(!$objAula_assistida->getJaAssistiu($id_aula, $this->id_cliente)){
         $objAula_assistida->marcarComoAssistido($id_aula, $this->id_cliente, $aula['id_curso']);
      }
      
      
      $dados['aula_atual'] = $aula;
      $dados['aulas'] = $objAula_assistida->listaAulasAssistidas($aula['id_curso'], $this->id_cliente);
      $dados['view'] = 'aula/index';

      $this->load('template', $dados);
   }
}
