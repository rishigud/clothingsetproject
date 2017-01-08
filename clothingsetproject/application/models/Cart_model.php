<?php 

class Cart_model extends CI_MODEL{
	
	public function checkout(){
		
		$data = array('address' => $this->input->post('dateofdonation'),
					  'brand'=>$this->input->post('brand'),
					  'donor_email'=>$this->input->post('donoremail'),
					  'size'=>$this->input->post('size'),
					  'gender'=>$this->input->post('gender'),
					  'quote_price'=>$this->input->post('quoteprice'),
					  'selling_price'=>$this->input->post('sellingprice'),
					  'category'=>$this->input->post('choose'),
					  'images'=>$this->input->post('images'),
					  'description'=>$this->input->post('description'));

					  
		$insert = $this->db->insert('orders',$data);
		
		return $insert;
		
		
	}
	
	
	
	
}






?>