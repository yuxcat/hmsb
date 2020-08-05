<html>
	<head>
		<meta name="viewport" content="width=device-width, initial-scale=1">
		    <script type="text/javascript" src="js/jquery.js"></script>
			<script type="text/javascript" src="js/script.js"></script>
            <script type="text/javascript" src="js/innerload.js"></script>
			<script type="text/javascript" src="js/ajax.js"></script>
			<link rel="stylesheet" href="css/styles.css">
				<link rel="stylesheet" href="css/pure.css">
				
				</head>
				<!-- calling booking php file -->
				<body>
					<div class="container">
						<form id="inputform" onchange="" class="pure-form" action="booking.php" method="POST" name="dform" onsubmit="return pickvalidate()">
							<br>
								<div class="datew1">
									<input id="ch1" type="date" name="checkin" class="inp" value="">
									</div>
									<div class="datew2">
										<input id="ch2" type="date" name="checkout" class="inp" value="" >
										</div>
										<!-- roomq : room quantity -->
										<div class="ddw1">
											<select id="dd1" name="roomsdd" class="inp">
												<option value="1">1 room</option>
												<option value="2">2 rooms</option>
												<option value="3">3 rooms</option>
												<option value="4">4 rooms</option>
												<option value="5">5 rooms</option>
												<option value="6">6 rooms</option>
												<option value="7">7 rooms</option>
												<option value="8">8 rooms</option>
												<option value="9">9 rooms</option>
												<option value="10">10 rooms</option>
											</select>
										</div>
										<div class="ddw2">
											<div class="indd">
												<select id="dd2" name="adultsdd" class="inp2">
													<option value="1">1 adult</option>
													<option value="2">2 adults</option>
													<option value="3">3 adults</option>
													<option value="4">4 adults</option>
													<option value="5">5 adults</option>
													<option value="6">6 adults</option>
													<option value="7">7 adults</option>
													<option value="8">8 adults</option>
													<option value="9">9 adults</option>
													<option value="10">10 adults</option>
												</select>
											</div>
											<div class="indd2">
												<select id="dd3" name="lildd" class="inp2" aria-label="Number of rooms">
													<option value="0">No children</option>
													<option value="1">1 child</option>
													<option value="2">2 children</option>
													<option value="3">3 children</option>
													<option value="4">4 children</option>
													<option value="5">5 children</option>
													<option value="6">6 children</option>
													<option value="7">7 children</option>
													<option value="8">8 children</option>
													<option value="9">9 children</option>
													<option value="10">10 children</option>
												</select>
											</div>
										</div>
										<div class="btn_wrap">
											<input id="submit_btn" name = "submitbtn" class="pure-button pure-button-primary" type="submit" value="Reserve">
											</div>
											
											<!-- Stat - passing the seesion causing parameter anormalies, so i implemented the roomlist here. -->
											
											
											<div name="ajaxloader" id="div1"></div>
											
											
											<!-- end of the implementation, adios-->
										</form>
										
										
									</div>
									
								<div class="btn_wrap2">
											
											
											<button class="button-secondary pure-button" onclick="post();" id="btn"  >Check Availability</button>
											
											
											</div>
									
									
								</body>
								
							</html>
