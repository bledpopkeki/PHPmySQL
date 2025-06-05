<?php	

	include_once('config.php');

	if(isset($_POST['submit']))
	{

		$race_name = $_POST['race_name'];
		$race_time = $_POST['race_time'];
		$race_date = $_POST['race_date'];
		$race_price = $_POST['race_price'];
		$race_image = $_POST['race_image'];
	

		$sql = "INSERT INTO races(race_name, race_time, race_date, race_price, race_image) VALUES (:race_name, :race_time, :race_date, :race_price, :race_image)";

		$insertRace = $conn->prepare($sql);
			

		$insertRace->bindParam(':race_name', $race_name);
		$insertRace->bindParam(':race_time', $race_time);
		$insertRace->bindParam(':race_date', $race_date);
		$insertRace->bindParam(':race_price', $race_price);
		$insertRace->bindParam(':race_image', $race_image);

		$insertRace->execute();

		header("Location: races.php");
	}
?>