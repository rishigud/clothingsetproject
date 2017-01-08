<?php 

class Cart extends CI_Controller{
	
	public $paypal_data='';
	public $tax;
	public $shipping;
	public $total=0;
	public $grand_total;
	/*
	* cart controller index
	*/
	public function index(){
		
		
		$data['main_content']='cart';
	$this->load->view('layouts/main',$data);
	
	}
	
	/*
	* add to cart
	*/
	public function add(){
		
$data =array( 'id' => $this->input->post('item_number'),
              'price' => $this->input->post('price'),
			  'name' => $this->input->post('brand'),
			  'qty' => $this->input->post('qty')



               );
			  // print_r($data); die();
		
		$this->cart->insert($data);
		redirect('items');
	}
	
	public function update($in_cart=null){
		
		$data=$_POST;
		$this->cart->update($data);
		
		//show cart page
		redirect('cart','referesh');
		
		
	}
	/*
	*process form
	*/
	 public function process() {
        if($_POST) {
            foreach($this->input->post('item_name') as $key => $value) {
                //Get Tax & Shipping from config
                $this->tax = $this->config->item('tax');
                $this->shipping = $this->config->item('shipping');
                
                $item_id = $this->input->post('item_code')[$key];
                $product = $this->Products_model->get_product_details($item_id);
                
                 
                //Assign Data to PayPal
                $this->paypal_data .= '&L_PAYMENTREQUEST_0_NAME' . $key . '=' . urlencode($product->brand);
                $this->paypal_data .= '&L_PAYMENTREQUEST_0_NUMBER' . $key . '=' . urlencode($item_id);
                $this->paypal_data .= '&L_PAYMENTREQUEST_0_AMT' . $key . '=' . urlencode($product->selling_price);
                $this->paypal_data .= '&L_PAYMENTREQUEST_0_QTY' . $key . '=' . urlencode($this->input->post('item_qty')[$key]);
                
                //Price X Quantity
                $subtotal = ($product->selling_price * $this->input->post('item_qty')[$key]);
                $this->total = $this->total + $subtotal;
                
                $paypal_product['items'][] = array(
                    'itm_name'  => $product->brand,
                    'itm_price' => $product->selling_price,
                    'itm_code'  => $item_id,
                    'itm_qty'   => $this->input->post('item_qty')[$key]
                );
               
           
                
              
                //Create Order Array
                $order_data = array(
                    'item_id' => $item_id,
                    'user_id' => $this->session->userdata('user_id'),
                    'transaction_id' => 0,
                    'qty' => $this->input->post('item_qty')[$key],
                    'price' => $subtotal,
                    'address' => $this->input->post('address'),
                    'address2' => $this->input->post('address2'),
                    'city' => $this->input->post('city'),
                    'state' => $this->input->post('state'),
                    'zipcode' => $this->input->post('zip')
                );
                
                //Add Order Data
                $this->Products_model->add_order($order_data);
            }
            
            //Get grand total
            $this->grand_total = $this->total + $this->tax + $this->shipping;
            
            //Create array of Costs
            $paypal_product['assets'] = array(
                'tax_total' => $this->tax,
                'shipping_cost' => $this->shipping,
                'grand_total' => $this->total
            );
            
           
        }
	
	$data['main_content']='orderplaced';
	$this->load->view('layouts/main',$data);
	
}
}


?>