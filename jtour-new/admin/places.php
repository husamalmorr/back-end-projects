<?php include("controllers/places-control.php"); session_start();?>
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
<input type="search" id="myInput" onkeyup="myFunction()" placeholder="Search..">
 <a href="" data-toggle="modal" data-target="#modalLoginForm"> <input type="button" value="add Place" class="add-btn">
</a>

<table id="myTable">
<tr class="header">
      <th style="width: 10%;">Id</th>
    <th style="width: 25%;">Place Name</th>
    <th style="width: 25%;">City Name</th>
    <th style="width: 20%;">Image</th>
	<th style="width: 12%;">Type</th>
    <th style="width: 20%;">Edit</th>
    <th style="width:60%;">Delete</th>
  </tr>
   <?php while($row=mysqli_fetch_array($query)){
	  ?>
  <tr>
  <td><?php echo $row['id'];?></td>
    <td><?php echo $row['name'];?></td>
    <td><?php echo $row['cityname'];?></td>
	      <td><img style="width:100px" src="../public/<?php echo $row['image']?>"/></td>
    <td><?php echo $row['type'];?></td>

    <td><a href="edit-places.php?id=<?php echo $row['id'];?>"> <i class="fa fa-edit"> </i> </a> </td>
		  		    <td><a href="places.php?id=<?php echo $row['id'];?>&del=delete" onClick="return confirm('are you want to delete user?')"> <i class="fa fa-trash"> </i> </a></td>
<?php  if(isset($_GET['del']))
		  {
		          $query4=mysqli_query($conn,"delete from places  where id ='".$_GET['id']."'");
				  	$msg ="<script> alert('successfull deleted'); window.location.href='./places.php'</script>";
					echo mysqli_error($conn);
 echo $msg;
		  }?>
  </tr>
  <?php }?>
 	
</table>
</div>
    </div>
  </div>
</div>
<div class="modal fade" id="modalLoginForm" tabindex="-1" role="dialog" aria-labelledby="myModalLabel"
  aria-hidden="true">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
	<form method="post" action="" enctype="multipart/form-data">
      <div class="modal-header text-center">
        <h4 class="modal-title w-100 font-weight-bold">Add place</h4>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body mx-3">
        <div class="md-form mb-4">
          <label data-error="wrong" data-success="right" for="defaultForm-pass">Place Name</label>
          <input type="text" id="defaultForm-pass" name="pname" class="form-control validate">
        </div>
		 <div class="md-form mb-4">
		          <label data-error="wrong" data-success="right" for="defaultForm-pass">City Name</label>
		  <input list="browsers" name="cname" id="browser" class="form-control validate">
	
  <datalist id="browsers">
  <?php while($row4=mysqli_fetch_array($query4)){?>
    <option value="<?php echo $row4['name'];?>">
	  <?php }?>
  </datalist>

  </div>
  		 <div class="md-form mb-4">
		          <label data-error="wrong" data-success="right" for="defaultForm-pass">Type</label>
		  <input list="browsers2" name="type" id="browser2" class="form-control validate">
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
 <textarea id="defaultForm-pass"  name="info" class="form-control validate"> </textarea>        </div>
		  <div class="md-form mb-4">
          <label data-error="wrong" data-success="right" for="defaultForm-pass">Address</label>
          <input type="text" id="defaultForm-pass" name="address" class="form-control validate">
        </div>
		
      </div>
      <div class="modal-footer d-flex justify-content-center">
        <button type="submit" name="add" class="btn btn-default">Add</button>
      </div>
	  </form>
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
    td = tr[i].getElementsByTagName("td")[1];
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