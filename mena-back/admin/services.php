<?php include("controllers/services-control.php");
session_start();
 	  if($_SESSION['id']==0)
	  {
	 header("location:index.html");
	  }
	  	  $i=1;

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
<input type="text" id="myInput" onkeyup="myFunction()" placeholder="Search..">
		<div class="md-form mb-4">
          <label data-error="wrong" data-success="right" for="defaultForm-pass">language</label>
           <select  id="lang" onchange="myFunction2()" name="lang" id="browser2" class="form-control validate">
    <option value="">All</option>
    <option value="ar"> ar</option>
    <option value="en"> en</option>
  </select>
        </div>
 <a href="" data-toggle="modal" data-target="#modalLoginForm"> <input type="button" value="add new item" class="add-btn">
</a>
 <a href="services-title.php"> <input type="button" value="services title" class="add-btn">
</a>
<table id="myTable">
<tr class="header">
    <th style="width: 40%;">id</th>
    <th style="width: 40%;">title</th>
    <th style="width: 25%;">sub-title</th>
    <th style="width: 25%;">details</th>
    <th style="width: 25%;">background image</th>
    <th style="width: 25%;">logo-1</th>
    <th style="width: 25%;">logo-2</th>
    <th style="width: 25%;">status</th>
    <th style="width: 25%;">language</th>
    <th style="width:40%;">Edit</th>
    <th style="width:60%;">Delete</th>
  </tr>
  <?php while($row=mysqli_fetch_array($query)){
	  ?>
  <tr>
  <td> <?php echo $i++;?> </td>
    <td><?php echo $row['item'];?></td>
	    <td><?php echo $row['subitem'];?></td>
	   	    <td> <a href="edit-services-details.php?id=<?php echo $row['id'];?>"> <input type="button" value="edit" class="add-btn"></a></td>

	    <td><img style="width:50px"<?php if($row['bg']!=''){?> src="../images/<?php echo $row['bg']?>" <?php }?>/></td>
      <td><img style="width:50px" <?php if($row['image1']!=''){?>src="../images/<?php  echo $row['image1']?>" <?php }?>/></td>
      <td><img style="width:50px"  <?php if($row['image2']!=''){?> src="../images/<?php echo $row['image2']?>" <?php }?>/></td>
     
    <td><?php echo $row['status'];?></td>
    <td><?php echo $row['lang'];?></td>
    <td><a href="edit-services.php?id=<?php echo $row['id'];?>"> <i class="fa fa-edit"> </i> </a> </td>
	<?php   if(mysqli_num_rows($query)>1){?>
		  		    <td><a href="services.php?id=<?php echo $row['id'];?>&del=delete" onClick="return confirm('are you want to delete user?')"> <i class="fa fa-trash"> </i> </a></td>
	<?php }?>
<?php  if(isset($_GET['del']))
		  {if(mysqli_num_rows($query)>1){
		          $query4=mysqli_query($conn,"delete from servicesitems  where id ='".$_GET['id']."'");
				  	$msg ="<script> alert('successfull deleted'); window.location.href='./services.php'</script>";
					echo mysqli_error($conn);
		  }
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
        <h4 class="modal-title w-100 font-weight-bold">add new item</h4>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body mx-3">
<div class="md-form mb-5">
          <label data-error="wrong" data-success="right" for="defaultForm-email">title</label>
          <input type="text" name="item" id="defaultForm-email" class="form-control validate">
        </div>
		<div class="md-form mb-5">
          <label data-error="wrong" data-success="right" for="defaultForm-email">sub-title</label>
          <input type="text" name="subitem" id="defaultForm-email" class="form-control validate">
        </div>
		  <div class="md-form mb-4">
          <label data-error="wrong" data-success="right" for="defaultForm-pass">logo-1 (recommanded 150 x 150)</label>
          <input type="file" name="uploadfile" id="defaultForm-pass" class="form-control validate">
        </div>
		<div class="md-form mb-4">
          <label data-error="wrong" data-success="right" for="defaultForm-pass">logo-2 (recommanded 150 x 150)</label>
          <input type="file" name="uploadfile2" id="defaultForm-pass" class="form-control validate">
        </div>
		<div class="md-form mb-4">
          <label data-error="wrong" data-success="right" for="defaultForm-pass">background image (recommanded 1800 x 1006)</label>
          <input type="file" name="uploadfile3" id="defaultForm-pass" class="form-control validate">
        </div>
		<div class="md-form mb-4">
          <label data-error="wrong" data-success="right" for="defaultForm-pass">status</label>
           <select name="status" id="browser2" class="form-control validate">
    <option value="on"> on</option>
    <option value="off"> off</option>
  </select>
        </div>
		<div class="md-form mb-4">
          <label data-error="wrong" data-success="right" for="defaultForm-pass">language</label>
           <select name="lang" id="browser2" class="form-control validate">
    <option value="ar"> ar</option>
    <option value="en"> en</option>
  </select>
        </div>
		
      </div>
      <div class="modal-footer d-flex justify-content-center">
        <button type="submit" name="upload" class="btn btn-default">Add</button>
      </div>
    </div>
	</form>
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
function myFunction2() {
  var input, filter, table, tr, td, i;
  input = document.getElementById("lang");
  filter = input.value.toUpperCase();
  table = document.getElementById("myTable");
  tr = table.getElementsByTagName("tr");
  for (i = 0; i < tr.length; i++) {
    td = tr[i].getElementsByTagName("td")[8];
    if (td) {
      if (td.innerHTML.toUpperCase().indexOf(filter) > -1) {
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