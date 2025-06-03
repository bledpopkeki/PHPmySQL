<?php 
	include_once('config.php');
	


	if (isset($_POST['submit1'])) {
		$id = $_POST['id'];
		$race_name = $_POST['race_name'];
		$race_time = $_POST['race_time'];

		

		$sql = "UPDATE races SET id=:id,  race_name=:race_name,race_time=:race_time WHERE id=:id";

		$prep = $conn->prepare($sql);
		$prep->bindParam(':id',$id);
		$prep->bindParam(':race_name',$race_name);
		$prep->bindParam(':race_time',$race_time);
		
		$prep->execute();
		header("Location: dashboard.php");
	}
 ?>