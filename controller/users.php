<?php
class Users extends Controller{
	protected function Login(){
		if(isset($_SESSION['is_logged_in'])){
			header('Location: '.ROOT_URL);
		}
		$viewmodel = new UserModel();
		$this->returnView($viewmodel->Login(), true);
	}
	protected function Register(){
		$viewmodel = new UserModel();
		$this->returnView($viewmodel->Register(), true);
	}
	protected function Errorpage(){
		$viewmodel = new UserModel();
		$this->returnView($viewmodel->Errorpage(), true);
	}
	protected function logout(){
		unset($_SESSION['is_logged_in']);
		unset($_SESSION['is_logged_in']);
		session_destroy();
		// Redirect
		header('Location: '.ROOT_URL);
	}
}