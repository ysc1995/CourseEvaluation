
<?php

include 'conn.php';
$studentid = $_GET["studentid"];
//printf($studentid);
printf("Here are the professors that can be viewed:\n");
$query= 'SELECT DISTINCT instructor.fName, class.cName FROM instructor, class WHERE class.iID=instructor.iID';

$result = mysqli_query($conn,$query);
if(!($result= mysqli_query($conn,$query))){
  printf("Error:%s\n", mysqli_error($conn));
  exit(1);
}
while ( $row = mysqli_fetch_assoc( $result ) ) {
//        $cNumber= $row['cNumber'];
	$fName= $row['fName'];
	$cName=$row['cName'];
        echo '<br>';
	echo 'Instructor:  ',  $fName;
	echo '        Class name:  ',$cName;
//	echo '        Class number:  ',$cNumber;

echo '<a href="view4.php?fName='.$fName.'&cName='.$cName.'"/>  Click Here to View</a><br>';
}



?>
