		$this -> db -> select('id, username, password');
		$this -> db -> from('members');
		$this -> db -> where('username', $username);
		$this -> db -> where('password',($password));
		$this -> db -> limit(1);
		$query = $this -> db -> get();
		if($query -> num_rows() == 1)
		{
			return $query->result();
			redirect('home');
		}
		else
		{
			return false;
		}
		//model for login