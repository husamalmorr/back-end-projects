<?php include("controllers/footer-contact-control.php");
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
<table id="myTable">
<tr class="header">
      <th style="width: 20%;">Id</th>
    <th style="width: 40%;">email</th>
	    <th style="width: 25%;">Opening Hours</th>

    <th style="width: 25%;">phone No 1</th>
    <th style="width: 25%;">phone No 2</th>
    <th style="width: 25%;">facebook</th>
    <th style="width: 25%;">instagram</th>
    <th style="width: 25%;">linkedin</th>
    <th style="width: 25%;">location name</th>
    <th style="width: 25%;">status</th>
    <th style="width: 25%;">language</th>
    <th style="width:40%;">Edit</th>
  </tr>
  <?php while($row=mysqli_fetch_array($query)){
	  ?>
  <tr>
  <td> <?php echo $i++;?> </td>
    <td><?php echo $row['email'];?></td>
	 <td><?php echo $row['workinghours'];?></td>
    <td><?php echo $row['phone1'];?></td>
    <td><?php echo $row['phone2'];?></td>
    <td><?php echo $row['fb'];?></td>
    <td><?php echo $row['insta'];?></td>
    <td><?php echo $row['link'];?></td>
    <td><?php echo $row['locationname'];?></td>

    <td><?php echo $row['status'];?></td>
    <td><?php echo $row['lang'];?></td>
    <td><a href="edit-footer-contact.php?id=<?php echo $row['id'];?>"> <i class="fa fa-edit"> </i> </a> </td>
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
        <h4 class="modal-title w-100 font-weight-bold">add new footer contact</h4>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body mx-3">
<div class="md-form mb-5">
          <label data-error="wrong" data-success="right" for="defaultForm-email">email</label>
          <input type="email" name="email" id="defaultForm-email" class="form-control validate">
        </div>
		<div class="md-form mb-5">
          <label>phone No 1</label>
          <input type="email" name="phone1" id="defaultForm-email" class="form-control validate">
        </div>
		<div class="md-form mb-5">
          <label>phone No 2</label>
          <input type="email" name="phone2" id="defaultForm-email" class="form-control validate">
        </div>
		<div class="md-form mb-5">
          <label>phone No 3</label>
          <input type="email" name="phone3" id="defaultForm-email" class="form-control validate">
        </div>
			<div class="md-form mb-5">
          <label>facebook</label>
          <input type="email" name="fb" id="defaultForm-email" class="form-control validate">
        </div>
			<div class="md-form mb-5">
          <label>instagram</label>
          <input type="email" name="insta" id="defaultForm-email" class="form-control validate">
        </div>
			<div class="md-form mb-5">
          <label>linkedin</label>
          <input type="text" name="link" id="defaultForm-email" class="form-control validate">
        </div>
		
		<div class="md-form mb-4">
          <label data-error="wrong" data-success="right" for="defaultForm-pass">satus</label>
           <select name="status" id="browser2" class="form-control validate">
    <option value="on"> on</option>
    <option value="off"> off</option>
  </select>
        </div>
		<div class="md-form mb-4">
          <label data-error="wrong" data-success="right" for="defaultForm-pass">sanguage</label>
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
    td = tr[i].getElementsByTagName("td")[10];
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