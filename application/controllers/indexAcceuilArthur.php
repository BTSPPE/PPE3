<?php

class indexAcceuilArthur extends CI_controller
{
    public function index()
    {
        $this->load->model("model_demandesAcceuil");
        $data['LesDemandes']=$this->model_demandesAcceuil->GetAllDemande();
        $this->load->view("view_AcceuilArthur.php", $data);
    }

    public function GetAllOffres()
    {
        $this->load->model("model_offresAcceuil");
        $data['LesOffres']=$this->model_offresAcceuil->GetAllOffres();
        $this->load->view("view_offresAcceuil.php", $data);
    }

    public function AjoutDemande(){
        $this->load->model("Model_AjoutDemande");
        $data['AjoutD']= $this->model_AjoutDemande->AjoutDemande();
        $this->load->view("View_AjoutDemande.php", $data);
    }
}
?>
