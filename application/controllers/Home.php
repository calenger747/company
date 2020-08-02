<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Home extends CI_Controller {

	public function __construct() { 
		parent::__construct();
		// $this->load->model('M_Admin', 'admin');
		// $this->load->model('M_Login', 'login');
		// if ($this->session->has_userdata('logged_in') == TRUE) {
		// 	if ($this->session->userdata('level_user') == '2') {
		// 		redirect('Dashboard_User');
		// 	}
		// 	else if ($this->session->userdata('level_user') == '3') {
		// 		redirect('Dashboard_Kepala');
		// 	}
		// } else {
		// 	redirect('Login');
		// }
	}

	private function load($title = '', $datapath = '')
	{

		$get = array(
			"title" => $title,
		);

		$page = array(
			"meta" 		=> $this->load->view('home/template/meta', false, true),
			"css" 		=> $this->load->view('home/template/head', $get, true),
			"js" 		=> $this->load->view('home/template/js', false, true),
			"navbar" 	=> $this->load->view('home/template/navbar', false, true),
			"footer" 	=> $this->load->view('home/template/footer', false, true),
		);
		return $page;
	}

	public function index()
	{
		
		$path = "";
		$data = array(
			"page" => $this->load("Company Profile - Home", $path),
			"content" =>$this->load->view('home/index', false, true)
		);
		$this->load->view('home/template/default_template', $data);
	}

	public function services()
	{
		
		$path = "";
		$data = array(
			"page" => $this->load("Company Profile - Services", $path),
			"content" =>$this->load->view('home/services', false, true)
		);
		$this->load->view('home/template/default_template', $data);
	}

	public function services_detail()
	{
		
		$path = "";
		$data = array(
			"page" => $this->load("Company Profile - Services Detail", $path),
			"content" =>$this->load->view('home/services-detail', false, true)
		);
		$this->load->view('home/template/default_template', $data);
	}

	public function shop()
	{
		
		$path = "";
		$data = array(
			"page" => $this->load("Company Profile - Shop", $path),
			"content" =>$this->load->view('home/shop', false, true)
		);
		$this->load->view('home/template/default_template', $data);
	}

	public function shop_detail()
	{
		
		$path = "";
		$data = array(
			"page" => $this->load("Company Profile - Shop Detail", $path),
			"content" =>$this->load->view('home/shop-detail', false, true)
		);
		$this->load->view('home/template/default_template', $data);
	}

	public function blog()
	{
		
		$path = "";
		$data = array(
			"page" => $this->load("Company Profile - Blog", $path),
			"content" =>$this->load->view('home/blog', false, true)
		);
		$this->load->view('home/template/default_template', $data);
	}

	public function blog_detail()
	{
		
		$path = "";
		$data = array(
			"page" => $this->load("Company Profile - Blog Detail", $path),
			"content" =>$this->load->view('home/blog-detail', false, true)
		);
		$this->load->view('home/template/default_template', $data);
	}

	public function about()
	{
		
		$path = "";
		$data = array(
			"page" => $this->load("Company Profile - About", $path),
			"content" =>$this->load->view('home/about', false, true)
		);
		$this->load->view('home/template/default_template', $data);
	}

	public function contact()
	{
		
		$path = "";
		$data = array(
			"page" => $this->load("Company Profile - Contact", $path),
			"content" =>$this->load->view('home/contact', false, true)
		);
		$this->load->view('home/template/default_template', $data);
	}
}
