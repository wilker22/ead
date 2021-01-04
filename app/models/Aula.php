<?php

namespace app\models;

use app\core\Model;


class Aula extends Model
{
    
    public function getAula($id_aula)
    {
        $sql = "SELECT * FROM aula WHERE id_aula = :id_aula";
        $qry = $this->db->prepare($sql);
        $qry->bindValue(":id_aula", $id_aula);
        $qry->execute();
        return $qry->fetch(\PDO::FETCH_OBJ);
    }

    public function listaPorCurso($id_curso)
    {
        $sql = "SELECT * FROM aula WHERE id_curso = :id_curso";
        $qry = $this->db->prepare($sql);
        $qry->bindValue(":id_curso", $id_curso);
        $qry->execute();
        return $qry->fetchAll(\PDO::FETCH_OBJ);
    }

    public function getProximo($id_aula, $id_curso)
    {
        $sql = "SELECT * FROM aula id_curso = :id_curso AND id_aula = :id_aula LIMIT 1";
        $qry = $this->db->prepare($sql);
        $qry->bindValue(":id_aula", $id_aula);
        $qry->bindValue(":id_curso", $id_curso);
        $qry->execute();
        return $qry->fetchAll(\PDO::FETCH_OBJ);
    }

    public function getAnterior($id_aula, $id_curso)
    {
        $sql = "SELECT * FROM aula id_curso = :id_curso AND id_aula < :id_aula ORDER BY id_aula DESC LIMIT 1";
        $qry = $this->db->prepare($sql);
        $qry->bindValue(":id_aula", $id_aula);
        $qry->bindValue(":id_curso", $id_curso);
        $qry->execute();
        return $qry->fetchAll(\PDO::FETCH_OBJ);
    }
}