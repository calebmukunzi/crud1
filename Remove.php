<?php
 require_once'connection.php';
 if($_GET['id']){
 	$ID=$_GET['id'];

 	$sql="SELECT * FROM course WHERE id='$ID'";

 	$result=$conn->query($sql);
 	$data=$result->fetch_assoc();

 	$conn->close();
?>
<!DOCTYPE html>
<html>
<head>
	<title></title>
	<style type="text/css">
		fieldset{
			width: 50%;
			margin: auto;
			margin-top:50px;
		}
		table{
			background :grey;
			width:400px;
			margin: 20px;
			margin-left: 170px;
		}
	</style>
</head>
<body bgcolor="lightskyblue">
	<fieldset>
		<legend></legend>
			<form action="delete.php" method="post">
				<table>
				<tr>

					<td colspan="2">DO You really Want to Delete?
						<input type="hidden"  name="id" value="<?php echo $data['id'] ?>" />
						<input type="hidden"  name="cname" value="<?php echo $data['name'] ?>" />
						<input type="hidden"  name="chours" value="<?php echo $data['hours'] ?>" />
						<input type="hidden"  name="active" value="<?php echo $data['Active'] ?>" />
					</td>	
				</tr>
			    <tr>
			    	<td><button type="submit">Yes</button></td>
					<td><a href="index.php"><button type="button"><b>No</b></button></a></td>	
				</tr>
			</table>
			</form>		
	</fieldset>
</body>
</html>
<?php
 }

?>