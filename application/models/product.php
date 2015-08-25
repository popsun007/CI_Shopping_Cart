<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');
class Product extends CI_Model
{
	public function get_all_products()
	{
		return $this->db->query("SELECT * FROM products")->result_array();
	}
}