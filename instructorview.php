<?php

include 'conn.php';

$cNumber=$_GET["cNumber"];
echo 'class number:';
printf($cNumber);
echo '<br>';

for($i =1;$i<=6;$i++){ //choice question
$query = 'SELECT cquestion FROM choiceQuestion WHERE cqID = \''.$i.'\'';
$result2 = mysqli_query($conn,$query);

if(!($result2= mysqli_query($conn,$query))){
  printf("Error:%s\n", mysqli_error($conn));
  exit(1);
}
while($row2 = mysqli_fetch_assoc($result2)){
$question = $row2['cquestion'];
echo '<br>';
printf($question);
printf(":");
echo '<br>';

}

//$sql= 'SELECT * FROM class  WHERE class.cName=\''.$cName.'\' and iID= any(SELECT iID FROM instructor WHERE instructor.fName = \''.$fName.'\')';
$sql = 'SELECT answer, count(answer) From choiceAnswer where cNumber = \''.$cNumber.'\' and cqID=\''.$i.'\' group by answer';

//$sql = 'SELECT answer From choiceAnswer where cNumber = \''.$cNumber.'\'';

$result = mysqli_query($conn,$sql);


if(!($result= mysqli_query($conn,$sql))){
  printf("Error:%s\n", mysqli_error($conn));
  exit(1);
}

while($row = mysqli_fetch_assoc($result)){
 //foreach ($row as $key => $value) {
//	 print ($key . " = " . $value . "\n");
 //}
	$count = $row['count(answer)'];
	$answer=$row['answer'];
	echo $answer;
	printf(":    ");
//	echo '<br>';
	echo $count;
	echo '<br>';

	}

}

for($i =1;$i<=2;$i++){ //agree question
$query = 'SELECT aquestion FROM agreeQuestion WHERE aqID = \''.$i.'\'';
$result2 = mysqli_query($conn,$query);

if(!($result2= mysqli_query($conn,$query))){
  printf("Error:%s\n", mysqli_error($conn));
  exit(1);
}
while($row2 = mysqli_fetch_assoc($result2)){
$question = $row2['aquestion'];
echo '<br>';
printf($question);
printf(":");
echo '<br>';

}

//$sql= 'SELECT * FROM class  WHERE class.cName=\''.$cName.'\' and iID= any(SELECT iID FROM instructor WHERE instructor.fName = \''.$fName.'\')';
$sql = 'SELECT answer, count(answer) From agreeAnswer where cNumber = \''.$cNumber.'\' and aqID=\''.$i.'\' group by answer';

//$sql = 'SELECT answer From choiceAnswer where cNumber = \''.$cNumber.'\'';

$result = mysqli_query($conn,$sql);


if(!($result= mysqli_query($conn,$sql))){
  printf("Error:%s\n", mysqli_error($conn));
  exit(1);
}

while($row = mysqli_fetch_assoc($result)){
 //foreach ($row as $key => $value) {
//	 print ($key . " = " . $value . "\n");
 //}
	$count = $row['count(answer)'];
	$answer=$row['answer'];
	echo $answer;
	printf(":    ");
//	echo '<br>';
	echo $count;
	echo '<br>';

	}

}


for($i =1;$i<=4;$i++){ //open question
$query = 'SELECT oquestion FROM openQuestion WHERE oqID = \''.$i.'\'';
$result2 = mysqli_query($conn,$query);

if(!($result2= mysqli_query($conn,$query))){
  printf("Error:%s\n", mysqli_error($conn));
  exit(1);
}
while($row2 = mysqli_fetch_assoc($result2)){
$question = $row2['oquestion'];
echo '<br>';
printf($question);
printf(":");
echo '<br>';

}

//$sql= 'SELECT * FROM class  WHERE class.cName=\''.$cName.'\' and iID= any(SELECT iID FROM instructor WHERE instructor.fName = \''.$fName.'\')';
$sql = 'SELECT answer From openAnswer where cNumber = \''.$cNumber.'\' and oqID=\''.$i.'\' ';

//$sql = 'SELECT answer From choiceAnswer where cNumber = \''.$cNumber.'\'';

$result = mysqli_query($conn,$sql);


if(!($result= mysqli_query($conn,$sql))){
  printf("Error:%s\n", mysqli_error($conn));
  exit(1);
}

while($row = mysqli_fetch_assoc($result)){
 //foreach ($row as $key => $value) {
//	 print ($key . " = " . $value . "\n");
 //}
	//$count = $row['count(answer)'];
	$answer=$row['answer'];
	echo $answer;
	//printf(":    ");
//	echo '<br>';
	//echo $count;
	echo '<br>';

	}

}

for($i =1;$i<=6;$i++){ //scale question
$query = 'SELECT scquestion FROM scaleQuestion WHERE scqID = \''.$i.'\'';
$result2 = mysqli_query($conn,$query);

if(!($result2= mysqli_query($conn,$query))){
  printf("Error:%s\n", mysqli_error($conn));
  exit(1);
}
while($row2 = mysqli_fetch_assoc($result2)){
$question = $row2['scquestion'];
echo '<br>';
printf($question);
printf(":");
echo '<br>';

}

//$sql= 'SELECT * FROM class  WHERE class.cName=\''.$cName.'\' and iID= any(SELECT iID FROM instructor WHERE instructor.fName = \''.$fName.'\')';
$sql = 'SELECT answer, count(answer) From scaleAnswer where cNumber = \''.$cNumber.'\' and scqID=\''.$i.'\' group by answer order by answer';

//$sql = 'SELECT answer From choiceAnswer where cNumber = \''.$cNumber.'\'';

$result = mysqli_query($conn,$sql);


if(!($result= mysqli_query($conn,$sql))){
  printf("Error:%s\n", mysqli_error($conn));
  exit(1);
}

while($row = mysqli_fetch_assoc($result)){
 //foreach ($row as $key => $value) {
//	 print ($key . " = " . $value . "\n");
 //}
	$count = $row['count(answer)'];
	$answer=$row['answer'];
	echo $answer;
	printf(":    ");
//	echo '<br>';
	echo $count;
	echo '<br>';

	}

/*
$query = 'SELECT answer From scaleAnswer where cNumber = \''.$cNumber.'\'' orderby answer;
$result = mysqli_query($conn,$query);

if(!($result= mysqli_query($conn,$sql))){
  printf("Error:%s\n", mysqli_error($conn));
  exit(1);
}
$totalcount=0;
while($row = mysqli_fetch_assoc($result)){
$totalcount ++;


}
$totalcount=$totalcount/2;



printf("median:   ");

$j=0;

while($row = mysqli_fetch_assoc($result)&&$j<$totalcount){
$j++;
$medium = $row['answer'];
}

printf($medium);
*/
}

?>

