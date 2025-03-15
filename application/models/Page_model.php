<?php
class Page_model extends CI_Model
{
	var $_table = "brand",
		$primary_key = "BrandId";

	function __construct()
	{
		parent::__construct();
	}
	public function update_page($id, $post){
		$this->db->where('PageId', $id);
		return $this->db->update('page', $post);
	}
	public function get_page_details($id){
		$this->db->where('PageId', $id);
		$data = $this->db->get('page');
		return $data->row();
	}

}