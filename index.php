<html>

<head>
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<script type="text/javascript" src="js/script.js"></script>
	<link rel="stylesheet" href="css/styles.css">
	<link rel="stylesheet" href="css/pure.css"> </head>
<!-- calling booking php file -->

<body>
	<div class="container">
		<form class="pure-form" action="booking.php" method="POST" name="dform" onsubmit="return pickvalidate()">
			<div class="datew1">
				<label for="checkin">Check in:</label>
				<input id="ch1" type="date" name="checkin" class="inp"> </div>
			<div class="datew2">
				<label for="checkout">Check out:</label>
				<input id="ch2" type="date" name="checkout" class="inp"> </div>
			<!-- roomq : room quantity -->
			<div class="ddw1">
				<label>Rooms</label>
				<select id="dd1" name="roomsdd" class="inp">
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
			</div>
			<div class="ddw2">
				<label>Adults</label>
				<select id="dd2" name="adultsdd" class="inp">
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
			</div>
			<div class="ddw3">
				<label>Children</label>
				<select id="dd3" name="lildd" class="inp">
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
				<div class="btn_wrap">
					<input id="submit_btn" class="pure-button pure-button-primary" type="submit" value="Reserve" onclick="myFunction()"> </div>
			</div>
		</form>
	</div>
	</div>
	<p id="demo"></p>
</body>

</html>
