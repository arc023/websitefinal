<?php
class Admin extends CI_Controller {

	public function __construct() {
		parent::__construct();
	
		// Check that user is logged in.
		//if ( !session var... ) {
			//redirect();
		//}
	
	}
	
	// Main Admin Dashboard
	function index()
	{
	
		// Display Page Views
		$this->load->view('templates/header');
		$this->load->view('pages/admin.php');
		$this->load->view('templates/footer');
	}


	// Admin Edit PAge
	function edit()
	{
	
	
	
	}



// end controller
} 
?>