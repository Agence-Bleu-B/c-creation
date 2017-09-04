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

        if ($login == "test" && $mdp == "test2000") {
            $this->session->connected = true;
        }
        
    }
    //deconnection et destruction session
    public function deco(){
        $this->session->unset_userdata('connected');
    }
}
