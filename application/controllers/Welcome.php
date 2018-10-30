<?php

class Home_PPE3 extends CI_controller
{

    public function index()
    {
        $this->load->model("model_offres")
        $offres['LesOffres'] = $this->model_PPE3->getAllOffre();
        $this->load->view("view_offres", $offres);
    }
    public function Demandes()
    {
        $this->load->model("model_demandes")
        $demandes['LesDemandes']=$this->model_PPE3->getAllDemande();
        $this->load->view("view_demandes.php", $demandes)
    }
}
?>