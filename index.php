<html>
   <head>
      <meta name="viewport" content="width=device-width, initial-scale=1">
      <link rel="stylesheet" href="styles.css">
   </head>
   <!-- calling booking php file -->
   <body>
      <div class="container">
	  <form action="booking.php" method="POST" name="dates">
         <label for="checkin">Check In Date:</label>
         <input type="date" name="checkin">
        
         <label for="checkout">Check Out Date:</label>
         <input type="date" name="checkout">
		 
         <!-- roomq : room quantity -->
         <p>
		 <br>
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
            <input id="submit_btn" type="submit" value="Book"> 
      </form>
	  </div>
      <br>
      <br>
      <button id="datedisplayer" type="button" onclick="document.getElementById('displayblock').innerHTML = Date()">Check Current Date and Time.</button>
      <p id="displayblock"></p>
   </body>
</html>

