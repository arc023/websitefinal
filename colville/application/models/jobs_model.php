<?php
class jobs_model extends CI_Model {

	public function __construct()
	{
		$this->load->database();
	}


	// Get Council Memebers
	public function get_jobs()
	{
		
		$this->db->select('title, main');
		$this->db->from('job');
		$result = $this->db->get();
		
		if($result->num_rows() > 0) {
			return $result->result_array();
		}
		
	
	}


// end Model
}
?>