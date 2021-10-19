<!--
Into this file, we create a layout for registration page.
-->
<?php
include_once('header.php');
include_once('link.php');
?>

<div id="frmRegistration">
<form class="form-horizontal" action="registration_code.php" method="POST">
	<h1>User Registration</h1>
	<div class="form-group">
    <label class="control-label col-sm-2" for="firstname">First Name:</label>
    <div class="col-sm-6">
      <input type="text" name="firstname" class="form-control" id="firstname" placeholder="Enter Firstname">
    </div>
  </div>
  <div class="form-group">
    <label class="control-label col-sm-2" for="lastname">Last Name:</label>
    <div class="col-sm-6">
      <input type="text" name="lastname" class="form-control" id="lastname" placeholder="Enter Lastname">
    </div>
  </div>
  </div>
  <div class="form-group">
    <label class="control-label col-sm-2" for="email">Email:</label>
    <div class="col-sm-6">
      <input type="email" name="email" class="form-control" id="email" placeholder="Enter email">
    </div>
  </div>
  <div class="form-group">
    <label class="control-label col-sm-2" for="lastname">Gender:</label>
    <div class="col-sm-6">
      <label class="radio-inline"><input type="radio" name="gender" value="Male">Male</label>
	  <label class="radio-inline"><input type="radio" name="gender" value="Female">Female</label>
    </div>
  </div>
  <div class="form-group">
    <label class="control-label col-sm-2" for="mobileno">Mobile No:</label>
    <div class="col-sm-6">
      <input type="mobileno" name="mobileno" class="form-control" id="mobileno" placeholder="Enter mobileno">
     </div>
    </div>
  <div class="form-group">
    <label class="control-label col-sm-2" for="dateofbirth">Date Of Birth:</label>
    <div class="col-sm-6">
      <input type="dateofbirth" name="dateofbirth" class="form-control" id="dateofbirth" placeholder="Enter dateofbirth">
    </div>
     </div>
  <div class="form-group">
    <label class="control-label col-sm-2" for="hscresults">HSC results:</label>
    <div class="col-sm-6">
      <input type="hscresults" name="hscresults" class="form-control" id="hscresults" placeholder="Enter hsc results">
    </div>
     </div>
  <div class="form-group">
    <label class="control-label col-sm-2" for="sscresults">SSC results:</label>
    <div class="col-sm-6">
      <input type="sscresults" name="sscresults" class="form-control" id="sscresults" placeholder="Enter ssc results">
    </div>
    </div>
  <div class="form-group">
    <label class="control-label col-sm-2" for="courseenroll">Course Enroll:</label>
    <div class="col-sm-6">
      <label class="radio-inline"><input type="radio" name="courseenroll" value="CSE">CSE</label>
	  <label class="radio-inline"><input type="radio" name="courseenroll" value="EEE">EEE</label>
      <label class="radio-inline"><input type="radio" name="courseenroll" value="SE">SE</label>
    </div>
    </div>
  <div class="form-group">
    <label class="control-label col-sm-2" for="courseenroll">Course Enroll Year:</label>
    <div class="col-sm-6">
      <label class="radio-inline"><input type="radio" name="enrollyear" value="2021">2021</label>
	  <label class="radio-inline"><input type="radio" name="enrollyear" value="2022">2022</label>
      <label class="radio-inline"><input type="radio" name="enrollyear" value="2023">2023</label>
    </div>
    </div>
  <div class="form-group">
    <label class="control-label col-sm-2" for="courseenroll">Course Enroll Year:</label>
    <div class="col-sm-6">
      <label class="radio-inline"><input type="radio" name="enrollyear2" value="Summer">Summer</label>
	  <label class="radio-inline"><input type="radio" name="enrollyear2" value="Fall">Fall</label>
      <label class="radio-inline"><input type="radio" name="enrollyear2" value="Spring">Spring</label>
    </div>
  </div>
  <div class="form-group"> 
    <div class="col-sm-offset-2 col-sm-10">
      <button type="submit" name="create" class="btn btn-primary">Submit</button>
    </div>
  </div>
</form>
</div>