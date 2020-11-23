<?php

namespace app\models;

use app\core\Model;


class Aula_assistida extends Model
{
    
    public function marcarComoAssistido($id_aula, $id_cliente, $id_curso)
    {
        $sql = "INSERT INTO aula_assistida SET
                id_aula = :id_aula,
                id_cliente = :id_cliente,
                id_curso = :id_curso,
                data_assistida = :data,
                hora_assistida = :hora";
        $qry = $this->db->prepare($sql);

        $qry->bindValue(':id_aula', $id_aula);
        $qry->bindValue(':id_cliente', $id_cliente);
        $qry->bindValue(':id_curso', $id_curso);

        $qry->bindValue(':data', date('Y-m-d'));
        $qry->bindValue(':hora', date('H:i:s'));
        $qry->execute();

        return $this->db->lastInsertId();
    }
}