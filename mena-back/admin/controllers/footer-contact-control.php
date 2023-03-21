<?php 
include("config.php");
	$query=mysqli_query($conn,"select * from footercontact");
	$num=mysqli_num_rows($query);

if (isset($_POST['upload'])) {
 
 $email = $_POST['email'];
    $phone1 = $_POST['phone1'];
    $phone2 = $_POST['phone2'];
    $fb = $_POST['fb'];
    $insta = $_POST['insta'];
    $link = $_POST['link'];
    $status = $_POST['status'];
    $lang = $_POST['lang'];
	
 
    // Get all the submitted data from the form
    $sql = "INSERT INTO footercontact (email,phone1,phone2,fb,insta,link,status,lang) VALUES ('$email','$phone1','$phone2','$fb','$insta','$link','$status','$lang')";
  				$msg ="<script> alert('successfull inserted'); window.location.href='./footer-contact.php'</script>";
echo $msg;
    // Execute query
    mysqli_query($conn, $sql);
}
?>
