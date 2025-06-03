<?php	

//Including config.php file for connection with database 
	include_once('config.php');

//If the button Add Movie in movies.php is pressed, we will get datas that users added into the form, and insert them into database :
	if(isset($_POST['submit']))
	{

		$race_name = $_POST['race_name'];
		$race_time = $_POST['race_time'];
		$race_date = $_POST['race_date'];
		$race_price = $_POST['race_price'];
		$race_image = $_POST['race_image'];
	

		$sql = "INSERT INTO movies(race_name, race_time, race_date, race_price, race_image) VALUES (:race_name, :race_time, :race_date, :race_price, :racie_image)";

		$insertRace = $conn->prepare($sql);
			

		$insertRace->bindParam(':movie_name', $race_name);
		$insertRace->bindParam(':movie_time', $race_time);
		$insertRace->bindParam(':movie_date', $race_date);
		$insertRace->bindParam(':movie_price', $race_price);
		$insertRace->bindParam(':movie_image', $race_image);

		$insertRacee->execute();

		header("Location: movies.php");


	}




?>