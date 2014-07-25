<?php
class Main extends CI_Controller {

	// Login Page
	public function login() {
	
		// Check if user submitted form
		if ( isset($_POST['submit']) ) {
			
			// Setup From Validation Rules
			$this->load->library('form_validation');
			$this->form_validation->set_rules('username', 'Username', 'required');
			$this->form_validation->set_rules('password', 'Password', 'required');

			// Run Form
			if($this->form_validation->run() == TRUE) { 
			
				$loginResult = $this->user->login($_POST['username'], $_POST['password'] );
				if ($loginResult !== false) {
					redirect('admin');
				}
			
			}
		}
	
		// Data
		$data['title'] = 'Login';
	
		// Display Page Views
		$this->load->view('templates/header', $data);
		$this->load->view('pages/login_view.php', $data);
		$this->load->view('templates/footer');
		
	}

	

	// Home Page
	public function index() {
	
	// Data
		$data['title'] = 'Home';


		// Display Page Views
		$this->load->view('templates/header', $data);
		$this->load->view('pages/home.php');
		$this->load->view('templates/footer');		
		
	}
	
	// job openings Page
	public function job() {
	
	// Get listing
		$this->load->model('jobs_model');
		$data['jobs_list'] = $this->jobs_model->get_jobs();
		// Data
		$data['title'] = 'jobse';
		
		
		// Display Page Views
		$this->load->view('templates/header', $data);
		$this->load->view('pages/job.php', $data);
		$this->load->view('templates/footer');		
		
			
	
	}
	
	
	// Council Page
	public function council() {

		// Get Council Memebers
		$this->load->model('council_model');
		$data['council_list'] = $this->council_model->get_council();
		
		// Data
		$data['title'] = 'Council';
	
		// Display Page Views
		$this->load->view('templates/header', $data);
		$this->load->view('pages/mayor.php', $data);
		$this->load->view('templates/footer');	

	
	}

		// Town Meeting Page
	public function meeting() {
	
		// Get Meeting
		$this->load->model('meeting_model');
		$data['meeting_list'] = $this->meeting_model->get_meetings();
// Data
		$data['title'] = 'Meetings';
	
		// Display Page Views
		$this->load->view('templates/header', $data);
		$this->load->view('pages/meeting.php', $data);
		$this->load->view('templates/footer');	
	
	
	}

	
	
	// Notices Page
	public function notices() {
	
		//load notices
		$this->load->model('notice_model');
		$data['notices_list'] = $this->notice_model->get_notices();
				
				// Data
		$data['title'] = 'Notices';
		
		
		// Display Page Views
		$this->load->view('templates/header', $data);
		$this->load->view('pages/notices.php', $data);
		$this->load->view('templates/footer');		
		

	}

// events Page
	public function events() {
	
	// Get events
		$this->load->model('events_model');
		$data['events_list'] = $this->events_model->get_events();
			
	
	// Data
		$data['title'] = 'Events';
	
		// Display Page Views
		$this->load->view('templates/header', $data);
		$this->load->view('pages/events.php', $data);
		$this->load->view('templates/footer');		
		
		
	}
	
	// bids Page
	public function bids() {
		// Data
		$data['title'] = 'Bids';
		
		// Get bids
		$this->load->model('bids_model');
		$data['bids_list'] = $this->bids_model->get_bids();
		
	
		// Display Page Views
		$this->load->view('templates/header', $data);
		$this->load->view('pages/bids.php', $data);
		$this->load->view('templates/footer');		
		
	
	}
	
	// business Page
	public function business() {
	
			// Data
		$data['title'] = 'Business';
	
	// Get business
		$this->load->model('business_model');
		$data['business_list'] = $this->business_model->get_business();

	
		// Display Page Views
		$this->load->view('templates/header', $data);
		$this->load->view('pages/business.php');
		$this->load->view('templates/footer');		
	
	}
	
	// city department Page
	public function department() {
		// Data
		$data['title'] = 'City departments';
	
		// Display Page Views
		$this->load->view('templates/header', $data);
		$this->load->view('pages/department.php');
		$this->load->view('templates/footer');		
		
	
	}
	
	
	// minutes Page
	public function minutes() {
		// Data
		$data['title'] = 'minutes';
	
		// Display Page Views
		$this->load->view('templates/header', $data);
		$this->load->view('pages/minutes.php');
		$this->load->view('templates/footer');		
		
	
	} 
	
	// municiple code Page
	public function code() {
		// Data
		$data['title'] = 'Code';
	
		// Display Page Views
		$this->load->view('templates/header', $data);
		$this->load->view('pages/code.php');
		$this->load->view('templates/footer');		
		
	} 
	
	// ordiances Page
	public function ordinances() {
		// Data
		$data['title'] = 'ordinance';
	
		// Display Page Views
		$this->load->view('templates/header', $data);
		$this->load->view('pages/ordinances.php');
		$this->load->view('templates/footer');		
		
	} 
	
	// resolutions Page
	public function resolutions() {
		// Data
		$data['title'] = 'resolutions';
	
		// Display Page Views
		$this->load->view('templates/header', $data);
		$this->load->view('pages/resolutions.php');
		$this->load->view('templates/footer');		
		
	} 
	
	// permits Page
	public function permits() {
		// Data
		$data['title'] = 'permits';
	
		// Display Page Views
		$this->load->view('templates/header', $data);
		$this->load->view('pages/permits.php');
		$this->load->view('templates/footer');		
		
	} 
	
	// FAQ Page
	public function FAQ() {
		// Data
		$data['title'] = 'faq';
	
		// Display Page Views
		$this->load->view('templates/header', $data);
		$this->load->view('pages/faq.php');
		$this->load->view('templates/footer');		
		
	} 
	
	// history Page
	public function history() {
		// Data
		$data['title'] = 'history';
	
		// Display Page Views
		$this->load->view('templates/header', $data);
		$this->load->view('pages/history.php');
		$this->load->view('templates/footer');		
		
	} 
	
	// links Page
	public function links() {
		// Data
		$data['title'] = 'links';
	
		// Display Page Views
		$this->load->view('templates/header', $data);
		$this->load->view('pages/link.php');
		$this->load->view('templates/footer');		
		
	} 
	



// end controller
}
?>