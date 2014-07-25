<?php
class events_model extends CI_Model {

	public function __construct()
	{
		$this->load->database();
	}


	// Get Council Memebers
	public function get_events()
	{
		
		$this->db->select('title, main, link');
		$this->db->from('events');
		$result = $this->db->get();
		
		if($result->num_rows() > 0) {
			return $result->result_array();
		}
		
	
	}


// end Model
}
?>