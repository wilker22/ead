<?php
namespace app\controllers;

use app\core\Controller;
use app\models\Login;

class ComentarioController extends Controller{
    

   public function __construct()
   {
    $objLogin = new Login();
    $this->id_cliente = $objLogin->retornaIdCliente();
    if(!$this->id_cliente){
       header("Location:" . URL_BASE."login");
    }
   }
   
   public function index(){
      $dados["view"] = "comentario/index";
      $this->load('template', $dados);
   } 
}
