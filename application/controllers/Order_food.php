<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Order_food extends CI_Controller {

	public function __construct()
	{

		parent::__construct();
		$this->load->model('order_food_model');

	}
	 //User making orders
	 public function make_order()
	 {

		$id = $this->uri->segment(3);

        $this->db->select('*');
        $this->db->from('food');
        $this->db->where('id', $id);
        $query = $this->db->get();
        $row = $query->row();

        $data = array(

            'id' =>  $id,
            'food_image' =>  $row->food_image,
            'food_name' =>  $row->food_name,
			'food_price' =>  $row->food_price,
			'qty' => 1

			);
			
		if($this->order_food_model->add_food($data))
		{

			$this->session->set_flashdata('msg', 'Food has been ordered successfully!');

		}else{

			$this->session->set_flashdata('msg', 'Food has not been ordered');

		}

		redirect('user');

	 }

	 //User checking the orders  made
	 public function view_order()
	 {

		$data['food'] = $this->order_food_model->view_order();

		$this->load->view('user/header');
		$this->load->view('user/view_order', $data);
		$this->load->view('user/footer');

	 }

	//  User updating qty of the food ordered
	public function food_qty($id)
	{
		$this->form_validation->set_rules('qty', 'Enter qty', 'required');

		if ($this->form_validation->run())
		{
            $data = $this->input->post();
            unset($data['submit']);
            if($this->order_food_model->update_qty($data, $id))
            {
                $this->session->set_flashdata('msg', 'qty updated  successfully');

            }else{

				$this->session->set_flashdata('msg', 'qty not updated successfully');
				
            }

			return redirect('order_food/view_order');
			
		}
		else{
		
			echo validation_errors();

        }
	}

	//User removing food from the list ordered
	public function remove_food($id)
	{

		$this->order_food_model->remove_food($id);
   
		redirect('order_food/view_order');	
		
	}

}
