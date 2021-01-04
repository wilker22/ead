<?php
namespace app\controllers;

use app\core\Controller;
use app\models\Comentario;
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
      $objComentario = new Comentario();
      $dados["comentarios"] = $this->listarComentarios($this->id_cliente);
      $dados["view"] = "comentario/index";

      $this->load('template', $dados);
   } 

   public function listarComentarios($id_aula)
   {
      $objComentario = new Comentario();
      $comentarios = $objComentario->listaPorCliente($this->id_cliente);
      return $objComentario->listarComentariosComResposta($comentarios);
   }

   public function inserir()
   {
      $objComentario = new Comentario();

      $comentario = new \stdClass();
      $comentario->id_aula       = $_POST["id_aula"];
      $comentario->id_cliente    = $this->id_cliente;
      $comentario->id_curso      = $_POST["id_curso"];
      $comentario->comentario    = $_POST["comentario"];

      $objComentario->inserir($comentario);

      header("location:" . URL_BASE .  "aula/assistir/" . $comentario->id_aula);
      
   }
}
