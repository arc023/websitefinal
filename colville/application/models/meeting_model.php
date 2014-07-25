<?php
class meeting_model extends CI_Model {

	public function __construct()
	{
		$this->load->database();
	}


	// Get Council Memebers
	public function get_meetings()
	{
		
		$this->db->select('title, dateAndTime, link');
		$this->db->from('meetings');
		$result = $this->db->get();
		
		if($result->num_rows() > 0) {
			return $result->result_array();
		}
		
	
	}


// end Model
}
?>