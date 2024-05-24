<?php
class AdminUsers extends Controller{
	protected function Login(){
		if(isset($_SESSION['is_adminlogged_in'])){
			header('Location: '.ADMIN_ROOT_URL);
		}
		$viewmodel = new AUserModel();
		$this->returnView($viewmodel->Login(), true);
	}
	protected function Register(){
		$viewmodel = new AUserModel();
		$this->returnView($viewmodel->Register(), true);
	}
	protected function Errorpage(){
		$viewmodel = new AUserModel();
		$this->returnView($viewmodel->Errorpage(), true);
	}
	protected function logout(){
		unset($_SESSION['is_logged_in']);
		unset($_SESSION['is_logged_in']);
		session_destroy();
		// Redirect
		header('Location: '.ADMIN_ROOT_URL);
	}
}