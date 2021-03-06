<?php
class Homepage extends CI_Controller {

	public function index()
	{
		$this->data['page'] = array(
			'title' => 'Homepage | Bar crawls | MyCityNights.co.uk',
			'active' => 'home'
		);
		$this->data['featured_event'] = $this->events->featured_event();
		$this->data['events'] = $this->events->all();
		
		$this->data['content'] = $this->load->view('home', $this->data, true);
		
		$this->load->view('page', $this->data);
	}
}