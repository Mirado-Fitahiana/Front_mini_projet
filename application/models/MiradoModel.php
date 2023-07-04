<?php
defined('BASEPATH') or exit('No direct script access allowed');

class MiradoModel extends CI_Model
{
    public function get4Tableau(){
        $result = $this->db->query("select * FROM view_artist_painting ORDER BY RANDOM() LIMIT 4");
        $result=$result->result_array();
        $this->db->close();
        return $result;
    }
    public function All_Tableau(){
        $result = $this->db->query("select * FROM view_artist_painting ORDER BY RANDOM() LIMIT 4");
        $result=$result->result_array();
        $this->db->close();
        return $result;
    }
    public function get_artiste_by_id($idartiste){
        $result = $this->db->query("select * FROM view_artist_painting where idartist=".$idartiste);
        $result=$result->result_array();
        $this->db->close();
        return $result;
    }
    public function get_painting_by_id($idartiste){
        $result = $this->db->query("select * FROM view_artist_painting where idpainting=".$idartiste);
        $result=$result->result_array();
        $this->db->close();
        return $result;
    }

}