<?php

namespace app\models;

use app\core\Model;


class Curso extends Model
{
    public function getCurso($id_curso)
    {
        $sql = "SELECT * FROM curso WHERE id_curso = :id_curso";
        $qry = $this->db->prepare($sql);
        $qry->bindValue(":id_curso", $id_curso);
        $qry->execute();
        return $qry->fetch(\PDO::FETCH_ASSOC);
    }
}