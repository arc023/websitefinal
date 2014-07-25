<?php
class notice_model extends CI_Model {

	public function __construct()
	{
		$this->load->database();
	}


	// Get Council Memebers
	public function get_notices()
	{
		
		$this->db->select('title, main, link');
		$this->db->from('notices');
		$result = $this->db->get();
		
		if($result->num_rows() > 0) {
			return $result->result_array();
		}
		
	
	}


// end Model
}
?>