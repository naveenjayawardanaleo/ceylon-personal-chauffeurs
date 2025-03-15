<?php

class Products_model extends CI_Model

{

	var $_table = "products",

		$primary_key = "ProductId";



	function __construct()

	{

		parent::__construct();



	}

	public function insert_product($post){

		return $this->db->insert('products', $post);



	}

	public function get_products_list(){

		// $this->db->where('IsDeleted', 0);

		// $data = $this->db->get('products');

		// return $data->result();

		$this->db->select('* , products.Image');

		$this->db->from('products');

		$this->db->join('category', 'category.CategoryId=products.CategoryId');

		$this->db->where('products.IsDeleted', 0);

		$this->db->where('category.IsDeleted', 0);

		$this->db->order_by('products.ProductId', 'desc');

		$data = $this->db->get();

		return $data->result();

	}

	public function get_products_details($id){

		$this->db->where('ProductId', $id);

		$data = $this->db->get('products');

		return $data->row();

	}

	public function update_products($product_id, $post){

		$this->db->where('ProductId', $product_id);

		return $this->db->update('products', $post);

	}

	public function get_totol_count($category_id){

		$this->db->where('CategoryId', $category_id);

		$this->db->where('IsDeleted', 0);

		$data = $this->db->get('products');

		return $data->num_rows();

	}

	public function get_product_with_limit($category_id, $per_page,  $page){

		// $this->db->where('CategoryId', $category_id);

		// $this->db->limit($per_page, ($page - 1) * $per_page);

		// $data = $this->db->get('products');

		// return $data->result();

		$this->db->select('*, products.Image');

		$this->db->from('products');

		$this->db->join('category', 'category.CategoryId=products.CategoryId');

		$this->db->where('products.CategoryId', $category_id);
		$this->db->where('products.IsDeleted', 0);

		$this->db->limit($per_page, ($page - 1) * $per_page);

		$data = $this->db->get();

		return $data->result();

	}

	public function get_products_details_home($id){

		$this->db->select('products.* , products.Image, category.CategoryId, category.CategoryTitle');

		$this->db->from('products');

		$this->db->join('category', 'category.CategoryId=products.CategoryId');

		$this->db->where('products.ProductId', $id);

		$data = $this->db->get();

		return $data->row();

		// $this->db->where('category.IsDeleted', 0);



	}

	public function related_products($CategoryId, $id){

		$this->db->select('products.* , products.Image, category.CategoryId, category.CategoryTitle');

		$this->db->from('products');

		$this->db->join('category', 'category.CategoryId=products.CategoryId');

		$this->db->where('products.IsDeleted', 0);

		$this->db->where('category.IsDeleted', 0);

		$this->db->where('products.CategoryId', $CategoryId);

		$this->db->where('products.ProductId!=', $id);

		$this->db->order_by('id', 'RANDOM');

		$this->db->limit(4);

		$data = $this->db->get();

		return $data->result();

	}

}