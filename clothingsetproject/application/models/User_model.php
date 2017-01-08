<?php

class User_model extends CI_Model{
	
	public function register(){
		
		
		$data = array('username' => $this->input->post('username'),
		              'password'=>md5($this->input->post('password')),
					  'email'=>$this->input->post('email'),
					  'address'=>$this->input->post('address'),
					  'city'=>$this->input->post('city'),
					  'state'=>$this->input->post('state'),
					  'zip'=>$this->input->post('zip'),
					  'phone'=>$this->input->post('phone'),
					  'gender'=>$this->input->post('gender'));
					  
		$insert = $this->db->insert('registered_user',$data);
		return $insert;
		
	}
	public function login($username,$password){
		
		$this->db->where('username',$username);
		$this->db->where('password',$password);
		
		$result= $this->db->get('registered_user');
		if($result->num_rows()==1){
			
			return $result->row(0)->reg_id;
			
		}else{
			
			return false;
		}
		
		
		
		
	}
	
}

?>