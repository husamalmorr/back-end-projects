<?php 
$sessionid=$_SESSION['loginid'];
$query=mysqli_query($conn,"select * from cart where sessionid='$sessionid'");
$query2=mysqli_query($conn,"SELECT sum( total - total*promovalue/100 ) FROM cart where sessionid='$sessionid'");
$query4=mysqli_query($conn,"SELECT sum( total) FROM cart where sessionid='$sessionid'");
$row2=mysqli_fetch_array($query2);
$row4=mysqli_fetch_array($query4);
	$date=date("Y-m-d");
		$query6=mysqli_query($conn,"select * from promocodes where edate >='$date'");
		

$msg2="";
$msg3="";
$num=mysqli_num_rows($query);
if(isset($_GET['id'])){
	$id=$_GET['id'];
	$price=$_GET['price'];
	$quantity=$_GET['qua']+1;
	$mul=$price * $quantity;
	$query3=mysqli_query($conn,"update cart set quantity='$quantity', total='$mul' where id='$id' and sessionid='$sessionid'");
	$msg="<script> window.location.href='Cart.php';
 </script> ";
 	echo $msg;

}
if(isset($_GET['id2'])){
	$id=$_GET['id2'];
	$price=$_GET['price'];
	$quantity=$_GET['qua']-1;
	$mul=$price * $quantity;
	$query3=mysqli_query($conn,"update cart set quantity='$quantity', total='$mul' where id='$id' and sessionid='$sessionid'");
	$msg="<script> window.location.href='Cart.php';
 </script> ";
 	echo $msg;

}
if(isset($_GET['del'])){
	$id=$_GET['id'];
	$query3=mysqli_query($conn,"delete from cart where id='$id' and sessionid='$sessionid'");
	$msg="<script> window.location.href='Cart.php';
 </script> ";
 	echo $msg;

}
if(isset($_POST['code'])){
		$promo=$_POST['promo'];
while($row6=mysqli_fetch_array($query6)){
	$value=$row6['value'];
	
	if($promo==$row6['name']){
			$query3=mysqli_query($conn,"update cart set promo='$promo',promovalue='$value' where sessionid='$sessionid'");
		$msg3=$row6['description'];
$msg="<script> window.location='Cart.php?promocode=$promo';
 </script> ";
 $promo= $_GET['promocode'];
  	echo $msg;

	}
	else {
		
		$msg2="Promo code is not valid";
}
}
}
if(isset($_POST['remove'])){
		$promo=0;
while($row6=mysqli_fetch_array($query6)){
	$value=0;
	
			$query3=mysqli_query($conn,"update cart set promo='$promo',promovalue='$value' where sessionid='$sessionid'");
		$msg3=$row6['description'];
$msg="<script> window.location='Cart.php';
 </script> ";
  	echo $msg;

}
}
?>
<section class="h-100 h-custom">
  <div class="container py-5 h-100">
    <div class="row d-flex justify-content-center align-items-center h-100">
      <div class="col-12">
        <div class="card card-registration card-registration-2" style="border-radius: 15px;">
          <div class="card-body p-0">
            <div class="row g-0">
              <div class="col-lg-8">
                <div class="p-5">
                  <div class="d-flex justify-content-between align-items-center mb-5">
                    <h1 class="fw-bold mb-0 text-black">Shopping Cart</h1>
                    <h6 class="mb-0 text-muted"><?php echo $num?> items</h6>
                  </div>
				  <?php while($row=mysqli_fetch_array($query)){?>
                  <hr class="my-4">

                  <div class="row mb-4 d-flex justify-content-between align-items-center">
                    <div class="col-md-2 col-lg-2 col-xl-2">
                      <img
                        src="<?php echo $row['image'];?>"
                        class="img-fluid rounded-3" alt="Cotton T-shirt">
                    </div>
                    <div class="col-md-3 col-lg-3 col-xl-3">
                      <h6 class="text-muted"><?php echo $row['category'];?> </h6>
                      <h6 class="text-black mb-0"><?php echo $row['itemname'];?></h6>

                    </div>
					  <div class="col-md-2 col-lg-2 col-xl-2">
                       <a style="text-decoration:none" href="Cart.php?id=<?php echo $row['id'];?>&qua=<?php echo $row['quantity'];?>&price=<?php echo $row['price']?> "> <button type="submit" name="update" class="btn btn-dark btn-block btn-sm"
                    data-mdb-ripple-color="dark"> + </button> </a>
					  <a style="text-decoration:none" href="Cart.php?id2=<?php echo $row['id'];?>&qua=<?php echo $row['quantity'];?>&price=<?php echo $row['price']?>"> <button type="submit" name="update" class="btn btn-dark btn-block btn-sm"
                    data-mdb-ripple-color="dark"> - </button> </a>
                   

                    </div>
                    <div class="col-md-3 col-lg-3 col-xl-2 d-flex">
                  				  					<form method="post">


                      <input id="form1"  name="quantity" type="number" value="<?php echo $row['quantity'];?>"
                        class="form-control form-control-sm" readonly />

                  
					  				  		</form>

                    </div>
			
                    <div class="col-md-1 col-lg-1 col-xl-1 offset-lg-1">
                      <h6 class="mb-0"><?php echo ($row['price'] * $row['quantity'])?> $</h6>
                    </div>
                    <div class="col-md-1 col-lg-1 col-xl-1 text-end">
                      <a href="Cart.php?id=<?php echo $row['id'];?>&del=delete" class="text-muted"><i class="fa fa-times"></i></a>
                    </div>
                  </div>
				  <?php }?>
				  
				 <?php if(mysqli_num_rows($query)==0){?>
				 
                      <h6 class="text-black mb-0">No item has been added</h6>
				 <?php }?>

                
              

                  <hr class="my-4">

                  <div class="pt-5">
                    <h6 class="mb-0"><a href="#!"onclick="history.back()" class="text-body"><i class="fa fa-arrow-left" aria-hidden="true"></i>
