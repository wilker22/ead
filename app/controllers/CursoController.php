<?php
namespace app\controllers;

use app\core\Controller;
use app\models\Curso;
use app\models\Aula;
use app\models\Aula_assistida;

class CursoController extends Controller{
    
   public function index(){
      $dados['view'] = 'curso/index';
      $this->load('template', $dados);
   } 

   public function detalhe ($id_curso)
   {
      $objCurso = new Curso();
      $objAula = new Aula();
      
      $id_cliente = 1;
      
      $dados["curso"] = $objCurso->getCurso($id_curso);
      $dados["aulas"] = $this->lista($id_curso, $id_cliente);
      $dados["view"] = "curso/index";
      $this->load("template", $dados);
   }

   public function lista($id_curso, $id_cliente)
   {
      $objAula = new Aula();
      $objAula_assistida = new Aula_assistida();

      $aulas = $objAula->listaPorCurso($id_curso);
      $lista = [];

      if($aulas){
         foreach($aulas as $aula){
            $assistiu = $objAula_assistida->getJaAssistiu($aula['id_aula'], $id_cliente);
   
            if($assistiu){
               $data = $assistiu['data_assistida'];
               $hora = $assistiu['hora_assistida'];
               $assistido =  true;
            }else{
               $data = "0000-00-00";
               $hora = "00:00:00";
               $assistido =  false;
            }
   
            $lista [] = [
               "id_aula"         => $aula['id_aula'],
               "id_curso"         => $aula['id_curso'],
               "aula"            => $aula['aula'],
               "duracao_aula"    => $aula['duracao_aula'],
               "slug_aula"       => $aula['slug_aula'],
               "ativo_aula"      => $aula['ativo_aula'],
               "embed_youtube"   => $aula['embed_youtube'],
               "data"            => $data,
               "hora"            => $hora,
               "assistido"       => $assistido
            ];
         }
      }
      return $lista;
   }  

   
}
      
   



