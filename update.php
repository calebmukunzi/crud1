<?php
require_once 'connection.php';
	if($_POST){
		$Names=$_POST['cname'];
		$HOURS=$_POST['chours'];
		$ID=$_POST['id'];

		$sql="UPDATE course SET name='$Names',hours='$HOURS'  WHERE ID='$ID'";
		if($conn->query($sql) === TRUE){
			echo"<p>Updated successfully</p>";
			header("refresh:3; url=http://localhost/crud2/index.php");
		}else{
			echo"Failed to update ".$sql.' '.$conn->connect_error;
		}
		$conn->close();
	}
?>