<?php
class Pages extends CI_Controller {

	 function login($username, $password)
 {
 	$this -> db -> select('id, username, password');
   $this -> db -> from('members');
   $this -> db -> where('username', $username);
   $this -> db -> where('password', MD5($password));
   $this -> db -> limit(1);
   $query = $this -> db -> get();
   if($query -> num_rows() == 1)
   {
     return $query->result();
   }
   else
   {
     return false;
   }
 }