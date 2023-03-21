<?php
session_start();
$_SESSION = array(); 
session_unset();
session_destroy();


	 $_SESSION['email']=null;
	 $_SESSION['loginid']=null;
	 $_SESSION['fullname']=null;
	   echo ("<script>location.href='login.php'</script>");
exit(); 
?>