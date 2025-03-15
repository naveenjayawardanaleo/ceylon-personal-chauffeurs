<?php
class Testemonials_model extends CI_Model
{
	var $_table = "testemonials",
		$primary_key = "TestemonialsId";

	function __construct()
	{
		parent::__construct();
	}
	public function insert_testmonials($post){
		return $this->db->insert('testemonials', $post);
	}
	public function get_testemonial_list(){
		$this->db->where('IsDeleted', 0);
		$data = $this->db->get('testemonials');
		return $data->result();
	}
	public function get_testemonials($id){
		$this->db->where('TestemonialsId', $id);
		$data = $this->db->get('testemonials');
		return $data->row();
	}
	public function get_all_by_order($limit = 0){
		$this->db->select('*');
		$this->db->from($this->_table);
		$this->db->where('IsDeleted', FALSE);
		$this->db->order_by('Order','ASC');
		if($limit > 0){
			$this->db->limit($limit);
		}
		$data = $this->db->get();
		return $data->result();
	}
	public function update_testemonial($testemonial_id, $post){
		$this->db->where('TestemonialsId', $testemonial_id);
		return $this->db->update('testemonials', $post);
	}
	public function get_testemonials_order(){
		$this->db->where('IsDeleted', 0);
		$this->db->order_by('Order', 'ASC');
		$data = $this->db->get('testemonials');
		return $data->result();
	}
}