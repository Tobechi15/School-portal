<?php
class Admin extends Controller{
	protected function Index(){
		if(!isset($_SESSION['is_adminlogged_in'])){
			header('Location: '.ROOT_URL.'adminusers/login');
		}
		$viewmodel = new AdminModel();
		$this->returnView($viewmodel->Index(), true);
	}
	protected function Academic(){
		if(!isset($_SESSION['is_adminlogged_in'])){
			header('Location: '.ROOT_URL.'adminusers/login');
		}
		$viewmodel = new AdminModel();
		$this->returnView($viewmodel->Academic(), true);
	}
	protected function Courses(){
		if(!isset($_SESSION['is_adminlogged_in'])){
			header('Location: '.ROOT_URL.'adminusers/login');
		}
		$viewmodel = new AdminModel();
		$this->returnView($viewmodel->Courses(), true);
	}
}