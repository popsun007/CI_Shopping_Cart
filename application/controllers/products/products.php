<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');
class Products extends CI_Controller
{
	public function __construct()
	{
		parent::__construct();
		$this->load->model('product');
	}
	public function index()
	{
		$infos = $this->product->get_all_products();
		// $show = array('id' => $infos['id'], 'name' => $infos['name'], 'description' => $infos['description'], 'price' => $infos['price']);
		$this->load->view('e_commerce/e_commerce_index', array('products' => $infos));
	}
	public function add_to_cart($id)
	{
		$quantity = $this->session->userdata($id);
		$quantity += $this->input->post('qty');
		$this->session->set_userdata($id, $quantity);
		redirect('/');
	}
	public function view_cart()
	{
		$results['infos'] = $this->product->get_all_products();
		$this->load->view('e_commerce/e_commerce_check_out', $results);
	}
	public function delete_item($id)
	{
		$this->session->unset_userdata($id);
		redirect('/products/products/view_cart');
	}
}