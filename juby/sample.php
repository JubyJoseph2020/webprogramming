<html>
<head></head>
<body>
<form method="post" action="student.php" >
<input type="text" name="name">
<input type="submit" value="submit">

<?php
$con=mysqli_connect("localhost","20mca033","2574","20mca033");
if($con)
{
echo $name=$_POST["name"];

$qry="INSERT INTO student_name(name) VALUES ('$name')";

if(mysqli_query($con, $qry))
{
echo "Data inserted successfully<br>";
}
}
?>
</body>
</html>
