<?php

include 'conn.php';


$studentid = $_GET["studentid"];
//printf($studentid);
printf("Here is your classes that can be evaluated:\n");


$query= 'SELECT * FROM take WHERE sID=\''.$studentid.'\'';
$result = mysqli_query($conn,$query);
if(!($result= mysqli_query($conn,$query))){
  printf("Error:%s\n", mysqli_error($conn));
  exit(1);
}

while ( $row = mysqli_fetch_assoc( $result ) ) {
	$cNumber= $row['cNumber'];
	echo '<br>';
	printf($cNumber); 

echo '<a href="evaluate2.php?studentid='.$studentid.'&cNumber='.$cNumber.'">Evaluate</a><br>';
//foreach ($row as $key => $value) {
// printf ($key."==".$value . "\n");
// }
// print("================");
 
}



/*
$sql = "SELECT * FROM take WHERE sID=\''.$studentid.'\'";
$result = mysqli_query($conn,$sql);
//printf("result %s",$result);



while ( $row = mysqli_fetch_assoc( $result ) ) {
 foreach ($row as $key => $value) {
 print ($key . " = " . $value . "\n");
 
}
}


*/


//echo '<a href="evaluation2.php?studentid='.$studentid.'&cNumber='.$cNumber.'">Evaluate<br>';



/*
while($row7 = mysqli_fetch_assoc($result7) ){
		foreach ($row7 as $key7 => $value7){
			print($key7 . " : " . $value7);
			echo "<br>";
			echo "<br>";
*/



?>
