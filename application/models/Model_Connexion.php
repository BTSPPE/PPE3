<?php
class Model_Connexion extends CI_Model
{
    function AfficherConnexion()
    {
        $sql= $this->db->query('SELECT* FROM user WHERE login = ? AND mdp = ?');
        return $sql->result();
    }
}









?>