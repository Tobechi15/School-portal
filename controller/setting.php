<?php
class setting extends Controller{
	protected function Coupons(){
		$viewmodel = new settingModel();
		$this->returnView($viewmodel->Index(), true);
	}
	protected function Facilities(){
		$viewmodel = new settingModel();
		$this->returnView($viewmodel->Facilities(), true);
	}
	protected function Finacialsummary(){
		$viewmodel = new settingModel();
		$this->returnView($viewmodel->Finacialsummary(), true);
	}
	protected function Vat(){
		$viewmodel = new settingModel();
		$this->returnView($viewmodel->Vat(), true);
	}
	protected function General(){
		$viewmodel = new settingModel();
		$this->returnView($viewmodel->General(), true);
	}
	protected function Admin(){
		$viewmodel = new settingModel();
		$this->returnView($viewmodel->Admin(), true);
	}
}