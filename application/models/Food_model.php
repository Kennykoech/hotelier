<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Food_model extends CI_Model {

    public function __construct()
    {
        $this->load->database();
    }

	public function add_food($data)
	{
        $query = $this->db->insert('food', $data);
        
		return $query;
    }
    
    public function get_food_categories()
    {
        $this->db->order_by('food_category_name');
        $query = $this->db->get('food_category');
        
        return $query->result_array();

    }

    public function get_foods($limit, $offset)
    {
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
    
    public function remove_food($id)
	{

		return $this->db->delete('food',['id' => $id]);
		
    }

    public function get_single_food($id)
	{
		$query = $this->db->get_where('food', array('id' => $id));

		if($query->num_rows() > 0){
			return $query->row();
		}else{
            return false;
		}
	}


    public function update_food($data, $id)
	{
		return $this->db->where('id',$id)
						->update('food', $data);
	}

    
}
