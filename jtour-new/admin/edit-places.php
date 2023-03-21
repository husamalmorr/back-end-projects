<?php session_start();
 	  if($_SESSION['id']==0)
	  {
	 header("location:index.html");
	  }
	  include("controllers/places-control.php");

$id=$_GET['id'];
	$query=mysqli_query($conn,"select * from places where id='$id'");
	$row=mysqli_fetch_array($query);
if (isset($_POST['save'])) {
 
    $filename = $_FILES["uploadfile"]["name"];
    $tempname = $_FILES["uploadfile"]["tmp_name"];
	$pname = $_POST['pname'];
    $cname = $_POST['cname'];
    $type = $_POST['type'];
    $address = $_POST['address'];
    $info = $_POST['info'];
  
    $folder = "../public/" . $filename;
 if(empty($filename)){
	     $sql = "update places set name='$pname',cityname='$cname',type='$type',location='$address',details='$info' where id='$id'";

    // Execute query
    mysqli_query($conn, $sql);
	if(mysqli_query($conn, $sql))
	  echo "<h3>  place without photo updated successfully!</h3>";
	  mysqli_error($conn);
 } else {
    // Get all the submitted data from the form
 		    $sql2 = "update places set name='$pname',cityname='$cname',type='$type',image='$filename',location='$address',details='$info' where id='$id'";

    // Execute query
    mysqli_query($conn, $sql2);
		  mysqli_error($conn);

	  echo "<h3>  place updated successfully!</h3>";
 
 
    // Now let's move the uploaded image into the folder: image
    if (move_uploaded_file($tempname, $folder)) {

      
    } else {
        echo "<h3>  Failed to upload image!</h3>";
    }
}
}
	  ?>
<html>
  <head>
    <meta charset="utf-8" />
    <meta name="viewport" content="initial-scale=1, width=device-width" />
    <title></title>
    <meta name="description" content="" />
<script src="jquery.min.js" integrity="sha512-894YE6QWD5I59HgZOGReFYm4dnWc1Qt5NtvYSaNcOP+u1T9qYdvdihz0PPSiiqn/+/3e7Jo4EaG7TubfWGUrMQ==" crossorigin="anonymous" referrerpolicy="no-referrer"></script>
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
<link rel="stylesheet" href="https://cdn.datatables.net/1.10.2/css/jquery.dataTables.min.css">
<script type="text/javascript" src="https://cdn.datatables.net/1.10.2/js/jquery.dataTables.min.js"></script>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" />
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css" />

    <link rel="stylesheet" href="./style.css" />
    <link rel="stylesheet" href="./main.js" />

    <link
      rel="stylesheet"
      href="https://fonts.googleapis.com/css2?family=Poppins:wght@400;500;600;700&display=swap"
    />
  </head>
  <body>
<div id="viewport">
  <!-- Sidebar -->
<?php include("controllers/sidebar.php");?>
  <!-- Content -->
  <div id="content">
    <nav class="navbar navbar-default">
      <div class="container-fluid">
        <ul class="nav navbar-nav navbar-right">
          <li>
            <a href="#"><i class="zmdi zmdi-notifications text-danger"></i>
            </a>
          </li>
          <li><a href="#"><?php echo $_SESSION['name'];?></a></li>
        </ul>
      </div>
    </nav>
    <div class="container-fluid">

<div>
  <div class="modal-dialog" role="document">
    <div class="modal-content">
	<form method="post" enctype="multipart/form-data">
      <div class="modal-header text-center">
        <h4 class="modal-title w-100 font-weight-bold">Edit place</h4>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body mx-3">
        <div class="md-form mb-4">
          <label data-error="wrong" data-success="right" for="defaultForm-pass">Place Name</label>
          <input type="text" id="defaultForm-pass" value="<?php echo $row['name'];?>" name="pname" class="form-control validate">
        </div>
		 <div class="md-form mb-4">
		          <label data-error="wrong" data-success="right" for="defaultForm-pass">City Name</label>
		  <input list="browsers" name="cname" value="<?php echo $row['cityname'];?>" id="browser" class="form-control validate">
	
  <datalist id="browsers">
  <?php while($row4=mysqli_fetch_array($query4)){?>
    <option value="<?php echo $row4['name'];?>">
	  <?php }?>
  </datalist>

  </div>
  		 <div class="md-form mb-4">
		          <label data-error="wrong" data-success="right" for="defaultForm-pass">Type</label>
		  <input list="browsers2" name="type" value="<?php echo $row['type'];?>" id="browser2" class="form-control validate">
  <datalist id="browsers2">
    <option value="Tourist">
    <option value="Religous">
    <option value="Cafe">
    <option value="Resturants">
  </datalist>
  </div>
		  <div class="md-form mb-4">
          <label data-error="wrong" data-success="right" for="defaultForm-pass">Image</label>
          <input type="file" name="uploadfile" id="defaultForm-pass" class="form-control validate">
        </div>
		   <div class="md-form mb-4">
          <label data-error="wrong" data-success="right" for="defaultForm-pass">Info</label>
 <input maxlength="1000" value="<?php echo $row['details'];?>" id="defaultForm-pass"  name="info" class="form-control validate">       </div>
		  <div class="md-form mb-4">
          <label data-error="wrong" data-success="right" for="defaultForm-pass">Address</label>
          <input type="text" id="defaultForm-pass" name="address"value="<?php echo $row['location'];?>" class="form-control validate">
        </div>
		
      </div>
      <div class="modal-footer d-flex justify-content-center">
        <button type="submit" name="save" class="btn btn-default">save</button>
      </div>
	  </form>
    </div>
  </div>
</div>




</div>

    </div>
  </div>
</div>
<script>
function myFunction() {
  // Declare variables
  var input, filter, table, tr, td, i, txtValue;
  input = document.getElementById("myInput");
  filter = input.value.toUpperCase();
  table = document.getElementById("myTable");
  tr = table.getElementsByTagName("tr");

  // Loop through all table rows, and hide those who don't match the search query
  for (i = 0; i < tr.length; i++) {
    td = tr[i].getElementsByTagName("td")[0];
    if (td) {
      txtValue = td.textContent || td.innerText;
      if (txtValue.toUpperCase().indexOf(filter) > -1) {
        tr[i].style.display = "";
      } else {
        tr[i].style.display = "none";
      }
    }
  }
}
</script>
</body>
</html>