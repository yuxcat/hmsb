function post(){

$(document).ready(function() {
	
	
  

	 
	 var cidate = $("#ch1").val(); // assigning variables for ch1/ch2 data inputs
	 var codate = $("#ch2").val();
	 var hotelname = $("#dd4").val();
	 
	 $.post("filtered.php", {                      //posting to innerloader file using ajax
		 
		 postcidate: cidate,postcodate: codate,posthname: hotelname
		 
	 }, function(data, status) {
		 
		 $("#test").html(data);             //output goes #test element
		 
	 });
	 
	 
    

 
 
});

}
