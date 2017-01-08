<?php 

class Users extends CI_Controller{
	
	public function register(){
		//setting rules
		$this->form_validation->set_rules('username', 'Username', 'trim|required|max_length[20]|min_length[2]');
        $this->form_validation->set_rules('password', 'Password', 'trim|required|max_length[16]|min_length[6]');
        $this->form_validation->set_rules('password2', 'Password Confirmation', 'trim|required|max_length[16]|min_length[6]|matches[password]');
        $this->form_validation->set_rules('email', 'Email', 'required|valid_email');
		
		 if ($this->form_validation->run() == FALSE)
                {
                       $data['main_content']='register';
		$this->load->view('layouts/main',$data);
                }
                else
                {
                    if($this->User_model->register()){
						$this->session->set_flashdata('registered','You are now successfully registered');
						redirect('items');
					}    
						
						
                }
		
		
		
	}
	
	public function login(){
		
		$this->form_validation->set_rules('username', 'Username', 'trim|required|max_length[20]|min_length[2]');
        $this->form_validation->set_rules('password', 'Password', 'trim|required|max_length[16]|min_length[6]');
		
		$username=$this->input->post('username');
		$password=md5($this->input->post('password'));
		
		$user_id=$this->User_model->login($username,$password);
		
		if($user_id){
			
			
			$data=array('user_id'=> $user_id,
                        'username'=>$username,
                        'logged_in' => true						
			
			                  );
							  
			$this->session->set_userdata($data);
            $this->session->set_flashdata('pass_login','Successfully logged in');
             redirect('items');			
			
		}
		else{
			
			
			$this->session->set_flashdata('fail_login','Sorry login failed');
             redirect('items');
		}
	}
	
	public function logout(){
		
		$this->session->unset_userdata('user_id');
		$this->session->unset_userdata('username');
		$this->session->unset_userdata('logged_in');
		$this->session->sess_destroy();
		
		redirect('items');
		
		
		
	}
	
	
}



?>