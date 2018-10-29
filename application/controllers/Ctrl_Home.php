<?php
class Ctrl_Home extends CI_Controller
{
    public function index()
    {
        $this->load->model('Model_Inscription');
        $data['lesIncriptions']=$this->Model_Inscription->EnregistrementMembres();

        $this->load->view('View_Index',$data);
    }
}







?>