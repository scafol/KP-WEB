<?php 
defined('BASEPATH') OR exit('No direct script access allowed');

class Request {

	/**
	 * Request with http method GET
	 *
	 * @author Ichvandi Octa Maulana
	 * @since 20/08/2020
	 * 
	 * @param String $route route of API
	 * @param Array $query query data [optional]
	 * @param Array $header header data [optional]
	 * 
	 * @return Array result from API
	 * 
	 * Example :
	 * get('/users', ['age' => 14, 'team' => 'development], ['Authorization: 123', 'Content-Type: json'])
	 * 
	 */
	public function get($route, $query = [], $header = []) {
		$curl = curl_init();
		curl_setopt_array($curl, [
			CURLOPT_URL => API_URL . $route . '?' . http_build_query($query),
            CURLOPT_HTTPHEADER => $header,
            CURLOPT_RETURNTRANSFER => TRUE
		]);

        $result = curl_exec($curl);
        curl_close($curl);

		return json_decode($result, TRUE);
    }

	/**
	 * Request with http method POST application/x-www-form-urlencoded
	 *
	 * @author Ichvandi Octa Maulana
	 * @since 20/08/2020
	 * 
	 * @param String $route route of API
	 * @param Array $body body form data
	 * @param Array $header header data [optional]
	 * 
	 * @return Array result from API
	 * 
	 * Example :
	 * postFormData('/insert', ['age' => 14, 'team' => 'development], ['Authorization: 123', 'Content-Type: json'])
	 * 
	 */
    public function postFormData($route, $body, $header = []) {
        $curl = curl_init();
		curl_setopt_array($curl, [
			CURLOPT_URL => API_URL . $route,
			CURLOPT_HTTPHEADER => array_merge(
				['Content-Type: application/x-www-form-urlencoded'],
				$header
			),
			CURLOPT_POST => TRUE,
            CURLOPT_POSTFIELDS => $body,
            CURLOPT_RETURNTRANSFER => TRUE
		]);

        $result = curl_exec($curl);
        curl_close($curl);

        return json_decode($result, TRUE);
	}
	
	/**
	 * Request with http method POST multipart/form-data
	 *
	 * @author Ichvandi Octa Maulana
	 * @since 20/08/2020
	 * 
	 * @param String $route route of API
	 * @param Array $body body form-data [optional]
	 * @param Array $header header data [optional]
	 * 
	 * @return Array result from API
	 * 
	 * Example :
	 * postMultipart('/insert', ['age' => 14, 'team' => 'development], ['Authorization: 123', 'Content-Type: json'])
	 * 
	 */
	public function postMultipart($route, $body, $header = []) {
        $curl = curl_init();
		curl_setopt_array($curl, [
			CURLOPT_URL => API_URL . $route,
			CURLOPT_HTTPHEADER => array_merge(
				['Content-Type: multipart/form-data'],
				$header
			),
			CURLOPT_POST => TRUE,
            CURLOPT_POSTFIELDS => $body,
            CURLOPT_RETURNTRANSFER => TRUE
		]);

        $result = curl_exec($curl);
        curl_close($curl);

        return json_decode($result, TRUE);
    }

	/**
	 * Request with http method PUT
	 *
	 * @author Ichvandi Octa Maulana
	 * @since 20/08/2020
	 * 
	 * @param String $route route of API with path
	 * @param Array $body body put data [optional]
	 * @param Array $header header data [optional]
	 * 
	 * @return Array result from API
	 * 
	 * Example :
	 * put('/user/1', ['age' => 14, 'team' => 'development], ['Authorization: 123', 'Content-Type: json'])
	 * 
	 */
    public function put($route, $body, $header = []) {
		$curl = curl_init();
		curl_setopt_array($curl, [
			CURLOPT_URL => API_URL . $route,
			CURLOPT_HTTPHEADER => array_merge(
				['Content-Type: application/x-www-form-urlencoded'],
				$header
			),
			CURLOPT_CUSTOMREQUEST => "PUT",
            CURLOPT_POSTFIELDS => $body,
            CURLOPT_RETURNTRANSFER => TRUE
		]);

        $result = curl_exec($curl);
        curl_close($curl);

		return json_decode($result, TRUE);
    }

	/**
	 * Request with http method DELETE
	 *
	 * @author Ichvandi Octa Maulana
	 * @since 20/08/2020
	 * 
	 * @param String $route route of API with path
	 * @param Array $header header data [optional]
	 * 
	 * @return Array result from API
	 * 
	 * Example :
	 * delete('/delete/1', ['Authorization: 123', 'Content-Type: json'])
	 * 
	 */
    public function delete($route, $header = []) {
        $curl = curl_init();
		curl_setopt_array($curl, [
			CURLOPT_URL => API_URL . $route,
			CURLOPT_HTTPHEADER => array_merge(
				['Content-Type: application/x-www-form-urlencoded'],
				$header
			),
			CURLOPT_CUSTOMREQUEST => "DELETE",
            CURLOPT_RETURNTRANSFER => TRUE
		]);

        $result = curl_exec($curl);
        curl_close($curl);

		return json_decode($result, TRUE);
    }
}

?>