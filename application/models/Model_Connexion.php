<?php
class Model_Connexion extends CI_Model
{
    public function Connexion()
    {
        $sql = $this->db->query('SELECT mdp from user
                                WHERE login ="'.$_POST["login"].'"');
        if (count($sql->result())!=0 && $sql->result()[0]->mdp == $_POST["mdp"]) {
            $this->session->isLogged = true;
            $this->session->username = $_POST["login"];
        }
        else
            $this->session->isLogged = false;
    }
}

?>