<?php include("config.php");
if (isset($_POST['send'])) {
 
 $name = $_POST['name'];
 $email = $_POST['email'];
    $phone = $_POST['phone'];
    $subject = $_POST['subject'];
    $message = $_POST['message'];
    $status = 'hold';
    // Get all the submitted data from the form
    $sql = "INSERT INTO contactus (name,email,phone,subject,message,status) VALUES ('$name','$email','$phone','$subject','$message','$status')";
  				$msg ="<script>window.location.href='./thank-you.php'</script>";
echo $msg;
    // Execute query
    mysqli_query($conn, $sql);
	
}
?>