Back to shop</a></h6>
                  </div>
                </div>
              </div>
              <div class="col-lg-4 bg-grey">
                <div class="p-5">
                  <h3 class="fw-bold mb-5 mt-2 pt-1">Summary</h3>
                  <hr class="my-4">

                  <div class="d-flex justify-content-between mb-4">
                    <h5 class="text-uppercase">items <?php echo $num;?></h5>
                    <h5> <?php echo $row2[0];?> $</h5>
                  </div>

                  <h5 class="text-uppercase mb-3">Shipping</h5>
				  <?php if ($row2[0]<50 && mysqli_num_rows($query)!=0){?>
                  <h5 class="text-uppercase mb-4">Cash on-Delivery- 5.00 $</h5>
				  <?php }
				  if ($row2[0]>=50 && mysqli_num_rows($query)!=0){
					  ?>
				 <h5 class="text-uppercase mb-4">Cash on-Delivery- FREE</h5>
				  <?php }?>


             
<form method="post">
                  <h5 class="text-uppercase mb-3">promo code</h5>

                  <div class="mb-5">
                    <div class="form-outline">
				<?php if (strpos($_SERVER['REQUEST_URI'], 'promocode') !== false){?>
                      <input type="text" name="promo" value="<?php echo $_GET['promocode'];?>" id="form3Examplea2" class="form-control form-control-lg"  readonly /> <br />
						 <button type="submit" name="remove" class="btn btn-dark btn-block btn-lg"
                    data-mdb-ripple-color="dark">Remove Code</button>
				<?php } else {
					?>
					                      <input type="text" name="promo" value="" id="form3Examplea2" class="form-control form-control-lg" />
			
                      <label class="form-label" for="form3Examplea2"><?php  if($msg3!=""){ echo $msg3; $msg2="";} if($msg2!="") echo $msg2; $msg3="";?></label>
                    </div>
					 <button type="submit" name="code" class="btn btn-dark btn-block btn-lg"
                    data-mdb-ripple-color="dark">Submit</button>
						<?php }?>
                  </div>
</form>
                  <hr class="my-4">
                  <div class="d-flex justify-content-between mb-5">
                    <h5 class="text-uppercase">Total price</h5>
									  <?php if ($row2[0]<50 && mysqli_num_rows($query)!=0){
										  ?>
									  <h5><?php echo ($row2[0] +5);?> $</h5>
									  <?php } else {
										  ?>
										  <h5><?php echo $row2[0]?> $</h5>
									  <?php }?>
				
                  </div>

<?php if (mysqli_num_rows($query)!=0){?>
                  <button type="button" class="btn btn-dark btn-block btn-lg"
                    data-mdb-ripple-color="dark">Submit Order</button>
<?php }else {
	?>
	<button type="button" class="btn btn-dark btn-block btn-lg"
                    data-mdb-ripple-color="dark">Explore Items</button>
<?php }?>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
</section>