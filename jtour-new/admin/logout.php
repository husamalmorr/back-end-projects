<?php
session_start();
$_SESSION = array(); 
session_unset();
session_destroy();


	 $_SESSION['name']=null;
	 $_SESSION['id']=null;
	   echo ("<script>location.href='index.html'</script>");
exit(); 
?>