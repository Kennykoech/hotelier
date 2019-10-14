<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Food_categories extends CI_Controller {

	public function __construct()
	{
		parent::__construct();
		$this->load->model('food_categories_model');
	}

	public function create_food_category()
	{
		$data['food_category'] = $this->food_categories_model->get_food_categories();

		$this->load->view('admin/header');
		$this->load->view('admin/add_food_category', $data);
		$this->load->view('admin/footer');
	}

	public function add_food_category()
	{
		$this->food_categories_model->add_food_category();

        $this->session->set_flashdata('food_category_created', 'Your food category has been created');

		redirect('admin/create_food_category');
		
	}

}
