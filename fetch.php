<?php 
$servername = "localhost"; 
$username = "root"; 
$password = ""; 
$dbname = "login_page"; 
	
 
$conn = new mysqli($servername,$username,$password,$dbname); 
	
	
	if ($conn -> connect_errno) 
	{ 
	echo "Failed to connect to MySQL: " . $conn -> connect_error; 
	exit(); 
	} 

	$sql = "select * from input"; 
	$result = ($conn->query($sql)); 
	
	$row = []; 

	if ($result->num_rows > 0) 
	{ 
		 
		$row = $result->fetch_all(MYSQLI_ASSOC); 
	} 
?> 

<!DOCTYPE html> 
<html> 
<style> 
* {
    margin:0;
    padding:0;
    box-sizing: border-box;
    font-family: "poppins";
	margin-left:20px;
	margin-right:20px;
}

body {
    display:flex;
    justify-content: center;
    align-items: left;
	min-height:0vh;
}


	th { 
		border: 1px solid black; 
		padding: 10px; 
		margin: 5px; 
		text-align: center;
		background-color:#04aa6d;
		
	} 
	td {
		border: 1px solid black; 
		padding: 10px; 
		margin: 5px; 
		text-align: center;
	}
	tr:nth-child(even){
		background-color:#f2f2f2;
	}
</style> 

<body> 
	<table> 
		<thead> 
			<tr> 
				<th>UserName</th>
				<th>Password</th> 
				
				
			</tr> 
		</thead>	 
		<tbody> 
			<?php 
			if(!empty($row)) 
			foreach($row as $rows) 
			{ 
			?> 
			<tr> 

				<td><?php echo $rows['UserName']; ?></td>
				<td><?php echo $rows['Password']; ?></td> 
				
				

			<?php 
		} 
		?> 

		
		</tbody> 
	</table> 
</body> 
</html> 

<?php 
	mysqli_close($conn); 
?>
<?php
echo"<br>";
echo"<br>";
echo"<br>";
?>

<?php 
$servername = "localhost"; 
$username = "root"; 
$password = ""; 
$dbname = "register"; 
	
 
$conn = new mysqli($servername,$username,$password,$dbname); 
	
	
	if ($conn -> connect_errno) 
	{ 
	echo "Failed to connect to MySQL: " . $conn -> connect_error; 
	exit(); 
	} 

	$sql = "select * from college"; 
	$result = ($conn->query($sql)); 
	
	$row = []; 

	if ($result->num_rows > 0) 
	{ 
		 
		$row = $result->fetch_all(MYSQLI_ASSOC); 
	} 
?> 

<!DOCTYPE html> 
<html> 


<body> 
	<table> 
		<thead> 
			<tr> 
				<th>CollegeName</th>
				<th>Course</th> 
				<th>Year</th>
				<th>Subjects</th>
				
			</tr> 
		</thead> 
		<tbody> 
			<?php 
			if(!empty($row)) 
			foreach($row as $rows) 
			{ 
			?>
			<tr> 

				<td><?php echo $rows['CollegeName']; ?></td>
				<td><?php echo $rows['Course']; ?></td> 
				<td><?php echo $rows['Year']; ?></td> 
				<td><?php echo $rows['Subjects']; ?></td> 
 

			</tr> 
			<?php
			 } ?>
		</tbody> 
	</table> 
</body> 
</html> 

<?php 
	mysqli_close($conn); 
?>