<?php

namespace app\models;

use app\core\Model;


class Resposta extends Model
{
    public function inserir($dados)
    {   
        $sql = "INSERT INTO resposta SET 
                    id_comentario = :id_comentario,
                    id_cliente = : id_cliente,
                    resposta = :resposta,
                    data_Resposta = :data,
                    hora_Resposta = :hora";

        $qry = $this->db->prepare($sql);
        $qry->bindValue(":id_comentario", $dados->id_comentario);
        $qry->bindValue(":id_cliente", $dados->id_cliente);
        $qry->bindValue(":resposta", $dados->resposta);
        $qry->bindValue(":data", date("Y:m:d"));
        $qry->bindValue(":hora", date("H:i:s"));
        $qry->execute();

        return $this->db->lastInsertId();

    }

    public function listaPorComentario($id_comentario)
    {
        $sql = "SELECT * FROM resposta WHERE id_comentario = :id_comentario";
        $qry = $this->db->prepare($sql);
        $qry->bindValue(":id_aula", $id_comentario);
        $qry->execute();
        return $qry->fetchAll(\PDO::FETCH_OBJ); 
    }
}