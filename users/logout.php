<?php

session_start();

// Unset all the session variables
unset($_SESSION['ID']);
unset($_SESSION['FIRST_NAME']);
unset($_SESSION['LAST_NAME']);
unset($_SESSION['GENDER']);
unset($_SESSION['DOB']);
unset($_SESSION['PHONE_NUMBER']);
unset($_SESSION['COUNTRY']);
unset($_SESSION['PHOTO']);
unset($_SESSION['OCCUPATION']);
unset($_SESSION['RELATIONSHIP']);
?>
<script type="text/javascript">
    window.location = "login.php";
</script>