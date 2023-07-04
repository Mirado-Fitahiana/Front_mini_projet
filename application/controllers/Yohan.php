<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Yohan extends CI_Controller {

	/**
	 * Index Page for this controller.
	 *
	 * Maps to the following URL
	 * 		http://example.com/index.php/welcome
	 *	- or -
	 * 		http://example.com/index.php/welcome/index
	 *	- or -
	 * Since this controller is set as the default controller in
	 * config/routes.php, it's displayed at http://example.com/
	 *
	 * So any other public methods not prefixed with an underscore will
	 * map to /index.php/welcome/<method_name>
	 * @see https://codeigniter.com/user_guide/general/urls.html
	 */
	public function __construct() {
        parent::__construct();
        
        // Your constructor code goes here
        // Perform any initialization tasks or set default values
        
        // Example: Load a model or library
		$this->load->model('YohanModel','Yohan');
    }

	public function index($message="")
	{
		$array['message']=$message;
		$this->load->view('accueil.php',$array);
	}	

	public function add_Cart(){
		$message=NULL;
		$array=array();	
		if($this->session->userdata('paint')==null){
			// echo "Tsy misy";
			$array[]=$_GET['idtab'];
			$this->session->set_userdata('paint',$array);
			var_dump($_SESSION);
			echo "tay";
		} else {
			var_dump($_SESSION);
			$array=$this->session->userdata('paint');
			if (array_search($_GET['idtab'],$array)!==false){
				$message="Vous avez déjà ajouté ce tableau dans votre panier!";
			} else {
				$array[]=$_GET['idtab'];
				$this->session->set_userdata('paint',$array);
			}
		}
		
		if ($message == NULL) {
			redirect('Mirado/tableau');
		}else{
			redirect('Details/detail_tableau_error?idtab='.$_GET['idtab']);
		}
		
	}

	// public function monpanier_static(){
	// 	if (!$this->session->has_userdata('paint')) {
	// 		$paint = array(
	// 			array('Nom' => 'Produit 1', 'Prix' => 25),
	// 			array('Nom' => 'Produit 2', 'Prix' => 30),
	// 			array('Nom' => 'Produit 3', 'Prix' => 28),
	// 			array('Nom' => 'Produit 4', 'Prix' => 28)
	// 		);
	// 		$this->session->set_userdata('elements', $elements);
	// 		$this->load->view('hoosdook/header.php');
	// 		$this->load->view('payment.php',$array);
	// 		$this->load->view('hoosdook/footer.php');
	// }
	// 	}
	// }

	public function monPanier(){
		$panier=array();
		if (isset($_SESSION['paint'])) {
			$panier=$_SESSION['paint'];
		}
		$tab=$this->Yohan->get_cart_item($panier);
		$array['cart']=$tab;
		$array['sum']=$this->Yohan->get_sum_of_Cart($tab);
		$array['expedition']=$this->Yohan->get_all_expedition_mode();
		$array['payment']=$this->Yohan->get_all_payment_mode();
		$this->load->view('hoosdook/header.php');
		$this->load->view('payment.php',$array);
		$this->load->view('hoosdook/footer.php');
	}

	public function deleteInCart(){
		$session=$_SESSION['paint'];
		$index=array_search($_GET['idpainting'],$session);
		if ($index!==false) {
			array_splice($session,$index,1);		
		}
		$this->session->set_userdata('paint',$session);
		$this->monPanier();
	}

	public function deleteAllCart(){
		$this->session->unset_userdata('paint');
		$this->index("");
	}
	
	
	


	
}
