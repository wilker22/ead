<?php
namespace app\controllers;

use app\core\Controller;
use app\models\Curso;
use app\models\Aula;

class CursoController extends Controller{
    
   public function index(){
      $dados['view'] = 'curso/index';
      $this->load('template', $dados);
   } 

   public function detalhe ($id_curso)
   {
      $objCurso = new Curso();
      $objAula = new Aula();
      $dados["curso"] = $objCurso->getCurso($id_curso);
      $dados["aulas"] = $objAula->listaPorCurso($id_curso);
      $dados["view"] = "curso/index";
      $this->load("template", $dados);
   }
}
