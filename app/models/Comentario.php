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

    public function listaPorAula($id_aula)
    {
        $sql = "SELECT * FROM comentario WHERE id_aula = :id_aula";
        $qry = $this->db->prepare($sql);
        $qry->bindValue(":id_aula", $id_aula);
        $qry->execute();
        return $qry->fetchAll(\PDO::FETCH_OBJ); 
    }
}