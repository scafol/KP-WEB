<?php

class Home extends CI_Controller
{

	public function __construct()
	{
		parent::__construct();
		$this->load->model('DataModel');
	}

	public function index()
	{
		$data['title'] = "Home";
		$data['data'] = $this->DataModel->showData();

		$this->load->view('templates/header', $data);
		$this->load->view('home/index', $data);
		$this->load->view('templates/footer', $data);
	}
}
