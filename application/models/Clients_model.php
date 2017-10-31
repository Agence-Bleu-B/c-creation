<?php  if ( ! defined('BASEPATH')) exit('No direct script access allowed');
class clients_model extends CI_Model
{
    //récupération des clients
    public function get_clients(){

        $req = 'SELECT * FROM clients';
        $query = $this->db->query($req);
        $liste = $query->result_array();

        return $liste;
    }
}