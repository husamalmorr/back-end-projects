<?php
define('DB_SERVER','localhost');
define('DB_USER','id15436184_root');
define('DB_PASS' ,'123456Aa@Iso@2021');
define('DB_NAME', 'id15436184_cms');
$con = mysqli_connect(DB_SERVER,DB_USER,DB_PASS,DB_NAME);
// Check connection
if (mysqli_connect_errno())
{
 echo "Failed to connect to MySQL: " . mysqli_connect_error();
}
?>