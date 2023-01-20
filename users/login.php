<?php 
require('session.php');

?>
<?php if(logged_in()){ ?>
          <script type="text/javascript">
            window.location = "index.php";
          </script>
    <?php
    }
	
	?>
	
	
<!DOCTYPE html>
<html lang="en">

<head>

  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <meta name="description" content="">
  <meta name="author" content="">

  <title>Login</title>

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

              <div class="login-section">
                <div class="p-5">
                  <div class="text-center">
                    <h4>LOGIN</h4>
                  </div>
                  <form class="user" role="form" action="processlogin.php" method="post">
                    <div class="form-group">
                        <input class="form-control form-control-user" placeholder="Email" name="email" type="email" value="" autofocus required>
						
                    </div>
                    <div class="form-group">
                        <input class="form-control form-control-user" placeholder="Password" name="password" type="password" value="" required>
                    </div>
                    
                    <button class="btn button-bg btn-user btn-block" type="submit" name="btnlogin">Login</button>
                    <hr>
                  <div class="text-center">
                    <a class="small" href="register.php">Create Your Profile!</a>
                  </div> 
                </form>
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









