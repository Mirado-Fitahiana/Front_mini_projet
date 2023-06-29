<?php 
defined('BASEPATH') or exit('No direct script access allowed');

class Mirado extends CI_Controller
{
    public function tableau()
	{
        $this->load->view('templates/header');
        $this->load->view('liste_oeuvre');
        
	}
}