<?php
class business_model extends CI_Model {

	public function __construct()
	{
		$this->load->database();
	}


	// Get Council Memebers
	public function get_business()
	{
		
		$this->db->select('title, main, link');
		$this->db->from('business');
		$result = $this->db->get();
		
		if($result->num_rows() > 0) {
			return $result->result_array();
		}
		
	
	}


// end Model
}
?>