<?php include("config.php");
$id=urldecode($_GET['id']);

$query=mysqli_query($conn,"select * from coursesitems where id='$id' and status='on' and lang='ar'");
$query2=mysqli_query($conn,"select * from coursesitems where id !='$id' and status='on' and lang='ar' LIMIT 3");
$query3=mysqli_query($conn,"select distinct curriculums.description from curriculums inner join coursesitems on curriculums.item=coursesitems.item where curriculums.status='on' and curriculums.lang='ar' and coursesitems.id='$id'");

$row=mysqli_fetch_array($query);
$row3=mysqli_fetch_array($query3);
?>