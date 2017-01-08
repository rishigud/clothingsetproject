<?php

class Member_model extends CI_Model{
	
	public function member_register(){
		
		
		$data = array('username' => $this->input->post('username'),
		              'password'=>md5($this->input->post('password')),
					  'email'=>$this->input->post('email'),
					  'major'=>$this->input->post('choose'),
					  'address'=>$this->input->post('address'),
					  'city'=>$this->input->post('city'),
					  'state'=>$this->input->post('state'),
					  'zip'=>$this->input->post('zip'),
					  'phone'=>$this->input->post('phone'),
					  'gender'=>$this->input->post('gender'));
					  
		$insert = $this->db->insert('checker',$data);
		return $insert;
		
	}
	public function login($username,$password){
		
		$this->db->where('username',$username);
		$this->db->where('password',$password);
		
		$result= $this->db->get('checker');
		if($result->num_rows()==1){
			
			return $result->row(0)->c_id;
			
		}else{
			
			return false;
		}
		
		
		
		
	}
	
}

?>