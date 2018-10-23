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

    public function BoutonDemande(){
        $this->load->model("Model_PopUp");
        $data['AjoutD']= $this->model_AjoutDemande->BoutonDemande();
        $this->load->view("View_AcceuilArthur.php", $data);
    }
}
?>
