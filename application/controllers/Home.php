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
		$data['title'] = "All Member";
		$data['data'] = $this->DataModel->showData();

		$this->load->view('templates/header', $data);
		$this->load->view('home/index', $data);
		$this->load->view('templates/footer');
	}

	public function detail($id)
	{
		$data['title'] = "Member Detail";
		$data['data'] = $this->request->get('/photos' . '/' . $id);

		if (isset($_POST['btnDel'])) $this->request->delete('/photos' . '/' . $id);

		$this->load->view('templates/header', $data);
		$this->load->view('home/detail', $data);
		$this->load->view('templates/footer');
	}
}
