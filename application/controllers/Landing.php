<?php 
defined('BASEPATH') or exit('No direct script access allowed');

class Landing extends CI_Controller
{
    public function index()
	{
		$data['title'] = 'Bienvenues sur HOOSDOOK';
        $data['contents'] = 'hoosdook/contenus';
        $this -> load -> view('hoosdook/template',$data);
	}
    function tableau(){
        $data['title'] = 'Voir les tableaux';
        $data['contents'] = 'hoosdook/tableau';
        $this -> load -> view('hoosdook/template',$data);
    }
}
?>