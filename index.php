<html>
   <head>
      <meta name="viewport" content="width=device-width, initial-scale=1">
      <script type="text/javascript" src="script.js"></script>
	  <link rel="stylesheet" href="styles.css">
	  <link rel="stylesheet" href="forms.css">
      <link rel="stylesheet" href="buttons.css">
	  <link rel="stylesheet" href="base.css">
   </head>
   <!-- calling booking php file -->
   <body>
      <div class="container">
	  <form class="pure-form" action="booking.php" method="POST" name="dform" onsubmit="return pickvalidate()">
		 <label for="checkin">Check In Date:</label>
         <input id="ch1" type="date" name="checkin">
        
         <label for="checkout">Check Out Date:</label>
         <input id="ch2" type="date" name="checkout">
		 
		 <label for="checkbox-radio-option-one" class="pure-checkbox">
        <input type="checkbox" id="checkbox-radio-option-one" value="" />Departure Haven&#x27;t Decided Yet.</label>
         <!-- roomq : room quantity -->
         <p>
            <roomq=r oom quantity*/ <label>Rooms</label>
            <select name="roomsdd">
               <option value="1">1</option>
               <option value="2">2</option>
               <option value="3">3</option>
               <option value="4">4</option>
               <option value="5">5</option>
               <option value="6">6</option>
               <option value="7">7</option>
               <option value="8">8</option>
               <option value="9">9</option>
               <option value="10">10</option>
            </select>
            <label>Adults</label>
            <select name="adultsdd">
               <option value="1">1</option>
               <option value="2">2</option>
               <option value="3">3</option>
               <option value="4">4</option>
               <option value="5">5</option>
               <option value="6">6</option>
               <option value="7">7</option>
               <option value="8">8</option>
               <option value="9">9</option>
               <option value="10">10</option>
            </select>
            <label>Children</label>
            <select name="lildd">
			   <option value="0">0</option>
               <option value="1">1</option>
               <option value="2">2</option>
               <option value="3">3</option>
               <option value="4">4</option>
               <option value="5">5</option>
               <option value="6">6</option>
               <option value="7">7</option>
               <option value="8">8</option>
               <option value="9">9</option>
               <option value="10">10</option>
            </select>
            <input id="submit_btn" class="pure-button pure-button-primary" type="submit" value="Reserve" onclick="myFunction()"> 
      </form>
	  </div>
      <br>
      <br>
      <button id="datedisplayer" class="pure-button pure-button-primary" type="button" onclick="document.getElementById('displayblock').innerHTML = Date()">Check Current Date and Time</button>
      <p id="displayblock"></p>
      <p id="demo"></p>
   </body>
</html>
