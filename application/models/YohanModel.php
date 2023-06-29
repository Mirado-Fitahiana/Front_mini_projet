<?php
defined('BASEPATH') or exit('No direct script access allowed');

class YohanModel extends CI_Model
{
    public function get_all_painting()
    {
        $result=$this->db->query("select * from painting");
        $result=$result->result_array();
        $this->db->close();
        return $result;
    }

    public function get_painting_by_id($idpainting){
        $result=$this->db->query("select * from painting where idpainting=".$idpainting);
        $result=$result->result_array();
        $this->db->close();
        return $result[0];
    }

    public function get_all_artist(){
        $result=$this->db->query("select * from artist");
        $result=$result->result_array();
        $this->db->close();
        return $result;
    }

    public function get_artist_by_id($idartist){
        $result=$this->db->query("select * from artist where idartist=".$idartist);
        $result=$result->result_array();
        $this->db->close();
        return $result[0];
    }
    //Prendre les donnees dans le panier et les transformer en tableau de painting
    public function get_cart_item($session){
        $array=array();
        for ($i=0; $i < count($session); $i++) { 
            $array[]=$this->get_painting_by_id($session[$i]);
        }
        return $array;
    }

    public function get_sum_of_Cart($cart)
    {
        $price=0;
        for ($i=0; $i < count($cart); $i++) { 
            $price+=$cart[$i]['price'];
        }
        return $price;
    }

    public function get_all_expedition_mode(){
		$result=$this->db->query("select * from expeditionmode");
        $result=$result->result_array();
        $this->db->close();
        return $result;
	}

    public function get_expedition_mode_by_id($idexpedition){
        $result=$this->db->query("select * from expeditionmode where idexpedition=".$idexpedition);
        $result=$result->result_array();
        $this->db->close();
        return $result[0];
    }

    public function get_all_payment_mode(){
        $result=$this->db->query("select * from paymentmode");
        $result=$result->result_array();
        $this->db->close();
        return $result;
    }

    public function get_payment_mode_by_id($idpayment){
        $result=$this->db->query("select * from paymentmode where idpayement=".$idpayment);
        $result=$result->result_array();
        $this->db->close();
        return $result[0];
    }

    //Fonction recherche tonga ato an-doha 
    public function get_artist_by_name($word){
        $result=$this->db->query("select * from artist where artistname like '%".$word."%'");
        $result=$result->result_array();
        $this->db->close();
        return $result;
    }
}

?>

