<?php

class Model_inscription extends CI_Model
{
    public function GetAllInscription()
    {
        $sql = $this->db->query('INSERT INTO user (nomUser, login, mdp)
        VALUES ('.$_POST['nomUser'].', '.$_POST['login'].', ' .$_POST['passe'].')');

        return $sql->result();

    }



}





?>