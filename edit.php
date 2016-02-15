<?php
	// connect with servername, username, password, databasename
	$connection = new mysqli('localhost','root','','todolist');
	
	
	// prepare id from the url querystring to find the record
	$id = $_GET['id'];
	
	// prepare query to select data from the table books for id 
	$sql = "SELECT * FROM todolist WHERE id = $id";
	
	// execute the query 
	$result = $connection->query($sql);
	
	// fetch selected book to store in variable: book
	$todo = $result->fetch_assoc();
?>
<!doctype html>
<html>
<body>
	<form action="update.php" method="post">
		<!-- inject book id in hidden field -->
		<input type="hidden" name="id" value="<?php echo $todo['id']; ?>"><br>
		
		<label for="omschrijving">Omschrijving: </label><br>
		<input name="omschrijving" value="<?php echo $todo['omschrijving']; ?>"><br>
		
		<label for="hoelaat">Hoelaat: </label><br>
		<input name="hoelaat" value="<?php echo $todo['hoelaat']; ?>"><br>



		<input type="submit" name="submit" value="save">
	</form>
</body>
</html>