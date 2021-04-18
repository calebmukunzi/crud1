<?php
 require_once'connection.php';
?>
<!DOCTYPE html>
<html>
<head>
	<title>Index Page</title>
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
		
			<table cellpadding="4" cellspacing="5">
				<thead>
					<tr>
						<th colspan="3" bgcolor="LightSkyBlue" border= "1">COURSES</th>
					</tr>
					<tr>
						
							<th>Course Name</th>
							<th>Course Hours</th>
					
					</tr>
				</thead>
				<tbody>
					<tr>
					<?php
							$sql="SELECT *FROM COURSE ";
							$result=$conn->query($sql);
							//$data=$result->fetch_assoc();
							 if($result->num_rows>0)
							 {
							 	while($row=$result->fetch_assoc()){
							 		echo "
										<tr>
												<td>".$row['name']."</td>
												<td>".$row['hours']."</td>
												<td>

												<a href='edit.php?id=".$row['id']."'><button type='button'>Edit</button></a>
												<a href='Remove.php?id=".$row['id']."><button type='button'>Remove</button></a>
														</td>
										
										</tr>
											";
							 }

							 }else{
							 	echo " 
							 		<tr>
							 			<td colspan='3'>
							 				<center><b>No Data Available!</b></center>
							 			</td>
							 		</tr>
							 	";

							 }
							
						
					?>
				</tr>
				</tbody>
					
			</table>
		</fieldset>
</body>
</html>