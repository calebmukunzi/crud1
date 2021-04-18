<?php

$server="localhost";
$user="root";
$passw="";
$dtb="last";

$conn=new mysqli($server,$user,$passw,$dtb);
if($conn->connect_error){
die("failed to connect!!".$conn->connect_error);

}else{
	//echo "Connected Successfullly";
}
?>