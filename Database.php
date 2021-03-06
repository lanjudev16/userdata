<?php

Class Database{
	public $host   = DB_HOST;
	public $user   = DB_USER;
	public $pass   = DB_PASS;
	public $dbname = DB_NAME;
	
	private $link;
	private $error;
	 
	public function __construct(){
		$this->connectDb();
	}
	 
	private function connectDb(){
		$this->link=new mysqli($this->host,$this->user,$this->pass,$this->dbname);
		if(!$this->link){
			$this->error="connection fail".$this->link->connect_error();
			return false;
		}
	}
	
	public function select($query){
		$result=$this->link->query($query ) or die ($this->link->error.__Line__);
		if($result->num_rows>0){
			return $result;
		}else{
			return false;
		}
	}



}