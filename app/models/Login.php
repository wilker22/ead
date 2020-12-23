<?php

namespace app\models;

use app\core\Model;


class Login extends Model
{
    
    public function logar($email, $senha)
    {
        $sql = "SELECT * FROM cliente WHERE email = :email AND senha = :senha";
        $qry = $this->db->prepare($sql);
        $qry->bindValue(":email", $email);
        $qry->bindValue(":senha", $senha);
        $qry->execute();
        return $qry->fetch(\PDO::FETCH_ASSOC);
    }

    public function retornaIdCliente()
    {
        $id_cliente = isset($_SESSION[SESSION_LOGIN]) ? $_SESSION[SESSION_LOGIN]["id_cliente"] : NULL;

        return $id_cliente;
    }

   
}