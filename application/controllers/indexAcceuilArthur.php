<?php
    
    class indexAcceuilArthur extends CI_controller
{
    public function index(){
        $this->load->library("session");
        $this->load->model("model_demandesAcceuil");
        $data['lesDemandes']=$this->model_demandesAcceuil->GetAllDemande();
        $this->load->view("view_AcceuilArthur", $data);
    }

    public function GetAllOffres(){
        $this->load->library("session");
        $this->load->model("model_offresAcceuil");
        $data['lesOffres']=$this->model_offresAcceuil->GetAllOffres();
        $this->load->view("view_offresAcceuil", $data);
    }

    public function BoutonDemande(){
        $this->load->library("session");
        $this->load->model("Model_PopUp");
        $data['lesOptions']= $this->Model_PopUp->GetPopUp();
        $this->load->model("Model_idDemande");
        $data['idDemande']=$this->Model_idDemande->GetDemandes();
        $this->load->view("View_PopUpDemande", $data);
    }

    public function BoutonOffre(){
        $this->load->library("session");
        $this->load->model("Model_PopUp");
        $data['lesOptions']= $this->Model_PopUp->GetPopUp();
        $this->load->model("Model_idOffre");
        $data['idOffre']=$this->Model_idOffre->GetOffres();
        $this->load->view("View_PopUpOffre", $data);
    }

    public function BoutonConnexion(){
        $this->load->library("session");
        $this->load->view("View_PopUpConnexion");
    }

    public function Connexion(){
        $this->load->library("session");
        $this->load->model("Model_Connexion");
        $this->Model_Connexion->Connexion();
        redirect(''); //redirection vers index
    }

    public function Connexion(){
        $this->load->library("session");
        $this->load->model("Model_Deconnexion");
        $this->Model_Connexion->Deconnexion();
        redirect(''); //redirection vers index
    }

}

?>
