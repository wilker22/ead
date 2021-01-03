<?php
namespace app\controllers;

use app\core\Controller;
use app\models\Curso;
use app\models\Aula;
use app\models\Aula_assistida;
use app\models\Login;

class CursoController extends Controller{
    
  public function __construct()
  {
   $objLogin = new Login();
   $this->id_cliente = $objLogin->retornaIdCliente();
   if(!$this->id_cliente){
      header("Location:" . URL_BASE."login");
   }
  }
  
   public function index(){
           
      $dados['view'] = 'curso/index';
      $this->load('template', $dados);
   }  

   public function detalhe ($id_curso)
   {
      $objCurso = new Curso();
      $objAula = new Aula();
      $objAulaAssistida = new Aula_assistida();
            
      $dados["curso"] = $objCurso->getCurso($id_curso);
      $dados["aulas"] = $objAulaAssistida->listaAulasAssistidas($id_curso, $this->id_cliente);
      $dados["view"] = "curso/index";
      $this->load("template", $dados);
   }

     

   
}
      
   



