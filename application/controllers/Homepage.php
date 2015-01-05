<?php
class Homepage extends CI_Controller {

	public function index()
	{
		$this->data['page'] = array(
			'title' => 'Home | MyCityNights.co.uk',
			'active' => 'home'
		);
		$this->data['events'] = $this->events->all();
		
		$this->load->view('head', $this->data);
		$this->load->view('home', $this->data);
		$this->load->view('foot', $this->data);
	}
}

