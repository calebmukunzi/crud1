 <?php
  require_once 'connection.php';
  if ($_GET['id']) {
  	$ID=$_GET['id'];

  	$SQL="select *from course where id= '$ID' ";
  	$result=$conn->query($SQL);
  	$data=$result->fetch_assoc();

  	 $conn->close();
?>
 <!DOCTYPE html>
 <html>
 <head>
 	<title>Edit Page</title>
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
		<legend>Edit Information</legend>
		<form action="update.php" method="post">
			<table cellpadding="4" cellspacing="5">
				<thead>
					<tr>
						<th colspan="2" bgcolor="LightSkyBlue" border= "1">EDIT</th>
					</tr>
				</thead>
				
					<tr>
						<td><label>Course Name</label></label></td>
						<td><input type="text" name="cname" placeholder="Course Name" value="<?php echo $data['name'] ?>"/></td>
				    </tr>
					<tr>
						<td><label>Course Hours</label></label></td>
					<td><input type="text" name="chours" placeholder="Course Hours" value="<?php echo $data['hours']?>"/></td>
					</tr>
					<tr>
						
						<td><input type="hidden" name="id" placeholder="ID" value="<?php echo $data['id'] ?>"/></td>
					</tr>
					<tr>
						<td><button type="submit">update</button></td>
						<td><a href="index.php"><button type="button">Home</button></a></td>
					</tr>
			</table>
		</form>
	</fieldset>
 </body>
 </html>
 <?php
  }
 ?>