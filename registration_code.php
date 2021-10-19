<!--
Here, we write code for registration.
-->
<?php
require_once('connection.php');
$fname = $lname = $email = $gender = $mobileno = $dateofbirth = $hscresults = $sscresults = $courseenroll = $enrollingyear = $enrollingyear2'';

$fname = $_POST['firstname'];
$lname = $_POST['lastname'];
$email = $_POST['email'];
$gender = $_POST['gender'];
$mobileno = $_POST['mobileno'];
$dateofbirth = $_POST['dateofbirth'];
$hscresults = $_POST['hscresults'];
$sscresults = $_POST['sscresults'];
$courseenroll = $_POST['courseenroll'];
$enrollingyear = $_POST['enrollingyear'];
$$enrollingyear2 = $_POST['enrollingyear2'];

$sql = "INSERT INTO tbluser (Firstname,Lastname,Email,Gender,MobileNo,DateOfBirth,HSCResults,SSCResults,CourseEnroll,CourseEnrollYear,CourseEnrollYear2 ) VALUES ('$fname','$lname','$email','$gender','$mobileno',$dateofbirth','$hscresults','$sscresults','$courseenroll','$enrollingyear','$enrollingyear2')";
$result = mysqli_query($conn, $sql);
if($result)
{
	header("Location: login.php");
}
else
{
	echo "Error :".$sql;
}
?>