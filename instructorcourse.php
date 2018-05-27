<?php

include 'conn.php';

$fName = $_POST['fName'];
$lName = $_POST['lName'];
//printf($fName);
//printf($lName);


//$query= 'SELECT * FROM class WHERE class.iID= any(SELECT iID FROM instructor WHERE instructor.fName= \''.$fName.'\')' ;
$query = 'select * from class where class.iID = any(select iID from instructor where instructor.fName=\''.$fName.'\')';
//select * from class where class.iID = any(select iID from instructor where instructor.fName="joyce");

$sql= 'SELECT * FROM class  WHERE class.iID= any(SELECT iID FROM instructor WHERE instructor.fName = \''.$fName.'\')';

$result = mysqli_query($conn,$sql);
if(!($result= mysqli_query($conn,$query))){
  printf("Error:%s\n", mysqli_error($conn));
  exit(1);
}
while ( $row = mysqli_fetch_assoc( $result ) ) {
        $cNumber= $row['cNumber'];
        echo '<br>';
        printf($cNumber); 
	//printf("HI");

echo '<a href="instructorview.php?cNumber='.$cNumber.'">VIEW THIS CLASS</a><br/>';
}

?>
