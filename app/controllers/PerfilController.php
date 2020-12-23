<?php
namespace app\controllers;

use app\core\Controller;
use app\models\Login;

class PerfilController extends Controller{
    

   public function __construct()
   {
    $objLogin = new Login();
    $this->id_cliente = $objLogin->retornaIdCliente();
    if(!$this->id_cliente){
       header("Location:" . URL_BASE."login");
    }
   }
   
   public function index(){
      $dados['view'] = 'perfil/index';
      $this->load('template', $dados);
   } 
}
