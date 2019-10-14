<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Order_food_model extends CI_Model {

    public function __construct()
    {
        $this->load->database();
    }

    //Add food to order table
    public function add_food($data)
    {

        $query = $this->db->insert('order', $data);

        return $query;

    }

    //view food from the order table
    public function view_order()
    {
        $this->db->select('*');
        $this->db->from('order');
        
        $query = $this->db->get();

        return $query->result();

    }

    public function update_qty($data, $id)
	{

		return $this->db->where('id',$id)
		                ->update('order', $data);
    
    }

    public function remove_food($id)
	{

        return $this->db->delete('order',['id' => $id]);
        
    }



}