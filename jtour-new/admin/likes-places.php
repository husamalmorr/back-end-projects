<?php include("controllers/likes-places-control.php");
session_start();
 	  if($_SESSION['id']==0)
	  {
	 header("location:index.html");
	  }?>
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


<table id="myTable">
<tr class="header">
    <th style="width: 25%;">Place Name</th>
    <th style="width: 25%;">City Name</th>
    <th style="width: 20%;">Image</th>
	<th style="width: 12%;">Type</th>
    <th style="width: 20%;">Likes</th>
  </tr>
   <?php while($row=mysqli_fetch_array($query)){
	  ?>
  <tr>
    <td><?php echo $row['placename'];?></td>
    <td><?php echo $row['cityname'];?></td>
    <td><img style="width:100px" src="../public/<?php echo $row['image']?>"/> </td>
	 <td><?php echo $row['type'];?></td>
	 <td><a href="details-places.php?name=<?php echo urldecode($row['name']);?>"> <input type="button" value="more details" class="add-btn">
</a>  </td>
	
  </tr>
 <?php }?> 
 	
</table>
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