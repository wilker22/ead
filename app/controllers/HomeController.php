<?php
namespace app\controllers;

use app\core\Controller;
use app\models\Clientecurso;
use app\models\Login;

class HomeController extends Controller{
    
   public function __construct()
  {
   $objLogin = new Login();
   $this->id_cliente = $objLogin->retornaIdCliente();
   if(!$this->id_cliente){
      header("Location:" . URL_BASE."login");
   }
  }
  
  
   public function index(){
      $objLogin = new Login(); 
      $objClientecurso = new Clientecurso();
      $this->id_cliente = $objLogin->retornaIdCliente();

      if(!$this->id_cliente){
         header("Location:" . URL_BASE."login");
      }
      

      $dados['lista_cursos']  = $objClientecurso->listaCursoPorCliente($this->id_cliente);
      //echo "<pre>";
       //  print_r($dados['lista_cursos']);
      //exit;
      $dados['view'] = 'home';
      
      $this->load('template', $dados);
   } 
}
