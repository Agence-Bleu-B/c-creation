<?php  if ( ! defined('BASEPATH')) exit('No direct script access allowed');
class connection_model extends CI_Model
{
    //verification de session
    public function isconnect(){

        $connected = $this->session->userdata('connected');

        if ($connected) {
            return true ;
        }
        else{
            return false;
        }
    }
    //connection et mise en session
    public function connection($login,$mdp){

        $this->db->where('login',$login);
        $this->db->from('clients');
        $log = $this->db->count_all_results();
        if ($log == 1) {
            $req = $this->db->select('mdp')->where('login',$login)->from('clients')->get()->result_array();
            
            if ($mdp == $req[0]['mdp'] ) {
               $this->session->connected = true;
            };
        }
        
    }
    //deconnection et destruction session
    public function deco(){
        $this->session->unset_userdata('connected');
    }
}
