<?php
class AdminModel extends Model{
	public function Index(){
		$this->query('SELECT * FROM admins');
		$rows = $this->resultSet();
		return $rows;
	}
	public function academic(){
		// Sanitize POST
		$post = filter_input_array(INPUT_POST, FILTER_SANITIZE_STRING);
		$this->query("SELECT DISTINCT * FROM `stu_course`");
		$rows = $this->resultSet();
		

		if (isset($post['room_add'])){
			if ($post['course'] == '' || $post['grade'] == '' || $post['point'] == '') {
				Messages::setMsg('Please Fill In All Fields', 'error');
				return $rows;
			}
			// Insert into MySQL
			$courset = substr($post['course'],0,-1);
			$num = strlen($post['course'])-1;
			$this->query('INSERT INTO academic (course_name, points, grade, stu_id, course_unit, staff_id) VALUES(:course_name, :points, :grade, :stu_id, :course_unit, :staff_id)');
			$this->bind(':course_name', $courset);
			$this->bind(':points', $post['point']);
			$this->bind(':grade', $post['grade']);
			$this->bind(':stu_id', $post['id']);
			$this->bind(':course_unit', $post['course'][$num]);
			$this->bind(':staff_id', $post['staffid']);

			$this->execute();
			// Verify
			if ($this->lastInsertId()) {
				// Redirect
				header('Location: ' . ADMIN_ROOT_URL.'academic');
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
	public function courses(){
		$post = filter_input_array(INPUT_POST, FILTER_SANITIZE_STRING);
		$this->query("SELECT * FROM `course`");
		$rows = $this->resultSet();

		if (isset($post['room_course'])){
			if ($post['title'] == '' || $post['code'] == '' || $post['unit'] == '') {
				Messages::setMsg('Please Fill In All Fields', 'error');
				return $rows;
			}
			// Insert into MySQL
			$this->query('INSERT INTO course (course_title, course_code, course_unit) VALUES(:course_title, :course_code, :course_unit)');
			$this->bind(':course_title', $post['title']);
			$this->bind(':course_code', $post['code']);
			$this->bind(':course_unit', $post['unit']);

			$this->execute();
			// Verify
			if ($this->lastInsertId()) {
				// Redirect
				header('Location: ' . ADMIN_ROOT_URL.'academic');
			}
		}

		return $rows;
	}
}