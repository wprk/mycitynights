<?php

class Events_model extends CI_Model
{
	
	function __construct()
	{
		parent::__construct();
	}

	/**
	 * Returns all events
	 * 
	 * @return array events
	 */
	public function all() {
		
		$eventList = array();

		$this->db->select('events.id, events.name, event_types.name as type, events.start, events.end, events.image, events.capacity');
		$this->db->from('events');
		$this->db->join('event_types', 'event_types.id = events.type');
		$this->db->order_by('events.start DESC');
		$events = $this->db->get();
		
		foreach ($events->result_array() as $event) {
			
			$event['hotels'] = $this->db->select('hotels.name, locations.name as location')
								->from('event_hotels')->where('event_id', $event['id'])
								->join('hotels', 'hotels.id = event_hotels.hotel_id')
								->join('locations', 'locations.id = hotels.location_id')
								->get()->result_array();
								
			$event['venues'] = $this->db->select('venues.name')
								->from('event_venues')->where('event_id', $event['id'])
								->join('venues', 'venues.id = event_venues.venue_id')
								->get()->result_array();
								
			$event['pickups'] = $this->db->select('locations.name')
								->from('event_pickups')->where('event_id', $event['id'])
								->join('locations', 'locations.id = event_pickups.location_id')
								->get()->result_array();
								
			$event['dropoffs'] = $this->db->select('locations.name')
								->from('event_dropoffs')->where('event_id', $event['id'])
								->join('locations', 'locations.id = event_dropoffs.location_id')
								->get()->result_array();
								
			$event['bookings'] = array(
				'count' => 2,
				'names' => array('Dave Bloggs', 'Luke James')
			);
			
			$event['spaces_remaining'] = $event['capacity'] - $event['bookings']['count'];
			
			$eventList[] = $event;
		};
		
		return $eventList;
	}
	
	/**
	 * Returns soonest event
	 * 
	 * @return array event
	 */
	public function featured_event() {
		
		$all_events = $this->all();
		$next_event = array_pop($all_events);
		
		return $next_event;
	}
}