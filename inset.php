

<?php 
	$host = 'localhost';
	$con=mysqli_connect($host,"root","","todolist");

	if (mysqli_connect_errno())
  	{
 		 echo "Failed to connect to MySQL: " . mysqli_connect_error();
	}

		$omschrijving = $_POST['omschrijving'];
		$hoelaat = $_POST['hoelaat'];

	mysqli_query($con,"INSERT INTO todolist (omschrijving, hoelaat) 
		VALUES ('$omschrijving', '$hoelaat')");

	mysqli_close($con);
	header("location: dotolist.php");

/*
	if ($link->connect_error) 
		ie ('Connect Error: '. $link->connect_error);

		$omschrijving = $_POST['omschrijving'];
		$hoelaat = $_POST['hoelaat'];

		$sql = mysqli_query($link,"INSERT INTO todolist (id, omschrijving, hoelaat) 
				VALUES (999, $omschrijving, $hoelaat)");

		$result = &link->query($sql);

		
*/

?>



