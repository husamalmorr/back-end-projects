<?php include("controllers/user-control.php"); session_start();
 	  if($_SESSION['id']==0)
	  {
	 header("location:index.html");
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
<input type="search" id="myInput" onkeyup="myFunction()" placeholder="Search..">
 <a href="" data-toggle="modal" data-target="#modalLoginForm"> <input type="button" value="add user" class="add-btn">
</a>


<table id="myTable">
<tr class="header">
      <th style="width: 20%;">Id</th>
    <th style="width: 40%;">Name</th>
    <th style="width: 25%;">Email</th>
    <th style="width:40%;">Edit</th>
    <th style="width:60%;">Delete</th>
  </tr>
  <?php while($row=mysqli_fetch_array($query)){
	  ?>
  <tr>
  <td name="id" > <?php echo $row['id'];?> </td>
    <td><?php echo $row['fullname'];?></td>
    <td><?php echo $row['email'];?></td>
    <td><a href="edit-user.php?id=<?php echo $row['id'];?>"> <i class="fa fa-edit"> </i> </a> </td>
		    <td>
			<a href="users.php?id=<?php echo $row['id'];?>&del=delete" onClick="return confirm('are you want to delete user?')"> <i class="fa fa-trash"> </i> </a>
			</td>
<?php  if(isset($_GET['del']))
		  {
		          $query4=mysqli_query($conn,"delete from users  where id ='".$_GET['id']."'");
				  	$msg ="<script> alert('successfull deleted'); window.location.href='./users.php'</script>";
					echo mysqli_error($conn);
 echo $msg;
		  }?>
  </tr>
  <?php }?> 
</table>


</div>
<div class="modal fade" id="modalLoginForm" tabindex="-1" role="dialog" aria-labelledby="myModalLabel"
  aria-hidden="true">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
	<form method="post" action="controllers/user-control.php">
      <div class="modal-header text-center">
        <h4 class="modal-title w-100 font-weight-bold">Add user</h4>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body mx-3">
        <div class="md-form mb-5">
          <label data-error="wrong" data-success="right" for="defaultForm-email">Name</label>
          <input type="text" id="defaultForm-email" name="name" class="form-control validate">
        </div>

        <div class="md-form mb-4">
          <label data-error="wrong" data-success="right" for="defaultForm-pass">Email</label>
          <input type="email" id="defaultForm-pass" name="email" class="form-control validate">
        </div>
		<div class="md-form mb-4">
          <label data-error="wrong" data-success="right" for="defaultForm-pass">Password</label>
          <input type="password" id="defaultForm-pass" name="password" class="form-control validate">
        </div>

      </div>
      <div class="modal-footer d-flex justify-content-center">
        <button  type="submit" name="submit" class="btn btn-default">Add</button>
      </div>
    </div>
	</form>
  </div>
</div>
<div class="modal fade" id="modalLoginForm2" tabindex="-1" role="dialog" aria-labelledby="myModalLabel"
  aria-hidden="true">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
	<form method="post" action="controllers/user-control.php"> 
      <div class="modal-header text-center">
        <h4 class="modal-title w-100 font-weight-bold">Edit user</h4>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
	
      <div class="modal-body mx-3">
 
        <div class="md-form mb-5">
          <label data-error="wrong" data-success="right" for="defaultForm-email">Name</label>
          <input type="email" id="defaultForm-email" name="name" value="<?php echo $row3['fullname'];?>" class="form-control validate">
        </div>

        <div class="md-form mb-4">
          <label data-error="wrong" data-success="right" for="defaultForm-pass">Email</label>
          <input type="email" id="defaultForm-pass" name="email" value="<?php echo $row3['email'];?>" class="form-control validate">
        </div>
		<div class="md-form mb-4">
          <label data-error="wrong" data-success="right" for="defaultForm-pass">Password</label>
          <input type="password" id="defaultForm-pass" name="password" class="form-control validate">
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