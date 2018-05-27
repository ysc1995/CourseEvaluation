<?php

include 'conn.php';


$fName=$_GET['fName'];
$cName=$_GET['cName'];
printf("Course:    ");
printf($cName);
printf("     by:      ");
printf($fName);



for ($i = 1; $i <=6;$i++){ //choice question
$sql='select count(*) from class , instructor , choiceAnswer WHERE class.iID=instructor.iID
AND choiceAnswer.cNumber=class.cNumber
and instructor.fName=\''.$fName.'\'
and cName=\''.$cName.'\'
and cqID = \''.$i.'\'';

$result = mysqli_query($conn,$sql);

while($row = mysqli_fetch_assoc($result)){
	$totalcount = $row['count(*)'];

}


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


$sql = 'select answer, count(answer) from class , instructor , choiceAnswer WHERE class.iID=instructor.iID
AND choiceAnswer.cNumber=class.cNumber
and instructor.fName=\''.$fName.'\'
and cName=\''.$cName.'\'
and cqID = \''.$i.'\'
group by answer';
$result2 = mysqli_query($conn,$sql);

if(!($result= mysqli_query($conn,$sql))){
  printf("Error:%s\n", mysqli_error($conn));
  exit(1);
}

while($row = mysqli_fetch_assoc($result2)){
 //foreach ($row as $key => $value) {
//	 print ($key . " = " . $value . "\n");
 //}
	$count = $row['count(answer)'];
	$answer=$row['answer'];
	echo $answer;
	printf(" :    ");
//	echo '<br>';
	$percent = $count/$totalcount;
	echo $percent;
	echo '<br>';

	}
//printf($totalcount);
}






for ($i = 1; $i <=2;$i++){ //agree question
$sql='select count(*) from class , instructor , agreeAnswer WHERE class.iID=instructor.iID
AND agreeAnswer.cNumber=class.cNumber
and instructor.fName=\''.$fName.'\'
and cName=\''.$cName.'\'
and aqID = \''.$i.'\'';

$result = mysqli_query($conn,$sql);

while($row = mysqli_fetch_assoc($result)){
	$totalcount = $row['count(*)'];

}


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


$sql = 'select answer, count(answer) from class , instructor , agreeAnswer WHERE class.iID=instructor.iID
AND agreeAnswer.cNumber=class.cNumber
and instructor.fName=\''.$fName.'\'
and cName=\''.$cName.'\'
and aqID = \''.$i.'\'
group by answer';
$result2 = mysqli_query($conn,$sql);

if(!($result= mysqli_query($conn,$sql))){
  printf("Error:%s\n", mysqli_error($conn));
  exit(1);
}

while($row = mysqli_fetch_assoc($result2)){
 //foreach ($row as $key => $value) {
//	 print ($key . " = " . $value . "\n");
 //}
	$count = $row['count(answer)'];
	$answer=$row['answer'];
	echo $answer;
	printf(" :    ");
//	echo '<br>';
	$percent = $count/$totalcount;
	echo $percent;
	echo '<br>';

	}
//printf($totalcount);
}




for ($i = 1; $i <=6;$i++){ //scale question
$sql='select count(*) from class , instructor , scaleAnswer WHERE class.iID=instructor.iID
AND scaleAnswer.cNumber=class.cNumber
and instructor.fName=\''.$fName.'\'
and cName=\''.$cName.'\'
and scqID = \''.$i.'\'';

$result = mysqli_query($conn,$sql);

while($row = mysqli_fetch_assoc($result)){
	$totalcount = $row['count(*)'];

}


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


$sql = 'select answer, count(answer) from class , instructor , scaleAnswer WHERE class.iID=instructor.iID
AND scaleAnswer.cNumber=class.cNumber
and instructor.fName=\''.$fName.'\'
and cName=\''.$cName.'\'
and scqID = \''.$i.'\'
group by answer';
$result2 = mysqli_query($conn,$sql);

if(!($result= mysqli_query($conn,$sql))){
  printf("Error:%s\n", mysqli_error($conn));
  exit(1);
}
$total=0;
while($row = mysqli_fetch_assoc($result2)){
 //foreach ($row as $key => $value) {
//	 print ($key . " = " . $value . "\n");
 //}
	$answer=$row['answer'];
	$count = $row['count(answer)'];
	$total= $total+$count*$answer;

}

$average = $total/$totalcount;
	printf("average:    ");
	echo $average;
	
	echo '<br>';

}
//printf($totalcount);


echo '<a href="index.php">FIRST PAGE</td>';



?>

