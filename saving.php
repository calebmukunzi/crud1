<?php
 require_once'connection.php';
 
 if($_POST){
 	$Names = $_POST['cname'];
 	$Hours = $_POST['chours'];

 	$sql ="INSERT INTO course(name ,hours , Active)VALUES('$Names', '$Hours', 1)";

 	if($conn->query($sql) === TRUE){
 		echo"<p> One Record Saved!</p>";
 		header("refresh:2;url=http://localhost/crud2/index.php");
 	}else{
 		echo"refused to save!".$conn->connect_error;
 	}
 	$conn->close();
 }
?>