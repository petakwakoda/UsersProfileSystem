<?php 
require('session.php');

if(logged_in()){ ?>
	  <script type="text/javascript">
		window.location = "index.php";
	  </script>
    <?php 
    }
include'../includes/helpers.php';
include'countries.php';

?>
<!DOCTYPE html>
<html lang="en">

<head>

  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <meta name="description" content="">
  <meta name="author" content="">

  <title>Create Profile</title>

  <!-- Custom fonts for this template-->
  <link href="../vendor/fontawesome-free/css/all.min.css" rel="stylesheet" type="text/css">
  <link href="https://fonts.googleapis.com/css?family=Nunito:200,200i,300,300i,400,400i,600,600i,700,700i,800,800i,900,900i" rel="stylesheet">

  <!-- Custom styles for this template-->
  <link href="../css/sb-admin-2.min.css" rel="stylesheet">
  <link href="../css/custom.css" rel="stylesheet">

</head>

<body class="bg-gradient-success">

  <div class="container">

    <!-- Outer Row -->
    <div class="row justify-content-center">

      <div class="col-xl-10 col-lg-12 col-md-9">

        <div class="card o-hidden border-0 shadow-lg my-5">
          <div class="card-body p-0">
            <!-- Nested Row within Card Body -->
            <div class="row shadow">
              <!--<div class="col-lg-6 d-none d-lg-block bg-login-image"></div>-->
              <div class="col-lg-12">
                <div class="p-5">
				 
                  <div class="text-center">
                    <h1 class="h4 text-gray-900 mb-4">Create Your Profile</h1>
                  </div>
               <form class="user" role="form" action="process_registration.php" method="post" enctype='multipart/form-data'>
                    

              <div class="form-group row text-left">
                <div class="col-sm-3" style="padding-top: 5px;">
                 First Name:
                </div>
                <div class="col-sm-9">
                  <input class="form-control" type="text" placeholder="First Name" name="firstname" value="" required>
                </div>
              </div>
              <div class="form-group row text-left">
                <div class="col-sm-3" style="padding-top: 5px;">
                 Last Name:
                </div>
                <div class="col-sm-9">
                  <input class="form-control" type="text" placeholder="Last Name" name="lastname" value="" required>
                </div>
              </div>
             
              <div class="form-group row text-left">
                <div class="col-sm-3" style="padding-top: 5px;">
                 Password:
                </div>
                <div class="col-sm-9">
                  <input type="password" class="form-control" placeholder="Password" name="password" value="" required>
                </div>
              </div>
              <div class="form-group row text-left">
                <div class="col-sm-3" style="padding-top: 5px;">
                 Email:
                </div>
                <div class="col-sm-9">
                  <input type="email" class="form-control" placeholder="Email" name="email" value="" required>
                </div>
              </div>
			   <div class="form-group row text-left">
                <div class="col-sm-3" style="padding-top: 5px;">
                 Gender:
                </div>
                <div class="col-sm-9">
                  <select class='form-control' name='gender' required>
                    <option value="">Select Gender</option>
                    <option value="Male">Male</option>
                    <option value="Female">Female</option>
                  </select>
                </div>
              </div>
              <div class="form-group row text-left">
                <div class="col-sm-3" style="padding-top: 5px;">
                 Data Of Birth:
                </div>
                <div class="col-sm-9">
                    <select name='dd' required>
					<option value=''>day</option>
					<?php fill_series(); ?>
					</select>
					<select name='mm' required>
					<option value=''>Month</option>
					<?php fill_series(1,12); ?>
					</select>
					<select name='yyyy' required>
					<option value=''>Year</option>
					<?php fill_series(1985,2004,2); ?>
					</select>
                </div>
              </div>
              <div class="form-group row text-left">
                <div class="col-sm-3" style="padding-top: 5px;">
                 Country:
                </div>
                <div class="col-sm-9">
				   <select class="form-control" name="country" required>
				   <option value="">Select Country</option>
					<?php
					foreach($countries as $key => $value) {
					?>
					<option value="<?= $key ?>" title="<?= $value ?>"><?= $value ?></option>
					<?php
					}
					?>
				   </select>
                </div>
              </div>
              <div class="form-group row text-left">
                <div class="col-sm-3" style="padding-top: 5px;">
                 Phone Number:
                </div>
                <div class="col-sm-9">
                  <input class="form-control" type="tel" placeholder="111-222-3333" name="mobile" value="" pattern="[0-9]{3}-[0-9]{3}-[0-9]{4}" required>
                </div>
              </div>
			  <div class="form-group row text-left">
                <div class="col-sm-3" style="padding-top: 5px;">
                 Photo:
                </div>
                <div class="col-sm-9">
                  <input class="form-control" type="file" name="photo" value="" required>
                </div>
              </div>
              <div class="form-group row text-left">
                <div class="col-sm-3" style="padding-top: 5px;">
                 Occupation:
                </div>
                <div class="col-sm-9">
                  <input class="form-control" type="text" placeholder="e.g student, lawyer, unemployed" name="occupation" value="" required>
                </div>
              </div>
              <div class="form-group row text-left">
                <div class="col-sm-3" style="padding-top: 5px;">
                 Relationship Status:
                </div>
                <div class="col-sm-9">
                  <select class='form-control' name="relationship_status" required>
				   <option value="">select</option>
				   <option value="single">Single</option>
				   <option value="married">Married</option>
				  </select>
                </div>
              </div>
             
              <hr>
                <input type='hidden' name='userprofile' value='1'>
                <button type="submit" class="btn button-bg btn-block">Create Profile</button> 
                </form>
                </div>
              </div>
            </div>
          </div>
        </div>

      </div>

    </div>

  </div>

  <!-- Bootstrap core JavaScript-->
  <script src="../vendor/jquery/jquery.min.js"></script>
  <script src="../vendor/bootstrap/js/bootstrap.bundle.min.js"></script>

  <!-- Core plugin JavaScript-->
  <script src="../vendor/jquery-easing/jquery.easing.min.js"></script>

  <!-- Custom scripts for all pages-->
  <script src="../js/sb-admin-2.min.js"></script>

</body>

</html>
