<?php session_start();
 	  if($_SESSION['id']==0)
	  {
	 header("location:index.html");
	  }
	  include("controllers/config.php");

$id=$_GET['id'];
	$query2=mysqli_query($conn,"select * from partners where id='$id'");
	$row2=mysqli_fetch_array($query2);
if (isset($_POST['save'])) {
     $filename = $_FILES["uploadfile"]["name"];
    $tempname = $_FILES["uploadfile"]["tmp_name"];
    $status = $_POST['status'];
    $lang = $_POST['lang'];
    $folder = "../images/" . $filename;
	
 		    $sql = "update partners set image='$filename',status='$status',lang='$lang' where id='$id'";
			    mysqli_query($conn, $sql);

			 if (move_uploaded_file($tempname, $folder)) {
				$msg ="<script> alert('successfull updated'); window.location.href='./partners.php'</script>";
echo $msg;
    } else {
        echo "<h3>  Failed to upload image!</h3>";
    }
    // Execute query
 
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
          <li><a href="#">admin</a></li>
        </ul>
      </div>
    </nav>
    <div class="container-fluid">

<div>
  <div class="modal-dialog" role="document">
    <div class="modal-content">
	<form method="post" enctype="multipart/form-data"> 
      <div class="modal-header text-center">
        <h4 class="modal-title w-100 font-weight-bold">Edit partner</h4>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
	
      <div class="modal-body mx-3">

        <div class="md-form mb-4">
          <label data-error="wrong" data-success="right" for="defaultForm-pass">image (recommanded 150 x 150)</label>
          <input type="file" id="defaultForm-pass" name="uploadfile" class="form-control validate" required>
        </div>
		<div class="md-form mb-4">
          <label data-error="wrong" data-success="right" for="defaultForm-pass">status</label>
 <select name="status" id="brow2ser2" class="form-control validate">
    <option value="<?php echo $row2['status'];?>"> <?php echo $row2['status'];?> </option>
	<?php if($row2['status']=='on'){?>
    <option value="off"> off</option>
	<?php }?>
	<?php if($row2['status']=='off'){?>
    <option value="on"> on</option>
	<?php }?>
  </select>        </div>
	 <div class="md-form mb-4">
		          <label data-error="wrong" data-success="right" for="defaultForm-pass">Language</label>
		  <select name="lang" id="brow2ser2" class="form-control validate">
    <option value="<?php echo $row2['lang'];?>"> <?php echo $row2['lang'];?> </option>
	<?php if($row2['lang']=='ar'){?>
    <option value="en"> en</option>
	<?php }?>
	<?php if($row2['lang']=='en'){?>
    <option value="ar"> ar</option>
	<?php }?>
  </select>
  </div>
      </div>
	
      <div class="modal-footer d-flex justify-content-center">
        <button type="submit" name="save" class="btn btn-default">Save</button>
      </div>
    </div>
	</form>
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

  // Loop through all table row2s, and hide those who don't match the search query
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