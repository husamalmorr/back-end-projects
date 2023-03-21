<?php include("config.php");
if (isset($_POST['send2'])) {
 
 $name = $_POST['name'];
 $email = $_POST['email'];
    $phone = $_POST['phone'];
    $message = $_POST['message'];
	   $filename = $_FILES["uploadfile"]["name"];
    $tempname = $_FILES["uploadfile"]["tmp_name"];
	   $folder = "./files/" . $filename;
    // Get all the submitted data from the form
    $sql = "INSERT INTO career(name,email,phone,file,message) VALUES ('$name','$email','$phone','$filename','$message')";
		 if (move_uploaded_file($tempname, $folder)) {
       // echo "<h3>  Image uploaded successfully!</h3>";
    } else {
        echo "<h3>  Failed to upload image!</h3>";
    }
	 mysqli_query($conn, $sql);
	 
  				$msg ="<script>window.location.href='./thank-you.php'</script>";
echo $msg;
    // Execute query
   
	
}
?>