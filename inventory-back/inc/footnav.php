<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <script src="vendor/jquery/jquery.min.js"></script>
    <script src="vendor/bootstrap/js/bootstrap.bundle.min.js"></script>
	
	<!-- Datatables script -->
	<script type="text/javascript" charset="utf8" src="vendor/DataTables/datatables.js"></script>
	<script type="text/javascript" charset="utf8" src="vendor/DataTables/sumsum.js"></script>
	
	<!-- Chosen files for select boxes -->
	<script src="vendor/chosen/chosen.jquery.min.js"></script>
	<link rel="stylesheet" href="vendor/chosen/chosen.css" />
	
	<!-- Datepicker JS -->
	<script src="vendor/datepicker164/js/bootstrap-datepicker.min.js"></script>
	
	<!-- Bootbox JS -->
	<script src="vendor/bootbox/bootbox.min.js"></script>
	
	<!-- Custom scripts -->
	<script src="assets/js/scripts.js"></script>
	<script src="assets/js/login.js"></script>
<style>
body {
    margin: 0 0 55px 0;
}

.nav_ {
    position: fixed;
    bottom: 3px;
    width: 100%;
    height: 55px;
    box-shadow: 0 0 3px rgba(0, 0, 0, 0.2);
    background-color: #ffffff;
    display: flex;
    overflow-x: auto;
	z-index:9999;
}

.nav__link {
    display: flex;
    flex-direction: column;
    align-items: center;
    justify-content: center;
    flex-grow: 1;
    min-width: 50px;
    overflow: hidden;
    white-space: nowrap;
    font-family: sans-serif;
    font-size: 13px;
    color: #444444;
    text-decoration: none;
    -webkit-tap-highlight-color: transparent;
    transition: background-color 0.1s ease-in-out;
	text-decoration:none;
}

.nav__link:hover {
    background-color: #eeeeee;
		text-decoration:none;

}

.nav__link--active {

    color: #009578;
}

.nav__icon {
    font-size: 18px;
}
</style>



<nav class="nav"style="    position: fixed;
    bottom: 3px;
    width: 100%;
    height: 55px;
    box-shadow: 0 0 3px rgba(0, 0, 0, 0.2);
    background-color: #ffffff;
    display: flex;
    overflow-x: auto;
	z-index:9999;">
  <a href="#v-pills-item" role="tab"  data-toggle="pill" id="v-pills-item-tab" aria-controls="v-pills-item" aria-selected="true"  class="nav__link nav__link--active">
	<i class="fa fa-plus"></i>
    <span class="nav__text">Item</span>
  </a>
  <a href="#v-pills-purchase" role="tab"  data-toggle="pill" id="v-pills-purchase-tab" aria-controls="v-pills-purchase" aria-selected="false" class="nav__link" >
<i class="fa fa-money" aria-hidden="true"></i>




    <span class="nav__text">Purchase</span>
  </a>
  <a href="#v-pills-vendor" id="v-pills-vendor-tab" data-toggle="pill"  role="tab" aria-controls="v-pills-vendor" aria-selected="false" class="nav__link">
<i class="fa fa-handshake-o" aria-hidden="true"></i>
    <span class="nav__text">Vendor</span>
  </a>
  <a id="v-pills-sale-tab" data-toggle="pill" href="#v-pills-sale" role="tab" aria-controls="v-pills-sale" aria-selected="false" class="nav__link">
<i class="fa fa-id-card" aria-hidden="true"></i>
    <span class="nav__text">Sale</span>
  </a>
  <a id="v-pills-customer-tab" data-toggle="pill" href="#v-pills-customer" role="tab" aria-controls="v-pills-customer" aria-selected="false" class="nav__link">
<i class="fa fa-user-o" aria-hidden="true"></i>
    <span class="nav__text">Customer</span>
  </a>
    <a  id="v-pills-search-tab" data-toggle="pill" href="#v-pills-search" role="tab" aria-controls="v-pills-search" aria-selected="false" class="nav__link">
<i class="fa fa-search" aria-hidden="true"></i>
    <span class="nav__text">Search</span>
  </a>
      <a  id="v-pills-reports-tab" data-toggle="pill" href="#v-pills-reports" role="tab" aria-controls="v-pills-reports" aria-selected="false" class="nav__link">
<i class="fa fa-bookmark-o" aria-hidden="true"></i>
    <span class="nav__text">Report</span>
  </a>
 
</nav>