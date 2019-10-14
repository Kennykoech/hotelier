<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class user extends CI_Controller {

     public function __construct()
     {

         parent::__construct();
         $this->load->model('user_model');

     }

     public function index($offset=0)
     {
         $this->load->library('pagination');
         $config['base_url'] = base_url(). 'user/';
         $config['total_rows'] = $this->food_model->count_all();
         // $config['uri_segment'] = 4;    
         $config['per_page'] = 5;

         $this->pagination->initialize($config);


         $data['food'] = $this->user_model->get_foods($config['per_page'], $offset);

         $this->load->view('user/header');
         $this->load->view('user/home', $data);
         $this->load->view('user/footer');

     }
 
    public function execute_search()
    {
	    
        $search_term = $this->input->post('search');

        $foods = $this->user_model->get_food_results($search_term);

        $this->load->view('user/header');
        $this->load->view('user/search_food', ['foods' => $foods]);
        $this->load->view('user/footer');
    
    }

}
