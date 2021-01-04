<?php

namespace app\models;

use app\core\Model;


class Comentario extends Model
{
    public function inserir($dados)
    {   
        $sql = "INSERT INTO comentario SET 
                    id_aula = :id_aula,
                    id_cliente = : id_cliente,
                    id_curso = :id_curso,
                    comentario = :comentario,
                    data_comentario = :data,
                    hora_comentario = :hora";

        $qry = $this->db->prepare($sql);
        $qry->bindValue(":id_aula", $dados->id_aula);
        $qry->bindValue(":id_cliente", $dados->id_cliente);
        $qry->bindValue(":id_curso", $dados->id_curso);
        $qry->bindValue(":comentario", $dados->comentario);
        $qry->bindValue(":data", date("Y:m:d"));
        $qry->bindValue(":hora", date("H:i:s"));
        $qry->execute();

        return $this->db->lastInsertId();

    }

    public function listaPorCliente($id_cliente)
    {
        $sql = "SELECT c.* a.aula FROM comentario c, aula a WHERE a.id_aula = c.id_aula AND id_cliente = :id_cliente";
        $qry = $this->db->prepare($sql);
        $qry->bindValue(":id_cliente", $id_cliente);
        $qry->execute();
        return $qry->fetchAll(\PDO::FETCH_OBJ); 
    }

    public function listaPorAula($id_aula)
    {
        $sql = "SELECT c.* a.aula FROM comentario c, aula a WHERE a.id_aula = c.id_aula AND c.id_aula = :id_aula";
        $qry = $this->db->prepare($sql);
        $qry->bindValue(":id_aula", $id_aula);
        $qry->execute();
        return $qry->fetchAll(\PDO::FETCH_OBJ); 
    }

    public function listarComentariosComResposta($id_aula)
    {
       $objComentario = new Comentario();
       $objResposta = new Resposta();
       $lista = [];
       $comentarios = $objComentario->listaPorAula($id_aula);
 
       if($comentarios){
          foreach($comentarios as $comentario){
            $respostas = $objResposta->listaPorComentario($comentario->id_comentario);
            $lista = (object) [
             "comentario" => $comentario,
             "resposta" => $respostas
            ];  
          }
       }
       return $lista;
    }

}