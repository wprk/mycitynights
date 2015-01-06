<?php
class Events extends CI_Controller {

	public function index()
	{
		$this->data['page'] = array(
			'title' => 'Upcoming Events | Bar crawls | MyCityNights.co.uk',
			'active' => 'events'
		);
		$this->data['featured_event'] = $this->events->featured_event();
		$this->data['events'] = $this->events->all();
		
		$this->data['content'] = $this->load->view('events', $this->data, true);
		
		$this->load->view('page', $this->data);
	}
}