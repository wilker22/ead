<?php
namespace app\controllers;

use app\core\Controller;
use app\models\Resposta;
use app\models\Login;

class RespostaController extends Controller{
    

   public function __construct()
   {
    $objLogin = new Login();
    $this->id_cliente = $objLogin->retornaIdCliente();
    if(!$this->id_cliente){
       header("Location:" . URL_BASE."login");
    }
   }
   
   public function index(){
      $dados["view"] = "Resposta/index";
      $this->load('template', $dados);
   } 

   public function inserir()
   {
      $objResposta = new Resposta();

      $resposta = new \stdClass();
      $resposta->id_comentario       = $_POST["id_comentario"];
      $resposta->id_cliente    = $this->id_cliente;
      $resposta->id_aula    = $_POST['id_aula'];

      $resposta->Resposta    = $_POST["resposta"];

      $objResposta->inserir($resposta);

      header("location:" . URL_BASE .  "aula/assistir/" . $resposta->id_aula);
      
   }
}
