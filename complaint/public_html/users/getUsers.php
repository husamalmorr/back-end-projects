<?php
include('includes/config.php');
if(!empty($_POST["catid"])) 
{
 $id=intval($_POST['catid']);
 if(!is_numeric($id)){
 
 	echo htmlentities("invalid industryid");exit;
 }
 else{
 $stmt = mysqli_query($con,"SELECT studentid,studentname FROM students WHERE studentid ='$id'");
 ?><option selected="selected"> </option><?php
 while($row=mysqli_fetch_array($stmt))
 {
  ?>
  <option value="<?php echo htmlentities($row['studentid']); ?>"><?php echo htmlentities($row['studentid']); ?></option>

  <?php
 }
}

}
?>