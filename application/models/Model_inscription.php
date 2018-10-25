<?php

Class Model_inscription extends CI_Model
{
    public function Insertinscription()
    {
        $sql = $this->db->query("INSERT INTO user (nomUser,login,mdp) 
                                 VALUES ('".$nomUser."','".$login."','".$mdp."')");
    }
}

?>