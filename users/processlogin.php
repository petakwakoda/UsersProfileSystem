<?php

require('../includes/connection.php');
require('../includes/helpers.php');
require('session.php');

if (isset($_POST['btnlogin'])) {


  $email = $_POST['email'];
  $pass = SHA1($_POST['password']);

//create sql statement             
        $sql = "SELECT * FROM users WHERE `email`='$email' AND `password`='$pass' LIMIT 1";
        
        $result = $db->query($sql);

        if ($result){
           
        //IF theres a result
            if ( $result->num_rows > 0) {
                //store the result to a array and passed to variable user
                $user  = mysqli_fetch_array($result);
				
                //fill the result to session variable
                $_SESSION['ID']  = $user['id']; 
                $_SESSION['FIRST_NAME'] = $user['firstname']; 
                $_SESSION['LAST_NAME']  =  $user['lastname'];  
                $_SESSION['GENDER']  =  $user['gender'];
                $_SESSION['DOB']  =  reorder_dob($user['dob']);
                $_SESSION['PHONE_NUMBER']  =  $user['mobile'];
                $_SESSION['COUNTRY']  =  $user['country'];
                $_SESSION['PHOTO']  =  $user['photo']; 
                $_SESSION['OCCUPATION']  =  $user['occupation']; 
                $_SESSION['RELATIONSHIP']  =  $user['relationship'];

        //Redirect to the user profile page
		 header('location: index.php');
        
            } else {
            //IF there is no result
              ?>
                <script type="text/javascript">
                alert("Invalid email or password");
                window.location = "login.php";
                </script>
              <?php

            }

         } else {
		    ?>  <script type="text/javascript">
					alert("An error has occured in the system, please try again later");
					window.location = "login.php";
					</script>
			<?php
        }
        
          
} 
?>