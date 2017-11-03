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
    //creation nouveau client
    public function new_client($post){
    	$data = array(
        'login' => $post['login'],
        'mdp' => $post['mdp']
		);

		$this->db->insert("clients", $data);
    }
    //modification client
    public function modif_client($post){
    	$data = array(
        'login' => $post['login'],
        'mdp' => $post['mdp']
		);

		$this->db->where('id', $post['id']);
		$this->db->update('clients' , $data);
    }
    //suppression client
    public function delete_client($post){
    	$this->db->delete('clients', array('id' => $post['id']));
    }
}