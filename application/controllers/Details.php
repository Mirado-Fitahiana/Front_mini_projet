<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Details extends CI_Controller{

    public function index(){
        $this->load->view('templates/header');
        $this->load->view('artiste');
        // $this->load->view('templates/footer');
 
    }

    // public function artiste(){
    //     $this->load->view('templates/header');
    //     $this->load->view('artiste');
    //     //$this->load->view('templates/footer');
    // }

    public function liste_artiste(){
        $this->load->view('templates/header');
        $this->load->view('liste_artiste');
        //$this->load->view('templates/footer');
    }

    public function liste_oeuvre(){
        $this->load->view('templates/header');
        $this->load->view('liste_oeuvre');
        //$this->load->view('templates/footer');
    }
}

?>