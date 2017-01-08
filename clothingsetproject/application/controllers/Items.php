<?php

class Items extends CI_Controller{
	
	
	public function index(){
		
		//$data['allitems']=
		$data['products']=$this->Products_model->get_products();
		
	$data['main_content']='products';
	$this->load->view('layouts/main',$data);
			
	}
	
	public function details($id){
		
		
		//get product details
		$data['products']=$this->Products_model->get_product_details($id);
		
		//load view
		$data['main_content']='details';
	$this->load->view('layouts/main',$data);
		
	}
	
	public function category_products($id){
		
		
		//get product details
		$data['products']=$this->Products_model->get_category_product_details($id);
		
		//load view
		$data['main_content']='category_products';
	$this->load->view('layouts/main',$data);
		
	}
}


?>