<?php
	include_once '../db/db_functions.php';
	session_start();
	error_reporting(0);
	function validate_input(){
		$conn = mysqli_connect('localhost','root','','arun');
		$sql="SELECT * FROM user WHERE `username` ='".$_POST["username"]."' AND `password` = '".$_POST["password"]."'";
		$result = $conn->query($sql);
		if($row = $result->fetch_assoc()){
			$_SESSION["username"]=$row["username"];
			$_SESSION["password"]=$row["password"];
			header("Location:../page/search.php");

		} else{
			$_SESSION["verify"]="verify";
			header("Location: ../index.php");
		}
	}	
	validate_input();
