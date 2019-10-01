<?php  
	include("conn.php");
	$id = $_GET['id'];
	$query = "SELECT * FROM faq WHERE id ='$id'";
	if(mysqli_query($sql, $query))  
	{
	    $updateQuery = "DELETE FROM faq WHERE id=$id";
	    mysqli_query($sql, $updateQuery);
	    header('Location:changefaq.php');
	}  
 ?>