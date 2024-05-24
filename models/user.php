<?php
class UserModel extends Model{
	public function Register(){
		// Sanitize POST
		$post = filter_input_array(INPUT_POST, FILTER_SANITIZE_STRING);

		if (isset($post['password'])) {
			$password = md5($post['password']);
		}

		if(!empty($post['submit'])){
			if($post['pass_test'] != $post['password']){
				Messages::setMsg("password doesn't match", "error");
				return;
			}
			if($post['name'] == ''|| $post['password'] == '' || $post['phone'] == "" || $post['address'] == "" || $post['state'] == "" || $post['birthday'] == "" ){
				Messages::setMsg('Please Fill In All Fields', 'error');
				return;
			}

			// Insert into MySQL
			$this->query("INSERT INTO users (username, password, phone_no, address, state_of_origin, date_of_birth) VALUES(:name, :password, :phone_no, :address, :state_of_origin, :date_of_birth)");
			$this->bind(':name', $post['name']);
			$this->bind(':password', $password);
			$this->bind(':phone_no', $post['phone']);
			$this->bind(':address', $post['address']);
			$this->bind(':state_of_origin', $post['state']);
			$this->bind(':date_of_birth', $post['birthday']);
			$this->execute();
			// Verify
			if($this->lastInsertId()){
				// Redirect
				header('Location: '.ROOT_URL.'users/login');
			}
		}
		return;
	}

	public function login(){
		// Sanitize POST
		$post = filter_input_array(INPUT_POST, FILTER_SANITIZE_STRING);

		if (isset($post['password'])) {
			$password = md5($post['password']);
		}

		if(!empty($post['submit'])){
			// Compare Login
			$this->query('SELECT * FROM users WHERE username = :name AND password = :password');
			$this->bind(':name', $post['name']);
			$this->bind(':password', $password);
			
			$row = $this->single();

			if($row){
				$_SESSION['is_logged_in'] = true;
				$_SESSION['user_data'] = array(
					"id"	=> $row['id'],
					"name"	=> $row['username'],
					"email"	=> $row['email'],
					"studentId"	=> $row['stu_id'],
					"phone"	=> $row['phone_no'],
					"address"	=> $row['address'],
					"dateOfbirth"	=> $row['date_of_birth'],
					"state"	=> $row['state_of_origin'],
					"firname"	=> $row['fname'],
					"suname"	=> $row['sname'],
					"level"	=> $row['level']
				);
				header('Location: '.ROOT_URL);
			} else {
				Messages::setMsg('Incorrect Login', 'error');
			}
		}
		return;
	}

	public function Errorpage(){
		return;
	}
}