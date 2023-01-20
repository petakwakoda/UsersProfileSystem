<?php
include'../includes/topbar.php';
?>
		 <div class="centered">
			 <img class="img-profile-main rounded-circle" src="../photos/<?php echo $_SESSION['PHOTO'] ?>">   
			</div>
		  
			<div class='profile-info'>
			  <div><span class="profile-field">Firstname:</span>  <span class="profile-value"><?php echo $_SESSION['FIRST_NAME'] ?></span></div>
			  <div><span class="profile-field">Lastname:</span> <span class="profile-value"><?php echo $_SESSION['LAST_NAME'] ?></span></div>
			  <div> <span class="profile-field">DOB:</span>  <span class="profile-value"><?php echo $_SESSION['DOB'] ?></span></div>
			  <div> <span class="profile-field">Gender:</span>  <span class="profile-value"><?php echo $_SESSION['GENDER'] ?></span></div>
			  <div><span class="profile-field">Nationality:</span>  <span class="profile-value"><?php echo $_SESSION['COUNTRY'] ?></span></div>
			  <div><span class="profile-field">Mobile:</span>  <span class="profile-value"><?php echo $_SESSION['PHONE_NUMBER'] ?></span></div>
			  <div><span class="profile-field">Occupation:</span>  <span class="profile-value"><?php echo $_SESSION['OCCUPATION'] ?></span></div>
			  <div><span class="profile-field">Relationship:</span>  <span class="profile-value"><?php echo $_SESSION['RELATIONSHIP'] ?></span></div>
			</div>
			
<?php 
 include'../includes/footer.php';
?>