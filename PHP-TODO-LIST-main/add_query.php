<?php
	require_once 'conn.php';
	if(isset($_POST['add'])){
		if($_POST['task'] != ""){
			$task = $_POST['task'];
 
			$conn->query("INSERT INTO `task` (`task`, `status`) VALUES ('$task', '0')");

			header('location:index.php');
		}
	}
?>