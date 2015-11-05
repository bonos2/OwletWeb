<?php

class Controller
{
	public $DBConnection = null;
	public function __construct()
	{
		$this->getDBConnection();
	}
	public function getDBConnection(){
		$this->DBConnection = mysqli_connect(HOST,USER,PASSWD,DATABASE,PORT);
		$result;
		if(!$this->DBConnection){
			$result = 'DBConnect : 실패';
		}
		if($this->DBConnection){
			$result = 'DBConnect : 성공';
		}
		echo "<script>console.log(\"".$result."\");</script>";
	}
	public function loadModel($model_name)
	{
		require 'application/models/' . strtolower($model_name) . '.php';
		return new $model_name($this->DBConnection);
	}
}

?>