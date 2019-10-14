<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Food_categories_model extends CI_Model {

	public function add_food_category()
	{
        $data = array(
            
            'food_category_name' => $this->input->post('food_category_name'),     
        );

        return $this->db->insert('food_category', $data);
    }

    public function get_food_categories()
    {

        $this->db->order_by('food_category_name');
        $query = $this->db->get('food_category');
        
        return $query->result_array();

    }
   
}
