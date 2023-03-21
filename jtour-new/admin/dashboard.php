<?php 
session_start();
 	  if($_SESSION['id']==0)
	  {
	 header("location:index.html");
	  }include("controllers/counter.php");

?>
<html>
  <head>
    <meta charset="utf-8" />
    <meta name="viewport" content="initial-scale=1, width=device-width" />
    <title></title>
    <meta name="description" content="" />
<script src="jquery.min.js" integrity="sha512-894YE6QWD5I59HgZOGReFYm4dnWc1Qt5NtvYSaNcOP+u1T9qYdvdihz0PPSiiqn/+/3e7Jo4EaG7TubfWGUrMQ==" crossorigin="anonymous" referrerpolicy="no-referrer"></script>
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
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
          <li><a href="#"><?php echo $_SESSION['name'];?> </a></li>
        </ul>
      </div>
    </nav>
    <div class="container-fluid">
   <div class="container">
    <div class="row" style="padding-top: 60px;">
    <div class="col-md-6">
      <div class="card-counter primary">
        <i class="fa fa-code-fork"></i>
        <span class="count-numbers"><?php echo $num;?></span>
        <span class="count-name">Users</span>
      </div>
    </div>

    <div class="col-md-6">
      <div class="card-counter danger">
        <i class="fa fa-ticket"></i>
        <span class="count-numbers"><?php echo $num2;?></span>
        <span class="count-name">Admins</span>
      </div>
    </div>

    <div class="col-md-6">
      <div class="card-counter success">
        <i class="fa fa-database"></i>
        <span class="count-numbers"><?php echo $num3;?></span>
        <span class="count-name">Cities</span>
      </div>
    </div>

    <div class="col-md-6">
      <div class="card-counter info">
        <i class="fa fa-users"></i>
        <span class="count-numbers"><?php echo $num4;?></span>
        <span class="count-name">Places</span>
      </div>
    </div>
  </div>
</div>
    </div>
  </div>
</div>
</body>
</html>