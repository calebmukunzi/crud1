<?php
 require_once'connection.php';
?>
<!DOCTYPE html>
<html>
<head>
	<title>Saving Page</title>
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
<body bgcolor="LightSkyBlue">
	<fieldset>
		<legend>Course Registration</legend>
		<form action="saving.php" method="post">
			<table cellpadding="4" cellspacing="5">
				<thead>
					<tr>
						<th colspan="2" bgcolor="LightSkyBlue" border= "1">COURSE REGISTRATION</th>
					</tr>
				</thead>
				
					<tr>
						<td><label>Course Name</label></label></td>
						<td><input type="text" name="cname" placeholder="Course Name"></td>
				    </tr>
					<tr>
						<td><label>Course Hours</label></label></td>
						<td><input type="text" name="chours" placeholder="Course Hours"></td>
					</tr>
					<tr>
						<td><button type="submit">Save</button></td>
						<td><a href="index.php"><button type="button">Home</button></a></td>
					</tr>
				
				
			</table>
		</form>
	</fieldset>
</body>
</html>