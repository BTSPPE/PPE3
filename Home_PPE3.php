<?php

class Home_PPE3 extends CI_controller
{

    public function Offres()
    {
        $this->load->model("model_PPE3")
        $offres['LesOffres'] = $this->model_PPE3->getAllOffre();
        $this->load->view("view_PPE3", $offres);
    }
    public function Demandes()
    {
        $this->load->model("model_PPE3")
        $demandes['LesDemandes']=$this->model_PPE3->getAllDemande();
        $this->load->view("view_PPE3.php", $demandes)
    }
}
?>