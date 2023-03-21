<?php include("config.php");
$query=mysqli_query($conn,"select * from latesttitle where status='on' and lang='ar'");
$query2=mysqli_query($conn,"select * from coursesitems where status='on' and lang='ar' order by id DESC LIMIT 8");
$query3=mysqli_query($conn,"select * from coursesitems where status='on' and lang='ar'");
$query4=mysqli_query($conn,"select * from tracksitems where status='on' and lang='ar'");
$query5=mysqli_query($conn,"select * from category where status='on' and lang='ar'");
$num=mysqli_num_rows($query3);
$num2=mysqli_num_rows($query4);
$num3=mysqli_num_rows($query5);
$row=mysqli_fetch_array($query);
?>