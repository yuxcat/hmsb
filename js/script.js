function myFunction() {
	var txt;
	if(confirm("Are You Sure")) {
		txt = "You pressed OK!";
	} else {
		txt = "You pressed Cancel!";
	}
	document.getElementById("demo").innerHTML = txt;
}

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
	
	
	var option=document.getElementsByName('slct');

if (!(option[0].checked || option[1].checked)) {
    alert("Please select a room");
    return false;
}

	
}



