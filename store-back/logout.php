<?php
session_start();
$_SESSION = array(); 
session_unset();
session_destroy();


	 $_SESSION['username']=null;
	 $_SESSION['loginid']=null;
	   echo ("<script>location.href='./index.php'</script>");
exit(); 
?>