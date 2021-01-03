<?php

namespace app\models;

use app\core\Model;


class Download extends Model
{
    public function lista($id_curso)
    {
        $sql = "SELECT * FROM download WHERE id_curso = :id_curso";
        $qry = $this->db->prepare($sql);
        $qry->bindValue(":id_curso", $id_curso);
        $qry->execute();
        return $qry->fetch(\PDO::FETCH_OBJ);
    }


}