<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class User_model extends CI_Model {

    public function __construct()
    {
        $this->load->database();
    }

    public function get_foods($limit, $offset)
    {

        #search food
		$keyword = $this->input->get('keyword');
		$this->db->like(array('food_name' => $keyword));

		$this->db->limit($limit);
		$this->db->offset($offset);

        $this->db->order_by('id', 'DESC');
        $query = $this->db->get('food');

        return $query->result();
    }

    public function count_all()
	{
		return $this->db->get('food')->num_rows();
    }

    public function get_food_results($search_term='default')
    {
        // Use the Active Record class for safer queries.
        $this->db->select("*");
        $this->db->from("food");
        $this->db->like("food_name",$search_term);
        

        // Execute the query.
        $query = $this->db->get();

        // Return the results.
        if($query){

            return $query->result();

        }else{

            return array();

        }
    }

}