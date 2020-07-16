<?php

class Welcome_model extends CI_Model {

   
	public function get_trending_housing(){
		$this->db->select("*");
		$this->db->from('categories');
		$query = $this->db->get();
		return $query->result();
	} 

	public function get_products_list(){
		$this->db->select("*");
		$this->db->from('products');
		$query = $this->db->get();
		return $query->result();
	} 

}
?>