<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Food extends CI_Controller {

    public function __construct()
    {
        parent::__construct();
        $this->load->model('food_model');
    }

    public function create_food()
    {
        $data['food_category'] = $this->food_categories_model->get_food_categories();

        $this->load->view('admin/header');
        $this->load->view('admin/add_food', $data);
        $this->load->view('admin/footer');
    }

	public function add_food()
	{

        $config['upload_path'] = './assets/images/food';
		$config['allowed_types'] = 'gif|jpg|png';
		$config['max_size'] = '1000';
		$config['max_width'] = '1000';
		$config['max_height'] = '1000';

		$this->load->library('upload', $config);
		$food_image = $_FILES['userfile']['name'];

		if(!$this->upload->do_upload('userfile')){

			$errors = array('error'=> $this->upload->display_errors());
        
		}else{
		
            $data = array('upload_data' => $this->upload->data());

        }
			
        $data = $this->input->post();
        $data['food_image'] = $food_image;

        if($this->food_model->add_food($data))
            {
                $this->session->set_flashdata('msg', 'Food has been added successfully!');

            }else{
            
                $this->session->set_flashdata('msg', 'Food has not been added ...');
            }

            return redirect('admin/create_food');
                
    }

    public function view_food($offset=0)
    {
        $this->load->library('pagination');

		$config['base_url'] = base_url(). 'admin/view_food/';
		$config['total_rows'] = $this->food_model->count_all();
		// $config['uri_segment'] = 4;
		$config['per_page'] = 8;

        $this->pagination->initialize($config);

        $data['food'] = $this->food_model->get_foods($config['per_page'], $offset);

        $this->load->view('admin/header');
        $this->load->view('admin/view_food', $data);
        $this->load->view('admin/footer');
        
    }

    public function update_food($id)
	{
		
		$food = $this->food_model->get_single_food($id);

        $this->load->view('admin/header');
        $this->load->view('admin/update_food', ['food' => $food]);
        $this->load->view('admin/footer');

	}

    public function edit_food($id)
    {
        $this->form_validation->set_rules('food_name', 'Enter food name', 'required');

		if ($this->form_validation->run())
		{
            
            $data = $this->input->post();
            unset($data['submit']);
            if($this->food_model->update_food($data, $id))
            {
                $this->session->set_flashdata('msg', 'Food has been updated  successfully!');

            }else{
            
                $this->session->set_flashdata('msg', 'Food has not been updated ...');

                redirect('admin/update_food');

            }

            return redirect('admin/view_food');

		}else{
		
			echo validation_errors();
		}
    }

    public function remove_food($id)
    {
        if($this->food_model->remove_food($id)){

            $this->session->set_flashdata('msg', 'Food has been removed successfully');

        }else{

            $this->session->set_flashdata('msg', 'Food has not been removed');

        }

        return redirect('admin/view_food');

    } 
    
    

           

}
