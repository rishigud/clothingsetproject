<?php 

class Admin extends CI_controller{
	
	
	public function index(){
		
		
		$data['main_content']='admin';
		$this->load->view('layouts/main_admin',$data);
		
		
	}
	
	public function donor_register(){
		//setting rules
		$this->form_validation->set_rules('name', 'Full Name', 'trim|required|max_length[30]|min_length[2]');

        $this->form_validation->set_rules('email', 'Email', 'required|valid_email');
		$this->form_validation->set_rules('address', 'Address', 'required');
		$this->form_validation->set_rules('city', 'City', 'required');
		$this->form_validation->set_rules('state', 'City', 'required');
		$this->form_validation->set_rules('phone', 'Phone', 'required|max_length[12]');
		
		 if ($this->form_validation->run() == FALSE)
                {
                       $data['main_content']='donor';
		               $this->load->view('layouts/main_admin',$data);
                }
                else
                {
                    if($this->Donor_model->donor_register()){
						$this->session->set_flashdata('donoradded','You have now successfully added the donor');
						redirect('admin');
					}    
						
						
                }
	
	
	
}
public function donation(){
	
	     $this->form_validation->set_rules('dateofdonation', 'Date Of Donation','required');
         $this->form_validation->set_rules('donoremail', 'Donor Email', 'required|valid_email');
        $this->form_validation->set_rules('brand', 'Brand', 'required');
		$this->form_validation->set_rules('size', 'Size', 'required');
		$this->form_validation->set_rules('quoteprice', 'Quote Price', 'required');
		$this->form_validation->set_rules('sellingprice', 'Selling Price', 'required');
		$this->form_validation->set_rules('images', 'Image name', 'required');
	
		
		 if ($this->form_validation->run() == FALSE)
                {
                       $data['main_content']='donation';
		               $this->load->view('layouts/main_admin',$data);
                }
                else
                {
                    if($this->Donor_model->donation()){
                      $ci = get_instance();
$ci->load->library('email');
$config['protocol'] = "smtp";
$config['smtp_host'] = "ssl://smtp.gmail.com";
$config['smtp_port'] = "465";
$config['smtp_user'] = "rishigud@gmail.com"; 
$config['smtp_pass'] = "rishikumar@1992";
$config['charset'] = "utf-8";
$config['mailtype'] = "html";
$config['newline'] = "\r\n";

$ci->email->initialize($config);

$ci->email->from('rishigud@gmail.com', 'rishi');
$list = $this->input->post('donoremail');
$ci->email->to($list);
$this->email->reply_to('rishigud@gmail.com', 'Explendid Videos');
$ci->email->subject('Thanks for donating');
$ci->email->message('This is your tax document');
if(!$ci->email->send()){
	
	show_error($ci->email->print_debugger());
}
                        
						$this->session->set_flashdata('iteminserted','You have now successfully inserted an item and an Email
						has been sent to the Donor');
						redirect('admin');
						
						
					}    
						
						
                }
	
	
	
	
}

	public function member_register(){
		//setting rules
		//setting rules
		$this->form_validation->set_rules('username', 'Username', 'trim|required|max_length[20]|min_length[2]');
        $this->form_validation->set_rules('password', 'Password', 'trim|required|max_length[16]|min_length[6]');
        $this->form_validation->set_rules('password2', 'Password Confirmation', 'trim|required|max_length[16]|min_length[6]|matches[password]');
        $this->form_validation->set_rules('email', 'Email', 'required|valid_email');
		$this->form_validation->set_rules('choose', 'Major', 'required');
		
		 if ($this->form_validation->run() == FALSE)
                {
                       $data['main_content']='member';
		$this->load->view('layouts/main_admin',$data);
                }
                else
                {
                    if($this->Member_model->member_register()){
						$this->session->set_flashdata('memberadded','You have now successfully registered a member');
						redirect('admin');
					}    
				}	
	}				
		public function login(){
		
		$this->form_validation->set_rules('username', 'Username', 'trim|required|max_length[20]|min_length[2]');
        $this->form_validation->set_rules('password', 'Password', 'trim|required|max_length[16]|min_length[6]');
		
		$username=$this->input->post('username');
		$password=$this->input->post('password');
		
		$user_id=$this->Donor_model->login($username,$password);
		
		if($user_id){
			
			
			$data=array('user_id'=> $user_id,
                        'username'=>$username,
                        'logged_in' => true						
			
			                  );
							  
			$this->session->set_userdata($data);
            $this->session->set_flashdata('pass_login','Successfully logged in');
             redirect('admin');			
			
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

public function editcategory($id){
		
		
		//get product details
		$data['products']=$this->Products_model->get_items_by_category($id);
		
		//load view
		$data['main_content']='editcategory';
	$this->load->view('layouts/main',$data);
		
	}	

public function update($id){
	
	if(isset($_POST['submit'])){
		//$name= mysqli_real_escape_string($this->db->link,$_POST['name']);
		$brand=$this->input->post('brand');
		$category=$this->input->post('category');
		$size=$this->input->post('size');
		$sellingprice=$this->input->post('sellingprice');
		$query=$this->db->query("update item set brand='$brand',category='$category',
                                size='$size',selling_price='$sellingprice' where i_id='$id'");
		redirect('admin');
		
		
	}
	else{
		
		$query=$this->db->query("delete from item where i_id='$id'");
		redirect('admin');
		
	}
	
	
	
}
						


}

?>