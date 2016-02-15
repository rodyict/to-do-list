<?php


// Create connection
$host = 'localhost';
$conn = mysqli_connect($host,"root","","todolist");

// Check connection
	if (mysqli_connect_errno())
  	{
 		 echo "Failed to connect to MySQL: " . mysqli_connect_error();
	}

// sql to delete a record
$sql = "DELETE from `todolist` WHERE id= '". $_GET['id']  ."'";

if (mysqli_query($conn, $sql)) {
    echo "Record deleted successfully";
} else {
    echo "Error deleting record: " . mysqli_error($conn);
}
mysqli_close($conn);
header("location: dotolist.php");
?>