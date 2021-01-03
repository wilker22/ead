<?php

namespace app\models;

use app\core\Model;


class Clientecurso extends Model
{
    public function listaCursoPorCliente($id_cliente)
    {
        $sql = "SELECT * FROM curso c, cliente_curso cc 
                WHERE c.id_curso = cc.id_curso 
                AND id_cliente = :id_cliente";
        
        $qry = $this->db->prepare($sql);
        $qry->bindValue(":id_cliente", $id_cliente);
        $qry->execute();
        return $qry->fetchAll(\PDO::FETCH_OBJ);
    }
}