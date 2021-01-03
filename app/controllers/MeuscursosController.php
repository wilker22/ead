<?php
namespace app\controllers;

use app\core\Controller;
use app\models\Aula_assistida;
use app\models\Clientecurso;
use app\models\Curso;
use app\models\Login;

class MeuscursosController extends Controller{
    
   public function __construct()
  {
   $objLogin = new Login();
   $this->id_cliente = $objLogin->retornaIdCliente();
   if(!$this->id_cliente){
      header("Location:" . URL_BASE."login");
   }
  }
  
   public function index(){
      $objClientecurso = new Clientecurso();
      
      $dados['lista_cursos']  = $objClientecurso->listaCursoPorCliente($this->id_cliente);
      $dados['view'] = 'meuscursos/index';
      $this->load('template', $dados);
   } 


   public function lista ($id_cliente)
   {
      $objClientecurso =  new Clientecurso();
      $objAulasAssistidas =  new Aula_assistida();
      $objCurso = new Curso();
      $lista  = $objClientecurso->listaCursoPorCliente($this->id_cliente);
      $resultado =  [];
      if($lista){
         foreach($lista as $curso){
            $qtde_assistida         = $objAulasAssistidas->qtdeAssistidaPorCliente($curso->id_curso, $id_cliente);
            $qtde_aula              = $objCurso->qtdeAulaPorCurso($curso->id_curso);
            $curso->qtde_aula       = $qtde_aula->qtde;
            $curso->qtde_assistida  = $qtde_assistida->qtde;
            $resultado[]              = $curso;
            
         }

      }
      
      return $resultado;
   }

   
}
