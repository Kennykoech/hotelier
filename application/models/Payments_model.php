<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Payments_model extends CI_Model {

    public function __construct()
    {
        $this->load->database();
    }

    public function get_orders_made()
    {

        $this->db->order_by('id', 'DESC');
        $query = $this->db->get('order');

        return $query->result();

    }

    public function place_order($data)
    {
      
        $query = $this->db->insert('place_order', $data);
        
		return $query;

    }

}