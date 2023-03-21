<?php include("config.php");
$category=['IT','Busniess','Languages','Engineering','Education'];
$query=mysqli_query($conn,"select * from trackstitle where status='on' and lang='en'");
$query2=mysqli_query($conn,"select distinct * from tracksitems where status='on' and lang='en'");
$query3=mysqli_query($conn,"select * from tracksitems where status='on' and lang='en' and category='$category[0]'");
$query4=mysqli_query($conn,"select * from tracksitems where status='on' and lang='en' and category='$category[1]'");
$query5=mysqli_query($conn,"select * from tracksitems where status='on' and lang='en' and category='$category[2]'");
$query6=mysqli_query($conn,"select * from tracksitems where status='on' and lang='en' and category='$category[3]'");
$query7=mysqli_query($conn,"select * from tracksitems where status='on' and lang='en' and category='$category[4]'");

$row=mysqli_fetch_array($query);
?>