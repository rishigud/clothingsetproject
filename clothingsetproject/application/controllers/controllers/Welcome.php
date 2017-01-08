<?php

class Welcome extends CI_Controller{
	
	
	public function index(){
		
		//$data['allitems']=$this->items_model->get_items();
		
		$data['main_content']='carousel';
		
	$this->load->view('layouts/main',$data);
		
	}
	
	
}


?>