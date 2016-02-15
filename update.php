<?php
	// connect with servername, username, password, databasename
	$connection = new mysqli('localhost','root','','todolist');

	// prepare id and values to be updated in table books in database
	$id = $_POST['id'];
	$omschrijving = $_POST['omschrijving'];
	$hoelaat = $_POST['hoelaat'];

	
	// prepare update instruction
	$sql = "UPDATE todolist SET omschrijving = '$omschrijving', hoelaat = '$hoelaat' WHERE id = $id";
	
	// execute update instruction
	$connection->query($sql);
	header("location: dotolist.php");
?>