<body>
    <?php
$CollegeName= $_POST['CollegeName'];
$Course= $_POST['Course'];
$Year= $_POST['Year'];
$Subjects= $_POST['Subjects'];
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "register";
$conn = new mysqli($servername,$username,$password,$dbname);
$sql = ("INSERT INTO college (CollegeName,Course,Year,Subjects) VALUES('$CollegeName','$Course','$Year','$Subjects')");
if($conn-> query($sql)===true)  
{
   header("location:register.html");
   exit();
}
else{
    echo "error:" .$sql."<br>".$conn->error;
}
$conn->close();

