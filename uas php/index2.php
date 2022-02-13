<?php
$user='root';
$password='prk';
$database='trucorp-db';
$servername='172.21.0.2';
$con=mysqli_connect($servername,$user,$password,$database);

$sql = "SELECT * FROM users";
if ($result = mysqli_query($con, $sql)) {
$count=mysqli_num_rows($result);
echo "Total rows: " .$count;
}
$mysqli->close($con); 
?>

