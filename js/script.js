

function pickvalidate() {
	
	
	
	var x = document.forms["dform"]["checkin"].value;
	if(x == "") {
		alert("Please choose a check-in date");
		return false;
	}
	
	
	var x = document.forms["dform"]["checkout"].value;
	if(x == "") {
		alert("Please choose a check-out date");
		return false;
	}
	
	
	var selector = document.getElementsByName("slct");
  var check = 0;
  for(i=0;i<selector.length;i++){
    if(selector[i].checked){
      check++;
      break;
    }
  }
  if(check){
  }else{
    alert("Please Check Availability and select a room");
    return false;
  }
	
	// user login validator
	
	 if ($(".UserIsLogged").length > 0) {
            //User is logged
        }
		
		else { alert("Please Login to Proceed bookings");
		return false; }
    

	
	
	
	
	
}



