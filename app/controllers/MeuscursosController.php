<?php
namespace app\controllers;

use app\core\Controller;
use app\models\Clientecurso;
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

   
}
