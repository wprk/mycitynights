<?php
class Homepage extends CI_Controller {

	public function index()
	{
		echo 'Hello World!';
		echo '<pre>' . print_r($this->events->all(), true) . '</pre>';
	}
}

