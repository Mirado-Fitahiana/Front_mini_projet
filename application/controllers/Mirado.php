<?php 
defined('BASEPATH') or exit('No direct script access allowed');

class Mirado extends CI_Controller
{
    public function tableau()
	{
       
        if ($this->session->userdata('paint')) {
            $data['sess'] = $this->session->userdata('paint');
            print_r($data['sess']);
        }
        $this->load->view('templates/header');
        $this->load->library('Pagination_bootstrap');
        $sql =  $this->db->get('view_artist_painting');
        $this->pagination_bootstrap->offset(6);
        $data['result'] =  $this->pagination_bootstrap->config("Mirado/tableau",$sql);
        $this->load->view('liste_oeuvre',$data);
	}

    
}