<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Details extends CI_Controller{

    public function index(){
        $this->load->model('MiradoModel');
        
        $artiste['artiste'] = $this->MiradoModel->get_artiste_by_id($_GET['idartist']);
        $this->load->view('templates/header');
        $this->load->view('artiste',$artiste);
        // $this->load->view('templates/footer');
 
    }

    // public function artiste(){
    //     $this->load->view('templates/header');
    //     $this->load->view('artiste');
    //     //$this->load->view('templates/footer');
    // }

    public function liste_artiste(){
        $this->load->model('YohanModel');
        $artiste['artiste'] = $this->YohanModel->get_all_artist();
        $this->load->view('templates/header');
        $this->load->view('liste_artiste', $artiste);
        //$this->load->view('templates/footer');
    }

    public function liste_oeuvre(){
        $this->load->view('templates/header');
        $this->load->view('liste_oeuvre');
        //$this->load->view('templates/footer');
    }

    public function detail_tableau(){
        $this->load->model('MiradoModel');
        
        $artiste['artiste'] = $this->MiradoModel->get_painting_by_id($_GET['idpaint']);
        $this->load->view('templates/header');
        $this->load->view('detail_tableau',$artiste); 
    }

    public function detail_tableau_error(){
        $this->load->model('MiradoModel');
        
        $artiste['artiste'] = $this->MiradoModel->get_painting_by_id($_GET['idtab']);
        $this->load->view('templates/header');
        $this->load->view('detail_tableau',$artiste); 
    }
}
?>