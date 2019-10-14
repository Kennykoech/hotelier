<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Orders_model extends CI_Model {

    public function __construct()
    {
        $this->load->database();
    }

    public function get_user_orders()
    {
        $this->db->order_by('id', 'DESC');
        $query = $this->db->get('place_order');
        
        return $query->result();
        
    }


}
