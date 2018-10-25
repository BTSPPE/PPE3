<?php

class Index_inscription extends CI_Controller
{

    public function index()
    {
        $this->load->view('View_inscription');
    }

    public function AjoutInscription()
    {
        $nom = $_GET['nom'];
        $login = $_GET['login'];
        $mdp = $_GET['mdp'];
        $this->load->model('Model_inscription');
        $data['Inscriptions']=$this->Model_inscription->Insertinscription($nom,$login,$mdp);
    }
}

?>