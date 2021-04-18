<?php
	require_once 'connection.php';
	if($_POST){
	
		$ID=$_POST['id'];
		//$Names=$_POST['cname'];
		//$HOURS=$_POST['chours'];
		$sql="DELETE FROM course WHERE id = '$ID' ";
		//$sql= "UPDATE course SET active= 2 WHERE id= '$ID' ";
		if($conn->query($sql) === TRUE){
			echo "<p>One Row deleted successfully!</p>";
			header("refresh:3; url=http://localhost/crud2/index.php");
		}else{
			echo"Refused To delete ".$sql.' '.$conn->error;
		}
		$conn->close();
	}
?>