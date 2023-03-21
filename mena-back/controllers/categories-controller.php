<?php include("config.php");
$track=urldecode($_GET['track']);

$query=mysqli_query($conn,"select * from coursesitems where track='$track' and status='on' and lang='ar'");
$query2=mysqli_query($conn,"select * from coursesitems where track='$track' and status='on' and lang='ar'");
$query3=mysqli_query($conn,"select * from tracksitems where item='$track' and status='on' and lang='ar'");
$row3=mysqli_fetch_array($query3);
?>