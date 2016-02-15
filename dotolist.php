<?php

	$host = 'localhost';
	$link = new mysqli($host,"root","","todolist");
	if ($link->connect_error) {
		die ('Connect Error: '. $link->connect_error);
	}
$sql = 'SELECT * FROM todolist';

$cursor = $link->query($sql);

$todoitems = $cursor->fetch_all(MYSQLI_ASSOC);

?>


<!DOCTYPE html>
<html>
<head>
	<title>Todolist</title>
	<link rel="stylesheet" type="text/css" href="todo.css">
</head>
<body>

<h1> TO DO LIST </h1>

<div class="container">
	<p> Met dit hulptool kan je bijhouden wat je nog moet doen... </p>


	<a href="add.php"> <input type="submit" value="Toevoegen aan de to do list" />               </a>
	<table border='1'>
		<?php 
			foreach ($todoitems as $todoitem):
		?>

		<tr>
			<td><?php echo $todoitem ['omschrijving']; ?></td>
			<td><?php echo $todoitem ['hoelaat']; ?></td>
			<td> <a href="delete.php?id=<?php echo $todoitem ['id'] ?>">   <input type="submit" value="Delete" /> </a></td>
			<td> <a href="edit.php?id=<?php echo $todoitem ['id'] ?>"> <input type="submit" value="Edit" /> </a> </td>
			
		</tr>


		<?php 
			endforeach;
		 ?>

	</table>


</div>

</body>
</html>