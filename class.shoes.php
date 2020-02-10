<?php
class shoes{
	public $database;
	
	public function __construct(){
		$this->database = new mysqli(DB_SERVER,DB_USERNAME,DB_PASSWORD,DB_DATABASE);
		if(mysqli_connect_errno()){
			echo "Database connection error.";
			exit;
		}else {
		}
	}
	
	public function get_hoes(){
		$sql = "SELECT * FROM tbl_shoes";
		$result = mysqli_query($this->database,$sql);
		while($row = mysqli_fetch_assoc($result)){
			$list[] = $row;
		}
		return $list;
	}
	
}
?>
