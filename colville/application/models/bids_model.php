<?php
class bids_model extends CI_Model {

	public function __construct()
	{
		$this->load->database();
	}


	// Get Council Memebers
	public function get_bids()
	{
		
		$this->db->select('title, main, link');
		$this->db->from('bids');
		$result = $this->db->get();
		
		if($result->num_rows() > 0) {
			return $result->result_array();
		}
		
	
	}


// end Model
}
?>