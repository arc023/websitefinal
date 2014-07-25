<?php
class user extends CI_Model {
	
	// Login User
	function login($username, $password)
 	{
		$this -> db -> select('id, username, password');
		$this -> db -> from('members');
		$this -> db -> where('username', $username);
		$this -> db -> where('password', MD5($password));
		$this -> db -> limit(1);
		$result = $this -> db -> get();
		
		if($result -> num_rows() == 1) {

			return $result->row_array();

		} else {
			return false;
		}
   
   }
   
   // Logout User
   function logout() {

   
   }
   
 
// End Model  
}
?>