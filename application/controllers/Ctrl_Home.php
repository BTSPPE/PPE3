<?php

class Ctrl_Home extends CI_Controller
{
public function index()
{

    $this->load->model('Model_inscription');
    $data['LesIncriptions'] = $this->Model_inscription->GetAllInscription();

    $this->load->view('View_index');

}



}



?>