<?php 

require('../includes/connection.php');
require('../includes/helpers.php');

$error = array();
if(isset($_POST['userprofile'])){
  
	$firstname 		       = sanitizer($_POST['firstname']);
	$lastname 	           = sanitizer($_POST['lastname']);

	$email 	               = $_POST['email'];
	
	$password 	           = SHA1($_POST['password']);
	$gender 	           = $_POST['gender'];
	
	$day			       = (int)$_POST['dd'];
	$month			       = (int)$_POST['mm'];
	$year			       = (int)$_POST['yyyy'];
	$dob			       = $year ."-". $month ."-". $day;
	
	$mobile                =$_POST['mobile'];
	$country               =$_POST['country'];
	$occupation            =sanitizer($_POST['occupation']);
	$relationship_status   =$_POST['relationship_status'];
	
	// check for duplicate email
	$query1 = "SELECT `email` FROM users WHERE `email`='$email'";
  $result = mysqli_query($db, $query1);
  if($result->num_rows > 0){
    $error['email'] = 'The email is already registered';
  }
  
  // check for duplicate phone number
	$query1 = "SELECT `mobile` FROM users WHERE `mobile`='$mobile'";
  $result = mysqli_query($db, $query1);
  if($result->num_rows > 0){
    $error['mobile'] = 'The number is already registered';
  }
	
  if($error){
     ?>    <script type="text/javascript">
                alert("Email and/or Phone Number already registered");
                window.location = "register.php";
                </script>
        <?php
   }else{
    
	// upload photo
	$photo = ""; $allowedExts = array("jpg","jpeg","png");
	if(isset($_FILES['photo'])){
		  if($_FILES['photo']['size'] > 0){
		   $photo = upload_manager();
		}
	}
	
   $photo_ext_value = substr($photo,-3);
   
	if(!in_array($photo_ext_value,$allowedExts)){
	        echo  "   
         			<script type='text/javascript'>
                     alert('$photo');
                   window.location = 'register.php';
                </script>
        ";

	}else{
	
	// insert inside the database
	$query = "INSERT INTO users
                              (firstname, lastname, email, password, gender, dob, mobile, country, occupation, photo, relationship)
                              VALUES ('{$firstname}','{$lastname}','{$email}','{$password}','{$gender}','{$dob}','{$mobile}','{$country}','{$occupation}','{$photo}','{$relationship_status}')";
                            if(mysqli_query($db,$query)){
							    ?>    <script type="text/javascript">
									alert("profile successfully created, please login to view your profile");
									window.location = "login.php";
									</script>
							<?php
							}
							else{ 
							  ?>    <script type="text/javascript">
									alert("There was an error in creating this profile");
									window.location = "register.php";
									</script>
							<?php
							}
	  
	    }
   }

}
?>