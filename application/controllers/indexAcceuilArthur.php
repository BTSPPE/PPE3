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

    public function Deconnexion(){
        $this->load->library("session");
        $this->load->model("Model_Deconnexion");
        $this->Model_Deconnexion->Deconnexion();
        redirect('');
    }

    public function profil(){
        $this->load->library("session");
        $this->load->model("Model_PDemande");
        $data['lesDemandes']=$this->Model_PDemande->GetAllInfosDemande();
        $this->load->model("Model_POffres");
        $data['lesOffres']=$this->Model_POffres->GetAllInfosOffre();
        $this->load->view("view_Profil", $data);
    }

    public function retouracceuil(){
        $this->load->library("session");
        redirect('');
    }

    public function PopUpDModification(){
        $this->load->library("session");
        $this->load->model("Model_PopUp");
        $data['lesOptions']= $this->Model_PopUp->GetPopUp();
        $this->load->model("Model_idDemande");
        $data['idOffre']=$this->Model_idOffre->GetOffres();
        $this->load->view("View_PopUpDModif", $data);
    }

    public function PopUpOModification(){
        $this->load->library("session");
        $this->load->model("Model_PopUp");
        $data['lesOptions']= $this->Model_PopUp->GetPopUp();
        $this->load->model("Model_idOffre");
        $data['idOffre']=$this->Model_idOffre->GetOffres();
        $this->load->view("View_PopUpOModif", $data);
    }

    public function AjoutDemande(){
        $this->load->library("session");
        $this->load->model("Model_AjoutDemande");
        $data['lesAjouts']=$this->Model_AjoutDemande->AjoutDemande();
    }

    public function AjoutOffre(){
        $this->load->library("session");
        $this->load->model("Model_AjoutOffre");
        $data['lesAjouts']=$this->Model_AjoutOffre->AjoutOffre();
    }
}

?>
