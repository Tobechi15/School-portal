<?php
class settingModel extends Model{
	public function Index(){
		$this->query('SELECT * FROM academic');
		$rows = $this->resultSet();
		return $rows;
	}
	public function coupons(){
		return;
	}
	public function Facilities(){
		return;
	}
	public function Finacialsummary(){
		return;
	}
	public function Vat(){
		return;
	}
	public function General(){
		return;
	}
	public function Admin(){
		return;
	}
}