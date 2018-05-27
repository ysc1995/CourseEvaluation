<?php
include 'conn.php';
$studentid = $_GET["studentid"];
$cNumber=$_GET["cNumber"];

//find student identifier


$sql= 'SELECT identifier FROM student WHERE sID = \''.$studentid.'\'';
$result= mysqli_query($conn,$sql);

if(!($result= mysqli_query($conn,$sql))){
  printf("Error:%s\n", mysqli_error($conn));
  exit(1);
}

while ( $row = mysqli_fetch_assoc( $result ) ) {
$identifier=$row['identifier']; 
//printf($identifier);
}

//check if written
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
echo 'window.history.go(-2);</script>';

}







/*
$sql = 'SELECT cqID FROM choiceEvaluation WHERE cNumber=\''.$cNumber.'\'';
$result = mysqli_query($conn,$sql);
while($row = mysqli_fetch_assoc($result)){
	$cqid = $row['cqID'];
	$sqlcq='SELECT cquestion FROM choiceQuestion WHERE cqID=\''.$cqid.'\'';
	$resultcq= mysqli_query($sqlcq,$conn);

	while($rowcq=mysqli_fetch_assoc($resultcq)){
		$cq=$rowcq['cquestion'];

	}
}



?>
*/
?>

<html>
<body>
Evaluation Form
<br>
<br>
<br>

<form action = "store.php" method = "POST">
id:<input type="text" name="studnetid" value="<?php echo $studentid?>"/>
class number:<input type="text" name="cNumber" value="<?php echo $cNumber?>"/> 
student identifier:<input type="text" name="identifier" value="<?php echo $identifier?>"/>  

<br>
<br>
year:<select name= "year" >
        <option value ="First">First</option>
        <option value ="Second">Second</option>
        <option value="Third">Third</option>
        <option value="Fourth+">Fourth+</option>
        <option value="Graduate">Graduate</option>
    </select>  
	<br>
sex:<select name = "sex">
	<option value ="Male">Male</option>
        <option value ="Female">Female</option>
	</select>
	<br>
class missed:<select name="classmissed">
	<option value ="0%">0%</option>
        <option value ="1-5">1%-5%</option>
        <option value ="6-10">6%-10%</option>
        <option value="11-15">11%-15%</option>
        <option value="16-20">16%-20%</option>
        <option value="21-25">21%-25%</option>
        <option value="26-30">26%-30%</option>
        <option value="31-40">31%-40%</option>
        <option value="41-50">41%-50%</option>
        <option value="51-60">51%-60%</option>
        <option value="61-80">61%-80%</option>
        <option value="81-99">81%-99%</option>
    </select>
	<br>

expected grade: <select name="expectedgrade">
        <option value="A">A</option>
        <option value="A-">A-</option>
        <option value="B+">B+</option>
        <option value="B">B</option>
        <option value="B-">B-</option>
        <option value="C+">C+</option>
        <option value="C">C</option>
        <option value="C-">C-</option>
        <option value="D+">D+</option>
        <option value="D">D</option>
        <option value="D-">D-</option>
	<option value="F">F</option>
    </select>
	<br>

major: <select  name="major">
	<option  value="Applied Mathematics">Applied Mathematics</option>
        <option  value="Applied Physics">Applied Physics</option>
	<option  value="Biology">Biology</option>
	<option  value="Business">Business</option>
	<option  value="Business Administration">Business Administration</option>
	<option  value="Chemistry">Chemistry</option>
	<option  value="Computer Science">Computer Science</option>
	<option  value="Economics">Economics</option>
	<option  value="Economics & Mathematics">Economics & Mathematics</option>
	<option  value="Mathematics">Mathematics</option>
	<option  value="Mathematics & Computer Science">Mathematics & Computer Science</option>
	<option  value="Physics">Physics</option>
        <option  value="Quantitative Science">Quantitative Science</option>
        <option  value="Sociology">Sociology</option>
        <option  value="Undeclared">Undeclared</option>
    </select>
	<br>
reason taking course: <select name="reasontakingcourse">
        <option  value="Pre-Prof Requirement">Pre-Prof Requirement </option>
        <option  value="Prerequisite">Prerequisite </option>
        <option  value="College Requirement Major">College Requirement Major </option>
        <option  value="Interested">Interested </option>
    </select>

how well organized was the class?(1-10)<input type="text" name="scale1"/>
	<br>

how concerned was the instructor with what students learned from the course? (1-10)<input type="text" name="scale2"/>
    <br>

were the grading criteria for the course clear? (1-10)<input type="text" name="scale3"/>
    <br>

was the instructor enthusiastic about the material? (1-10)<input type="text" name="scale4"/>
    <br>

how much did the course promote your progress on acquiring factual knowledge? (1-10)<input type="text" name="scale5"/>
    <br>

how much did the course promote your progress on understanding basic principles and concepts? (1-10)<input type="text" name="scale6"/>
    <br>

I would recommend this course to another student. (Agree/Disagree)<select  name="agree1">
        <option value="Strongly Disagree">Strongly Disagree</option>
        <option value="Disagree">Disagree</option>
        <option value="Neutral">Neutral</option>
        <option value="Aagree">Agree</option>
        <option value="Strongly Agree">Strongly Agree</option>
    </select>
    <br>
I would recommend this instructor to another student. (Agree/Disagree)<select name="agree2">
<option value="Strongly Disagree">Strongly Disagree</option>
        <option value="Disagree">Disagree</option>
        <option value="Neutral">Neutral</option>
        <option value="Aagree">Agree</option>
        <option value="Strongly Agree">Strongly Agree</option>
    </select>
    <br>

Comment on the strengths of the instructor (Free-text)<input type="text" name="open1"/>
    <br>
Comment on the weaknesses of the instructor (text)<input type="text" name="open2"/>
    <br>
Comment on the strengths of the course (Free-text)<input type="text" name="open3"/>
    <br>
Comment on the weaknesses of the course (text)<input type="text" name="open4"/>
    <br>

<input type = "Submit"/>



</form>
</html>
