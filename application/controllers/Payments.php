<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Payments extends CI_Controller {

public function __construct()
    {
        parent::__construct();
         $this->load->model('payments_model');
		
	}
	
	public function place_order()  
	{
		$this->load->library('form_validation');

		$this->form_validation->set_rules('mobile', ' +254...', 'required');
		$this->form_validation->set_rules('mpesa_code', 'Mpesa_code', 'required');

		if($this->form_validation->run() === TRUE){

			$data = array(

				'food_name' => $this->input->post('food_name'),
				'food_price' => $this->input->post('food_price'),
				'qty' => $this->input->post('qty'),
				'sub_total' => $this->input->post('sub_total'),
				'total' => $this->input->post('total'),
				'mobile' => $this->input->post('mobile'),
				'mpesa_code' => $this->input->post('mpesa_code')
	
			);
			
			if($this->payments_model->place_order($data))
			{
	
				$this->session->set_flashdata('msg', 'Your order has been placed...Thank You');
	
			}else{
	
				$this->session->set_flashdata('msg', 'Your order has not been placed..Please try again');
	
			}
	
			redirect('payments/checkout');

		}elseif($this->form_validation->run() === FALSE){

			$data['order'] = $this->payments_model->get_orders_made();

			$this->load->view('user/header');
			$this->load->view('user/checkout', $data);
			$this->load->view('user/footer');

		}else{

			echo validation_errors();

		}
	}

	public function checkout()
	{

		$data['order'] = $this->payments_model->get_orders_made();

		$this->load->view('user/header');
		$this->load->view('user/checkout', $data);
		$this->load->view('user/footer');

	}

	public function delivery()
	{

		$this->load->view('user/header');
		$this->load->view('user/delivery');
		$this->load->view('user/footer');

	}


}
