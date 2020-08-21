<?php 

class ExampleModel extends CI_Model {

	public function exampleGet($query1, $query2, $header1) {
		return $this->request->get('/get', [
			'q1' => $query1,
			'q2' => $query2
		], [
			'h1' => $header1
		]);
	}
}

?>