<?php

namespace app\models;

use app\core\Model;


class Aula extends Model
{
    public function listaPorCurso($id_curso)
    {
        $sql = "SELECT * FROM aula WHERE id_curso = :id_curso";
        $qry = $this->db->prepare($sql);
        $qry->bindValue(":id_curso", $id_curso);
        $qry->execute();
        return $qry->fetchAll(\PDO::FETCH_ASSOC);
    }
}