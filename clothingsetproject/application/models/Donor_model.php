<?php 

class Donor_model extends CI_Model{
	
	
	public function donor_register(){
		$num=$this->input->post('itemsdonated');
		for($i=0;$i<$num;$i++){
		$data = array('phone' => $this->input->post('phone'),
					  'fullname'=>$this->input->post('name'),
					  'persontype'=>$this->input->post('choose'),
					'email'=>$this->input->post('email'),
					  'gender'=>$this->input->post('gender'),
					  'address'=>$this->input->post('address'),
					  'city'=>$this->input->post('city'),
					  'state'=>$this->input->post('state'),
					  'zip'=>$this->input->post('zip'));
					  
		$insert = $this->db->insert('donor',$data);
	
		}
		return true;
	}
	
	public function donation(){
		
		$data = array('date_of_donation' => $this->input->post('dateofdonation'),
					  'brand'=>$this->input->post('brand'),
					  'donor_email'=>$this->input->post('donoremail'),
					  'size'=>$this->input->post('size'),
					  'gender'=>$this->input->post('gender'),
					  'quote_price'=>$this->input->post('quoteprice'),
					  'selling_price'=>$this->input->post('sellingprice'),
					  'category'=>$this->input->post('choose'),
					  'images'=>$this->input->post('images'),
					  'description'=>$this->input->post('description'));

					  
		$insert = $this->db->insert('item',$data);
		
		return $insert;
		
	}
	public function login($username,$password){
		
		$this->db->where('username',$username);
		$this->db->where('password',$password);
		
		$result= $this->db->get('admin');
		if($result->num_rows()==1){
			
			return $result->row(0)->a_id;
			
		}else{
			
			return false;
		}
		
		
		
		
	}
	
	public function displaydetails(){
		
		$query=$this->db->query('select d.fullname,d.persontype,d.i_id,
i.date_of_donation,i.brand,i.size,i.selling_price,i.category from donor as d
join item as i on d.i_id=i.i_id order by brand;' );
		    return $query->result();
		
	}
	
}


?>