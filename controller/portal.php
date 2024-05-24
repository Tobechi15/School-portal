<?php
class Portal extends Controller{
	protected function Index(){
		if(!isset($_SESSION['is_logged_in'])){
			header('Location: '.ROOT_URL.'users/login');
		}
		$viewmodel = new PortalModel();
		$this->returnView($viewmodel->Index(), true);
	}
	protected function finance(){
		if(!isset($_SESSION['is_logged_in'])){
			header('Location: '.ROOT_URL.'users/login');
		}
		$viewmodel = new PortalModel();
		$this->returnView($viewmodel->finance(), true);
	}
	protected function Travel(){
		if(!isset($_SESSION['is_logged_in'])){
			header('Location: '.ROOT_URL.'users/login');
		}
		$viewmodel = new PortalModel();
		$this->returnView($viewmodel->Travel(), true);
	}
	protected function courses(){
		if(!isset($_SESSION['is_logged_in'])){
			header('Location: '.ROOT_URL.'users/login');
		}
		$viewmodel = new PortalModel();
		$this->returnView($viewmodel->courses(), true);
	}
	protected function Pool(){
		if(!isset($_SESSION['is_logged_in'])){
			header('Location: '.ROOT_URL.'users/login');
		}
		$viewmodel = new PortalModel();
		$this->returnView($viewmodel->Pool(), true);
	}
	protected function academic(){
		if(!isset($_SESSION['is_logged_in'])){
			header('Location: '.ROOT_URL.'users/login');
		}
		$viewmodel = new PortalModel();
		$this->returnView($viewmodel->academic(), true);
	}
	protected function profile(){
		if(!isset($_SESSION['is_logged_in'])){
			header('Location: '.ROOT_URL.'users/login');
		}
		$viewmodel = new PortalModel();
		$this->returnView($viewmodel->profile(), true);
	}
}