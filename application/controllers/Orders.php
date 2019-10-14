<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Orders extends CI_Controller {

	public function __construct()
	{

		parent::__construct();
        $this->load->model('orders_model');
        
    }

    //Admin confirming orders
    public function confirm_food_orders()
    {

        $data['place_order'] = $this->orders_model->get_user_orders();

        $this->load->view('admin/header');
        $this->load->view('admin/home',$data);
        $this->load->view('admin/footer');

    }

   




}