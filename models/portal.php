<?php
class PortalModel extends Model{
	public function Index(){
		$this->query('SELECT * FROM shares');
		$rows = $this->resultSet();
		return $rows;
	}
	public function finance(){
		$post = filter_input_array(INPUT_POST, FILTER_SANITIZE_STRING);
		$this->query("SELECT * FROM `finace` ORDER BY id DESC");
		$rows = $this->resultSet();
		return $rows;
	}
	public function profile(){
		$post = filter_input_array(INPUT_POST, FILTER_SANITIZE_STRING);
		$this->query("SELECT * FROM `users` ORDER BY id DESC");
		$rows = $this->resultSet();
		return $rows;
	}
	public function Travel(){
		// Sanitize POST
		$post = filter_input_array(INPUT_POST, FILTER_SANITIZE_STRING);
		$this->query("SELECT * FROM `travel` ORDER BY id DESC");
		$rows = $this->resultSet();


		if ($post['submit']){
			// Insert into MySQL
			$this->query('INSERT INTO `hall_booking` (name, phone_no, address, job, mode_of_identification, identity_no, event_type, hall_type, date_of_used, time) VALUES(:name, :phone_no, :address, :job, :mode_of_identification, :identity_no, :event_type, :hall_type, :date_of_used, :time)');
			$this->bind(':name', $post['name']);
			$this->bind(':phone_no', $post['phone_no']);
			$this->bind(':address', $post['address']);
			$this->bind(':job', $post['job']);
			$this->bind(':mode_of_identification', $post['identification']);
			$this->bind(':identity_no', $post['identity_no']);
			$this->bind(':event_type', $post['etype']);
			$this->bind(':hall_type', $post['type']);
			$this->bind(':date_of_used', $post['check_in_date']);
			$this->bind(':time', $post['check_in_time']);

			$this->execute();
			// Verify
			if ($this->lastInsertId()) {
				// Redirect
				header('Location: ' . ROOT_URL );
			}
		}


		if (isset($post['checkout'])){
			// Insert into MySQL
			$this->query('UPDATE hall_booking SET check_stats = :check_stats WHERE id = :id');
			$this->bind(':check_stats', $post['check_stats_out']);
			$this->bind(':id', $post['id']);
			$this->execute();
			// Verify
			if (getlastmod()) {
				// Redirect
				header('Location: ' . ROOT_URL .'booking/halls');
			}
		}
		return $rows;
	}
	public function courses(){
		$post = filter_input_array(INPUT_POST, FILTER_SANITIZE_STRING);
		$this->query("SELECT * FROM `stu_course`");
		$rows = $this->resultSet();
		
		if (isset($post['room_add'])){
			if ($post['course'] == '') {
				Messages::setMsg('Please Fill In All Fields', 'error');
				return $rows;
			}
			// Insert into MySQL
			$select = $post['course'];
			$data = explode(':',$select);
			$courseno = $data[0];
			$courseinfo = $data[1];

			list($coursen, $coursecode, $courseunit) = explode(",",$courseinfo);

			$this->query('INSERT INTO `stu_course` (course_title, course_code, course_unit, stu_id) VALUES(:course_title, :course_code, :course_unit, :stu_id)');
			$this->bind(':course_title', $coursen);
			$this->bind(':course_code', $coursecode);
			$this->bind(':course_unit', $courseunit);
			$this->bind(':stu_id', $post['id']);

			$this->execute();
			// Verify
			if ($this->lastInsertId()) {
				// Redirect
				header('Location: '.ROOT_URL.'portal/courses');
			}
		}
		return $rows;
	}
	public function Pool(){
		return;
	}
	public function academic(){
		// Sanitize POST
		$post = filter_input_array(INPUT_POST, FILTER_SANITIZE_STRING);
		$this->query("SELECT * FROM `academic`");
		$rows = $this->resultSet();
		

		if (isset($post['room_add'])){
			if ($post['room_type'] == '' || $post['room_no'] == '' || $post['room_price'] == '') {
				Messages::setMsg('Please Fill In All Fields', 'error');
				return $rows;
			}
			// Insert into MySQL
			$this->query('INSERT INTO rooms (room_type, room_no) VALUES(:room_type, :room_no)');
			$this->bind(':room_type', $post['room_type']);
			$this->bind(':room_no', $post['room_no']);

			$this->execute();
			// Verify
			if ($this->lastInsertId()) {
				// Redirect
				header('Location: ' . ROOT_URL .'booking/rooms');
			}
		}

		if (isset($post['submit'])){
			if ($post['name'] == '' || $post['mode_of_payment'] == '' || $post['phone_no'] == '' || $post['job'] == '') {
				Messages::setMsg('Please Fill In All Fields', 'error');
				return $rows;
			}
			if(isset($post['gender'])){
				$gen = $post['gender'];
			}else{
				Messages::setMsg('Please specify gender', 'error');
				return $rows;
			}
			// Insert into MySQL
			$this->query('INSERT INTO room_booking (name, phone_no, gender, address, job, identification, identity_no, type, check_in_date, check_out_date, no_adult, no_children, room_type, feeding, gym, mode_of_payment) VALUES(:name, :phone_no, :gender, :address, :job, :identification, :identity_no, :type, :check_in_date, :check_out_date, :no_adult, :no_children, :room_type, :feeding, :gym, :mode_of_payment)');
			$this->bind(':identification', $post['identification']);
			$this->bind(':identity_no', $post['identity_no']);
			$this->bind(':type', $post['type']);
			$this->bind(':name', $post['name']);
			$this->bind(':gender', $gen);
			$this->bind(':phone_no', $post['phone_no']);
			$this->bind(':job', $post['job']);
			$this->bind(':address', $post['address']);
			$this->bind(':no_adult', $post['no_adult']);
			$this->bind(':no_children', $post['no_children']);
			$this->bind(':room_type', $post['room_type']);
			$this->bind(':feeding', $post['feeding']);
			$this->bind(':gym', $post['gym']);
			$this->bind(':mode_of_payment', $post['mode_of_payment']);
			$this->bind(':check_in_date', $post['check_in_date']);
			$this->bind(':check_out_date', $post['check_out_date']);

			$this->execute();
			// Verify
			if ($this->lastInsertId()) {
				// Redirect
				header('Location: ' . ROOT_URL .'booking/rooms');
			}
		}
		if (isset($post['checkin'])){
			// Insert into MySQL
			$this->query('UPDATE room_booking SET check_stats = :check_stats WHERE id = :id');
			$this->bind(':check_stats', $post['check_stats']);
			$this->bind(':id', $post['id']);
			$this->execute();
			// Verify
			if (getlastmod()) {
				// Redirect
				header('Location: ' . ROOT_URL .'booking/rooms');
			}
		}
		if (isset($post['checkout'])){
			// Insert into MySQL
			$this->query('UPDATE room_booking SET check_stats = :check_stats WHERE id = :id');
			$this->bind(':check_stats', $post['check_stats_out']);
			$this->bind(':id', $post['id']);
			$this->execute();
			// Verify
			if (getlastmod()) {
				// Redirect
				header('Location: ' . ROOT_URL .'booking/rooms');
			}
		}
		return $rows;
	}
}