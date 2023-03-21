<?php include("controllers/navbar-control.php"); session_start();
 	  if($_SESSION['id']==0)
	  {
	 header("location:index.html");
	  }
	  if(isset($_POST['save'])){
	$item=$_POST['item'];
	$id=$_GET['id'];
	$link=$_POST['link'];
	$status=$_POST['status'];
	$lang=$_POST['lang'];
							$sql2=mysqli_query($conn,"update navbar set item ='$item',link='$link',status='$status',lang='$lang' where id='$id'");
  if($sql2)
  {
	$msg ="<script> alert('successfull updated'); window.location.href='./navbar.php'</script>";
  echo $msg;
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
          <li><a href="#">admin</a></li>
        </ul>
      </div>
    </nav>
    <div class="container-fluid">

<div>
  <div class="modal-dialog" role="document">
    <div class="modal-content">
	<form method="post"> 
      <div class="modal-header text-center">
        <h4 class="modal-title w-100 font-weight-bold">Edit navbar</h4>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
	
      <div class="modal-body mx-3">
 
        <div class="md-form mb-5">
          <label data-error="wrong" data-success="right" for="defaultForm-email">item</label>
          <input type="text" id="defaultForm-email" name="item" value="<?php echo $row3['item'];?>" class="form-control validate" required>
        </div>

        <div class="md-form mb-4">
          <label data-error="wrong" data-success="right" for="defaultForm-pass">link</label>
          <input type="text" id="defaultForm-pass" name="link" value="<?php echo $row3['link'];?>" class="form-control validate" required>
        </div>
		<div class="md-form mb-4">
          <label data-error="wrong" data-success="right" for="defaultForm-pass">status</label>
 <select name="status" id="browser2" class="form-control validate">
    <option value="<?php echo $row3['status'];?>"> <?php echo $row3['status'];?> </option>
	<?php if($row3['status']=='on'){?>
    <option value="off"> off</option>
	<?php }?>
	<?php if($row3['status']=='off'){?>
    <option value="on"> on</option>
	<?php }?>
  </select>        </div>
			 <div class="md-form mb-4">
		          <label data-error="wrong" data-success="right" for="defaultForm-pass">Language</label>
		  <select name="lang" id="browser2" class="form-control validate">
    <option value="<?php echo $row3['lang'];?>"> <?php echo $row3['lang'];?> </option>
	<?php if($row3['lang']=='ar'){?>
    <option value="en"> en</option>
	<?php }?>
	<?php if($row3['lang']=='en'){?>
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