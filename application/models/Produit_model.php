<?php  if ( ! defined('BASEPATH')) exit('No direct script access allowed');
class Produit_model extends CI_Model
{
    //récupération de tous les produits
    public function get_all(){
    	$req = 'SELECT * FROM produits';
    	$query = $this->db->query($req);
    	$liste = $query->result_array();

    	return $liste;
    }
	//produitspar categorie, sans pagination(admin)
	public function get_cat($cat)
	{
		$result=$this->db->select()
                            ->from('produits')
                            ->where('categorie = '.'"'.$cat.'"')
                            ->order_by('ref')
                            ->get()
                            ->result_array();
		return $result;
	}


    public function max_ligne()
    {
        return $this->db->count_all("produits");
    }


    public function get_by_cat($offset,$limit,$cat)
    {
    	if($cat === 0)
    	{
    		$req = 'SELECT * FROM produits';
    	}
    	else
    	{

			//$req= 'SELECT * FROM produits WHERE categorie = '.'"'.$cat.'"'.' LIMIT '.$offset.','.$limit;
            $req=$this->db->select()
                            ->from('produits')
                            ->where('categorie = '.'"'.$cat.'"')
                            ->limit($limit,$offset)
                            ->order_by('ref')
                            ->get()
                            ->result_array();
    	}

    	//$query = $this->db->query($req);
    	//$liste = $query->result_array();

    	return $req;
    }

    public function add_prod($post)
    {
    	$data = array(
    		'ref' => $post['ref'],
    		'nom' => $post['nom'],
    		'coloris' =>$post['coloris'],
    		'dimension' =>$post['dimension'],
    		'dispo' => $post['dispo'],
    		'categorie' => $post['categorie']);

    	$this->db->insert('produits',$data);

    }

    public function supp_prod($id)
    {
    	$this->db->delete('produits',array('id'=>$id));
    }

    public function modif_prod($post)
    {
    	$data = array(
    		'id' => $post['id'],
    		'ref' => $post['ref'],
    		'nom' => $post['nom'],
    		'coloris' =>$post['coloris'],
    		'dimension' =>$post['dimension'],
    		'dispo' => $post['dispo'],
    		'categorie' => $post['categorie']);

    	$this->db->where('id', $post['id']);
		$this->db->update('produits' , $data);

    }

    public function get_detail($ref)
    {
    	$req = 'SELECT * FROM produits WHERE ref = '."'".$ref."'";
    	$query = $this->db->query($req);
    	$liste = $query->result_array();

    	return $liste;
    }

    public function get_nouveaute()
    {
        $req = 'SELECT * FROM nouveaute NATURAL JOIN produits';
        $query = $this->db->query($req);
        $liste = $query->result_array();

        return $liste;
    }
    public function modif_image($post,$files){
        $filename=$files['photo']['name'];
        //enregistre images
        //load library
        $this->load->library('upload');
        // config upload
        $chemin = './assets/images/produits';
        $config['upload_path'] = $chemin;
        $config['allowed_types'] = 'gif|jpg|png';
        $config['max_size']    = '0';
        $this->upload->initialize($config);
        $this->upload->do_upload('photo');
        $test = $this->upload->display_errors();
        
        $data = array(
                'image'  => $this->upload->data('file_name')
        );
        $this->db->where('id', $post['id']);
        $this->db->update('produits', $data);
        return $test;
    }
}
    
