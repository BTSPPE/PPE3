<?php

class indexAcceuilArthur extends CI_controller
{
    public function index(){
        $this->load->model("model_demandesAcceuil");
        $data['lesDemandes']=$this->model_demandesAcceuil->GetAllDemande();
        $this->load->view("view_AcceuilArthur.php", $data);
    }

    public function GetAllOffres(){
        $this->load->model("model_offresAcceuil");
        $data['lesOffres']=$this->model_offresAcceuil->GetAllOffres();
        $this->load->view("view_offresAcceuil.php", $data);
    }

    public function BoutonDemande(){
        $this->load->model("Model_PopUp");
        $this->load->model("Model_idDemande");
        $data['lesOptions']= $this->Model_PopUp->GetPopUp();
        $data2['idDemande']=$this->Model_idDemande->GetDemandes();
        $this->load->view("View_PopUpDemande.php", $data, $data2);
    }

    public function BoutonOffre(){
        $this->load->model("Model_PopUp");
        $this->load->model("Model_idOffre");
        $data['lesOptions']= $this->Model_PopUp->GetPopUp();
        $data2['idOffre']=$this->Model_idOffre->GetOffres();
        $this->load->view("View_PopUpDemande.php", $data, $data2);
    }
}
?>
