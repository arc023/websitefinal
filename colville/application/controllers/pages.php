<?php

class Pages extends CI_Controller {

	public function view($page = 'home')
{

	if ( ! file_exists('application/views/pages/'.$page.'.php'))
	{
		// Whoops, we don't have a page for that!
		show_404();
	}

	$data['title'] = ucfirst($page); // Capitalize the first letter

	$this->load->view('templates/header', $data);
	$this->load->view('pages/'.$page, $data);
	$this->load->view('templates/footer', $data);
}

//public function home() {

	// Etc...

	// Display Page

}//






//public function login($username, $password)
 {
 
 	// If form submitted
 //	if () {
  		
  		// Load in user model
  		// Check for user
  	//	$user = $this->Bar->today_special();
  		
   	//}
   
   // Display plage
  	//$this->load->view('templates/header', $data);
	//$this->load->view('pages/login_view.php', $data);
	//$this->load->view('templates/footer', $data);
   
// }
 
 
// end controller 
}

?>