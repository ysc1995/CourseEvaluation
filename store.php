<?php
include 'conn.php';


$identifier=$_POST["identifier"];
$cNumber = $_POST["cNumber"];
$studentid=$_POST["studentid"];


$sqlcheck1 = 'SELECT answer FROM choiceAnswer WHERE identifier=\''.$identifier.'\' and cNumber = \''.$cNumber.'\'';
$resultcheck1 = mysqli_query($conn,$sqlcheck1);
$row1 = mysqli_fetch_assoc($resultcheck1);
$sqlcheck2 = 'SELECT answer FROM agreeAnswer WHERE identifier=\''.$identifier.'\' and cNumber = \''.$cNumber.'\'';
$resultcheck2 = mysqli_query($conn,$sqlcheck2);
$row2 = mysqli_fetch_assoc($resultcheck2);
$sqlcheck3 = 'SELECT answer FROM openAnswer WHERE identifier=\''.$identifier.'\' and cNumber = \''.$cNumber.'\'';
$resultcheck3 = mysqli_query($conn,$sqlcheck3);
$row3 = mysqli_fetch_assoc($resultcheck3);
$sqlcheck4 = 'SELECT answer FROM scaleAnswer WHERE identifier=\''.$identifier.'\' and cNumber = \''.$cNumber.'\'';
$resultcheck4 = mysqli_query($conn,$sqlcheck4);
$row4 = mysqli_fetch_assoc($resultcheck4);
//printf("hi");
if($row1!=NULL||$row2!=NULL||$row3!=NULL||$row4!=NULL){
echo '<script>alert("You have already evaluated this class.");';
echo 'window.history.go(-3);</script>';
}
//$identifier=$_POST["identifier"];
//$cNumber = $_POST["cNumber"];
//$studentid=$_POST["studentid"];
else{




//printf($identifier);
$major = $_POST["major"];
//printf($major);
$year = $_POST["year"];
$sex = $_POST["sex"];
$classmissed = $_POST["classmissed"];
$expectedgrade = $_POST["expectedgrade"];
$reasontakingcourse = $_POST["reasontakingcourse"];
$scale1= $_POST["scale1"];
$scale2= $_POST["scale2"];
$scale3= $_POST["scale3"];
$scale4= $_POST["scale4"];
$scale5= $_POST["scale5"];
$scale6= $_POST["scale6"];
$agree1= $_POST["agree1"];
$agree2= $_POST["agree2"];
$open1= $_POST["open1"];
$open2= $_POST["open2"];
$open3= $_POST["open3"];
$open4= $_POST["open4"];
$agree1=$_POST["agree1"];
$agree2=$_POST["agree2"];
//printf($scale1);
//printf($year);
//printf($cNumber);
//printf($identifier);

if ($scale1==NULL||$scale2==NULL||$scale3==NULL||$scale4==NULL||$scale5==NULL||$scale6==NULL||$open1==NULL||$open2==NULL||$open3==NULL||$open4==NULL){
echo '<script>alert("You need to finish all the part!");window.history.go(-1);</script>'; 

} 
else{

$sql1 = "INSERT INTO choiceAnswer VALUES (300,1,'$year', '$identifier','$cNumber')";
$sql2 = "INSERT INTO choiceAnswer VALUES (300,2,'$sex', '$identifier','$cNumber')";
$sql3 = "INSERT INTO choiceAnswer VALUES (300,3,'$classmissed', '$identifier','$cNumber')";
$sql4 = "INSERT INTO choiceAnswer VALUES (300,4,'$major', '$identifier','$cNumber')";
$sql5 = "INSERT INTO choiceAnswer VALUES (300,5,'$expectedgrade', '$identifier','$cNumber')";
$sql6 = "INSERT INTO choiceAnswer VALUES (300,6,'$reasontakingcourse', '$identifier','$cNumber')";
$sql7 = "INSERT INTO agreeAnswer VALUES (300,1,'$agree1', '$identifier','$cNumber')";
$sql8 = "INSERT INTO agreeAnswer VALUES (300,2,'$agree2', '$identifier','$cNumber')";
$sql9 = "INSERT INTO openAnswer VALUES (300,1,'$open1', '$identifier','$cNumber')";
$sql10 = "INSERT INTO openAnswer VALUES (300,2,'$open2', '$identifier','$cNumber')";
$sql11 = "INSERT INTO openAnswer VALUES (300,3,'$open3', '$identifier','$cNumber')";
$sql12 = "INSERT INTO openAnswer VALUES (300,4,'$open4', '$identifier','$cNumber')";
$sql13 = "INSERT INTO scaleAnswer VALUES (300,1,'$scale1', '$identifier','$cNumber')";
$sql14 = "INSERT INTO scaleAnswer VALUES (300,2,'$scale2', '$identifier','$cNumber')";
$sql15 = "INSERT INTO scaleAnswer VALUES (300,3,'$scale3', '$identifier','$cNumber')";
$sql16 = "INSERT INTO scaleAnswer VALUES (300,4,'$scale4', '$identifier','$cNumber')";
$sql17 = "INSERT INTO scaleAnswer VALUES (300,5,'$scale5', '$identifier','$cNumber')";
$sql18 = "INSERT INTO scaleAnswer VALUES (300,6,'$scale6', '$identifier','$cNumber')";

printf("SUCCESS!");
$result= mysqli_query($conn,$sql1);
$result= mysqli_query($conn,$sql2);
$result= mysqli_query($conn,$sql3);
$result= mysqli_query($conn,$sql4);
$result= mysqli_query($conn,$sql5);
$result= mysqli_query($conn,$sql6);
$result= mysqli_query($conn,$sql7);
$result= mysqli_query($conn,$sql8);
$result= mysqli_query($conn,$sql9);
$result= mysqli_query($conn,$sql10);
$result= mysqli_query($conn,$sql11);
$result= mysqli_query($conn,$sql12);
$result= mysqli_query($conn,$sql13);
$result= mysqli_query($conn,$sql14);
$result= mysqli_query($conn,$sql15);
$result= mysqli_query($conn,$sql16);
$result= mysqli_query($conn,$sql17);
$result= mysqli_query($conn,$sql18);

//echo " submit failed";
//}else{

echo '<a href="index.php">Home</a>';
//printf("HI");
//}
}
}
?>
