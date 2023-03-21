<?php
define('DB_SERVER','localhost');
define('DB_USER','id17897341_dbmofkra');
define('DB_PASS' ,'Aa123456@@@@');
define('DB_NAME', 'id17897341_mofkra');
define('TIMEZONE', 'Asia/Amman');

$con = mysqli_connect(DB_SERVER,DB_USER,DB_PASS,DB_NAME);
// Check connection
if (mysqli_connect_errno())
{
 echo "Failed to connect to MySQL: " . mysqli_connect_error();
}
?>