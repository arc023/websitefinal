<?php
class council_model extends CI_Model {

	public function __construct()
	{
		$this->load->database();
	}


	// Get Council Memebers
	public function get_council()
	{
		
		$this->db->select('title, fname, lname, address1, address2, phone, email');
		$this->db->from('council');
		$result = $this->db->get();
		
		if($result->num_rows() > 0) {
			return $result->result_array();
		}
		
	
	}


// end Model
}
?>