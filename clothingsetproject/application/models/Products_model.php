<?php 
class Products_model extends CI_Model{
	
	function get_products(){
		
		$this->db->select('*');
		$this->db->from('item');
		$query=$this->db->get();
		return $query->result();
	}
	
	function get_product_details($id){
		
		$this->db->select('*');
		$this->db->from('item');
		$this->db->where('i_id', $id);
		$query=$this->db->get();
		return $query->row();
		
	}
	
	function get_categories(){
		
		$this->db->select('*');
		$this->db->from('categories');
		$query=$this->db->get();
		return $query->result();
		
	}
	function get_items_by_category($id){
		
		$this->db->select('*');
		$this->db->from('item');
		$this->db->where('i_id', $id);
		$query=$this->db->get();
		return $query->row();
		
	}
	function get_most_popular(){
		
		$this->db->select('I.*,COUNT(O.item_id) as total');
		$this->db->from('orders as O');
		$this->db->join('item as I','O.item_id=I.i_id','INNER');
		$this->db->group_by('O.item_id');
		$this->db->order_by('total','desc');
		$query=$this->db->get();
		return $query->result();
		
	}
	
	function add_order($order_data){
		
		$insert=$this->db->insert('orders',$order_data);
		return $insert;
	}
	function get_category_product_details($id){
		
		$this->db->select('*');
		$this->db->from('item');
		$this->db->where('category', $id);
		$query=$this->db->get();
		return $query->result();
		
	}
}

?>