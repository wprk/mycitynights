<?php
class Contact extends CI_Controller {
	
	public function __construct()
	{
		parent::__construct();
		
		$header_js = "
		<script>
	      function initialize() {
	        var mapCanvas = document.getElementById('map-canvas');
	        var mapOptions = {
	          center: new google.maps.LatLng(52.290000, -1.925000),
	          zoom: 12,
	          mapTypeId: google.maps.MapTypeId.ROADMAP
	        }
	        var map = new google.maps.Map(mapCanvas, mapOptions)
	      }
	      google.maps.event.addDomListener(window, 'load', initialize);
		</script>";

		$this->data['page'] = array(
			'title' => 'Contact | Bar crawls | MyCityNights.co.uk',
			'active' => 'contact',
			'header_includes' => array(
				array('type' => 'js', 'link' => 'https://maps.googleapis.com/maps/api/js')
			),
			'header_js' => $header_js
		);
		$this->data['content'] = $this->load->view('contact', $this->data, true);
	}

	public function index()
	{		
		$this->load->view('page', $this->data);
	}
	
	public function sent()
	{		
		$this->data['message_sent'] = true;
				
		$this->load->view('page', $this->data);
	}
	
	public function send()
	{
		if ($this->input->post()) {
			redirect('contact/sent');
		} else {
			redirect('contact');
		}
	}
}