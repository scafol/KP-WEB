<?php

class ExampleController extends CI_Controller
{

	public function __construct()
	{
		parent::__construct();
		$this->load->model('ExampleModel', 'model');
	}

	public function index()
	{
		$response = $this->model->exampleGet('firstQuery', 'secondQuery', 'firstHeader');

		echo '<pre>';
		var_dump($response);
	}
}
