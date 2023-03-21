<?php
session_start();
$_SESSION = array(); 
session_unset();
session_destroy();


	 $_SESSION['name']=null;
	   echo ("<script>location.href='../index.html'</script>");
exit(); # NOTE THE EXIT
?>