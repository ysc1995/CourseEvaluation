<html>
<?php
/*
$servername = "localhost";
$username = "cs377";
$password = "cs377_s18";
$db="finalproject";
//print"hi";
$conn = mysqli_connect($servername, $username, $password,$db);
if  ($conn->connect_error) {
    printf("Connect failed: %s\n", $conn->connect_error);
} 
*/

$studentid = $_POST['studentid'];
//printf($studentid);

echo '<a href="evaluate.php?studentid='.$studentid.'">make a evaluation</a><br />';
echo '<a href="view.php?studentid='.$studentid.'">student view of course</a><br />';

/*

$sql = "SELECT identifier FROM student WHERE student.sID = '".$studentid."'";
//$result =mysqli_query($conn,$sql);

//printf($result);
if(!($result =mysqli_query($conn,$sql))){
printf("error");
}
else{
printf("SUCCESS");
}
*/

//varification

/*
$row = mysqli_fetch_assoc($result);
if($row==""){
printf("error");
}
else{
printf($row);
}
*/

?>

</html>
