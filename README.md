# <center> Scafol Web Framework Base For Codeigniter </center>

This repository contains custom library for network request

## Usage
### `GET`
```
String $route route of API
Array $query query data [optional]
Array $header header data [optional]
return Array result from API
```
Example :
`
	$this->request->get('/users', ['age' => 14, 'team' => 'development], ['Authorization: 123', 'Content-Type: json'])
`

### `POST FORM-DATA`
```
String $route route of API
Array $body body form data
Array $header header data [optional]
return Array result from API
```
Example :
`
	$this->request->postFormData('/users', ['age' => 14, 'team' => 'development], ['Authorization: 123', 'Content-Type: json'])
`

### `POST MULTIPART`
```
String $route route of API
Array $body body multipart data
Array $header header data [optional]
return Array result from API
```
Example :
`
	$this->request->postMultipart('/users', ['age' => 14, 'team' => 'development, 'image' => new CURLFile('image_path')], ['Authorization: 123', 'Content-Type: json'])
`

### `PUT`
```
String $route route of API
Array $body body put data
Array $header header data [optional]
return Array result from API
```
Example :
`
	$this->request->put('/users/1', ['age' => 14, 'team' => 'development], ['Authorization: 123', 'Content-Type: json'])
`

### `DELETE`
```
String $route route of API
Array $header header data [optional]
return Array result from API
```
Example :
`
	$this->request->delete('/users/1', ['Authorization: 123', 'Content-Type: json'])
`
