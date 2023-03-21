	$(document).ready(function(){
		$min = $_POST["min"];
		var countDownDate = $min;
		

// Update the count down every 1 second
var x = setInterval(function() {

  // Get today's date and time
  var now = $min;

  // Find the distance between now and the count down date
  var distance = countDownDate - now;

  // Time calculations for days, hours, minutes and seconds

  
  var minutes = Math.floor((distance % (1000 * 60 * 60)) / (1000 * 60));
  var seconds = Math.floor((distance % (1000 * 60)) / 1000);

  // Display the result in the element with id="demo"
  document.getElementById("demo").innerHTML =  
   minutes + "m " + seconds + "s ";

  // If the count down is finished, write some text
  if (distance < 0) {
    clearInterval(x);
    document.getElementById("demo").innerHTML = "EXPIRED";
  }
}, 1000);
$('#dropdown').change(function(){	
$('#dropdown')
  .dropdown()
;
});
		 $("#min").click(function(){
			 
	
	 });
	});
	

