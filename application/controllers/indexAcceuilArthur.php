<?php

class Home_PPE3 extends CI_controller
{

    public function index()
    {
        $this->load->model("model_offresAcceuil")
        $offres['LesOffres'] = $this->model_PPE3->getAllOffre($_GET['idUser']);
        $this->load->view("view_offresAcceuil", $offres);
    }
    public function Demandes()
    {
        $this->load->model("model_demandesAcceuil")
        $demandes['LesDemandes']=$this->model_PPE3->getAllDemande($_GET['idUser']);
        $this->load->view("view_demandesAcceuil.php", $demandes)
    }
}
?>