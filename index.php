<html>
	<head>
		<title>JavaScript/CSS3 Departure Board</title>
		<link rel="stylesheet" href="departure-board.css" />
		<link rel="stylesheet" href="flip.css" />

		<!-- IMPORT SCRIPT HERE -->
		<script src="//ajax.googleapis.com/ajax/libs/jquery/1.9.1/jquery.min.js">
		</script>

	</head>

	<body>
		<h1 id="title1">ALL ABOARD BETTERMENT</h1>

		<div id="placeholder"></div>
    	<div id = 'table'>
        <div id = "test" class = "departure-board">
        	<tr>
        		
        			<th>TYPE</th>
        		
        			<th>NAME</th>
        		
        			<th>DESTINATION</th>
        	
        			<th colspan= "8">TRIP DISTANCE</th>
        		
        			<th colspan = "4">DURATION</th>
        		
        			<th colspan = "8">MILES CHANGE</th>
        		
        			<th colspan ="8">PROGRESS</th>
        		
        			<th>STATUS</th>
        		
        	</tr>


        	<div class= 'row'>
			<tr class='deposit0'>
				<td>
					<span class='letter'>
						<span class='flap bottom'>
							<p class ="text" id="d">D</p>
						</span>
						<span class='flap top'>
							<p  class ="text" id = "d">D</p>
						</span>
						<span class = "fold">
							<span class="text" style="transition: 50ms ease-out; -webkit-transition: 50ms ease-out; -webkit-transform: scaleY(1); top: 0px;">
							<span class ="flap falling" style="display: none; top: auto; bottom: 0px;">
						</span>

					</td>
				</td>
				<td>
					<div class='click panel square'>
						<div class='front'>
							<p class='NAME'> name </p>
						</div>
						<div class='back'>
							<p></p>
						</div>
					</div>
				</td>
				<td>
					<div class='click panel square'>
						<div class='front'>
							<p class='DESTINATION'> dest </p>
						</div>
						<div class='back'>
							<p></p>
						</div>
					</div>
				</td>
				<td>
					<div class='click panel square'>
						<div class='front'>
							<p class='TRIP_DIST0'> <?php echo rand(0,9)?> </p>
						</div>
						<div class='back'>
							<p></p>
						</div>
					</div>
				</td>
				<td>
					<div class='click panel square'>
						<div class='front'>
							<p class='TRIP_DIST1'> <?php echo rand(0,9)?> </p>
						</div>
						<div class='back'>
							<p></p>
						</div>
					</div>
				</td>
				<td>
					<div class='click panel square'>
						<div class='front'>
							<p class='TRIP_DIST2'> <?php echo rand(0,9)?> </p>
						</div>
						<div class='back'>
							<p></p>
						</div>
					</div>
				</td>
				<td>
					<div class='click panel square'>
						<div class='front'>
							<p class='TRIP_DIST3'> <?php echo rand(0,9)?> </p>
						</div>
						<div class='back'>
							<p></p>
						</div>
					</div>
				</td>
				<td>
					<div class='click panel square'>
						<div class='front'>
							<p class='TRIP_DIST4'> <?php echo rand(0,9)?> </p>
						</div>
						<div class='back'>
							<p></p>
						</div>
					</div>
				</td>
				<td>
					<div class='click panel square'>
						<div class='front'>
							<p class='TRIP_DIST5'> <?php echo rand(0,9)?> </p>
						</div>
						<div class='back'>
							<p></p>
						</div>
					</div>
				</td>
				<td>
					<div class='click panel square'>
						<div class='front'>
							<p class='TRIP_DIST6'> <?php echo rand(0,9)?> </p>
						</div>
						<div class='back'>
							<p></p>
						</div>
					</div>
				</td>
				<td>
					<div class='click panel square'>
						<div class='front'>
							<p class='TRIP_DIST7'> <?php echo rand(0,9)?> </p>
						</div>
						<div class='back'>
							<p></p>
						</div>
					</div>
				</td>
				<td>
					<div class='click panel square'>
						<div class='front'>
							<p class='DURATION0'> <?php echo rand(0,9)?> </p>
						</div>
						<div class='back'>
							<p></p>
						</div>
					</div>
				</td>
				<td>
					<div class='click panel square'>
						<div class='front'>
							<p class='DURATION1'> <?php echo rand(0,9)?> </p>
						</div>
						<div class='back'>
							<p></p>
						</div>
					</div>
				</td>
				<td>
					<div class='click panel square'>
						<div class='front'>
							<p class='DURATION2'> <?php echo rand(0,9)?> </p>
						</div>
						<div class='back'>
							<p></p>
						</div>
					</div>
				</td>
				<td>
					<div class='click panel square'>
						<div class='front'>
							<p class='DURATION3'> <?php echo rand(0,9)?> </p>
						</div>
						<div class='back'>
							<p></p>
						</div>
					</div>
				</td>
				<td>
					<div class='click panel square'>
						<div class='front'>
							<p class='MILES_CHANGE0'> <?php echo rand(0,9)?> </p>
						</div>
						<div class='back'>
							<p></p>
						</div>
					</div>
				</td>
				<td>
					<div class='click panel square'>
						<div class='front'>
							<p class='MILES_CHANGE1'> <?php echo rand(0,9)?> </p>
						</div>
						<div class='back'>
							<p></p>
						</div>
					</div>
				</td>
				<td>
					<div class='click panel square'>
						<div class='front'>
							<p class='MILES_CHANGE2'> <?php echo rand(0,9)?> </p>
						</div>
						<div class='back'>
							<p></p>
						</div>
					</div>
				</td>
				<td>
					<div class='click panel square'>
						<div class='front'>
							<p class='MILES_CHANGE3'> <?php echo rand(0,9)?> </p>
						</div>
						<div class='back'>
							<p></p>
						</div>
					</div>
				</td>
				<td>
					<div class='click panel square'>
						<div class='front'>
							<p class='MILES_CHANGE4'> <?php echo rand(0,9)?> </p>
						</div>
						<div class='back'>
							<p></p>
						</div>
					</div>
				</td>
				<td>
					<div class='click panel square'>
						<div class='front'>
							<p class='MILES_CHANGE5'> <?php echo rand(0,9)?> </p>
						</div>
						<div class='back'>
							<p></p>
						</div>
					</div>
				</td>
				<td>
					<div class='click panel square'>
						<div class='front'>
							<p class='MILES_CHANGE6'> <?php echo rand(0,9)?> </p>
						</div>
						<div class='back'>
							<p></p>
						</div>
					</div>
				</td>
				<td>
					<div class='click panel square'>
						<div class='front'>
							<p class='MILES_CHANGE7'> <?php echo rand(0,9)?> </p>
						</div>
						<div class='back'>
							<p></p>
						</div>
					</div>
				</td>
				<td>
					<div class='click panel square'>
						<div class='front'>
							<p class='PROGRESS0'> <?php echo rand(0,9)?> </p>
						</div>
						<div class='back'>
							<p></p>
						</div>
					</div>
				</td>
				<td>
					<div class='click panel square'>
						<div class='front'>
							<p class='PROGRESS1'> <?php echo rand(0,9)?> </p>
						</div>
						<div class='back'>
							<p></p>
						</div>
					</div>
				</td>
				<td>
					<div class='click panel square'>
						<div class='front'>
							<p class='PROGRESS2'> <?php echo rand(0,9)?> </p>
						</div>
						<div class='back'>
							<p></p>
						</div>
					</div>
				</td>
				<td>
					<div class='click panel square'>
						<div class='front'>
							<p class='PROGRESS3'> <?php echo rand(0,9)?> </p>
						</div>
						<div class='back'>
							<p></p>
						</div>
					</div>
				</td>
				<td>
					<div class='click panel square'>
						<div class='front'>
							<p class='PROGRESS4'> <?php echo rand(0,9)?> </p>
						</div>
						<div class='back'>
							<p></p>
						</div>
					</div>
				</td>
				<td>
					<div class='click panel square'>
						<div class='front'>
							<p class='PROGRESS5'> <?php echo rand(0,9)?> </p>
						</div>
						<div class='back'>
							<p></p>
						</div>
					</div>
				</td>
				<td>
					<div class='click panel square'>
						<div class='front'>
							<p class='PROGRESS6'> <?php echo rand(0,9)?> </p>
						</div>
						<div class='back'>
							<p></p>
						</div>
					</div>
				</td>
				<td>
					<div class='click panel square'>
						<div class='front'>
							<p class='PROGRESS7'> <?php echo rand(0,9)?> </p>
						</div>
						<div class='back'>
							<p></p>
						</div>
					</div>
				</td>
				<td>
					<div class='click panel square'>
						<div class='front'>
							<p class='STATUS'> status </p>
						</div>
						<div class='back'>
							<p></p>
						</div>
					</div>
				</td>
			</tr>
			<tr class='deposit1'>
				<td>
					<div class='click panel square'>
						<div class='front'>
							<p id="d">D</p>
						</div>
						<div class='back'>
							<p></p>
						</div>
					</div>
				</td>
				<td>
					<div class='click panel square'>
						<div class='front'>
							<p class='NAME'> name </p>
						</div>
						<div class='back'>
							<p></p>
						</div>
					</div>
				</td>
				<td>
					<div class='click panel square'>
						<div class='front'>
							<p class='DESTINATION'> dest </p>
						</div>
						<div class='back'>
							<p></p>
						</div>
					</div>
				</td>
				<td>
					<div class='click panel square'>
						<div class='front'>
							<p class='TRIP_DIST0'> <?php echo rand(0,9)?> </p>
						</div>
						<div class='back'>
							<p></p>
						</div>
					</div>
				</td>
				<td>
					<div class='click panel square'>
						<div class='front'>
							<p class='TRIP_DIST1'> <?php echo rand(0,9)?> </p>
						</div>
						<div class='back'>
							<p></p>
						</div>
					</div>
				</td>
				<td>
					<div class='click panel square'>
						<div class='front'>
							<p class='TRIP_DIST2'> <?php echo rand(0,9)?> </p>
						</div>
						<div class='back'>
							<p></p>
						</div>
					</div>
				</td>
				<td>
					<div class='click panel square'>
						<div class='front'>
							<p class='TRIP_DIST3'> <?php echo rand(0,9)?> </p>
						</div>
						<div class='back'>
							<p></p>
						</div>
					</div>
				</td>
				<td>
					<div class='click panel square'>
						<div class='front'>
							<p class='TRIP_DIST4'> <?php echo rand(0,9)?> </p>
						</div>
						<div class='back'>
							<p></p>
						</div>
					</div>
				</td>
				<td>
					<div class='click panel square'>
						<div class='front'>
							<p class='TRIP_DIST5'> <?php echo rand(0,9)?> </p>
						</div>
						<div class='back'>
							<p></p>
						</div>
					</div>
				</td>
				<td>
					<div class='click panel square'>
						<div class='front'>
							<p class='TRIP_DIST6'> <?php echo rand(0,9)?> </p>
						</div>
						<div class='back'>
							<p></p>
						</div>
					</div>
				</td>
				<td>
					<div class='click panel square'>
						<div class='front'>
							<p class='TRIP_DIST7'> <?php echo rand(0,9)?> </p>
						</div>
						<div class='back'>
							<p></p>
						</div>
					</div>
				</td>
				<td>
					<div class='click panel square'>
						<div class='front'>
							<p class='DURATION0'> <?php echo rand(0,9)?> </p>
						</div>
						<div class='back'>
							<p></p>
						</div>
					</div>
				</td>
				<td>
					<div class='click panel square'>
						<div class='front'>
							<p class='DURATION1'> <?php echo rand(0,9)?> </p>
						</div>
						<div class='back'>
							<p></p>
						</div>
					</div>
				</td>
				<td>
					<div class='click panel square'>
						<div class='front'>
							<p class='DURATION2'> <?php echo rand(0,9)?> </p>
						</div>
						<div class='back'>
							<p></p>
						</div>
					</div>
				</td>
				<td>
					<div class='click panel square'>
						<div class='front'>
							<p class='DURATION3'> <?php echo rand(0,9)?> </p>
						</div>
						<div class='back'>
							<p></p>
						</div>
					</div>
				</td>
				<td>
					<div class='click panel square'>
						<div class='front'>
							<p class='MILES_CHANGE0'> <?php echo rand(0,9)?> </p>
						</div>
						<div class='back'>
							<p></p>
						</div>
					</div>
				</td>
				<td>
					<div class='click panel square'>
						<div class='front'>
							<p class='MILES_CHANGE1'> <?php echo rand(0,9)?> </p>
						</div>
						<div class='back'>
							<p></p>
						</div>
					</div>
				</td>
				<td>
					<div class='click panel square'>
						<div class='front'>
							<p class='MILES_CHANGE2'> <?php echo rand(0,9)?> </p>
						</div>
						<div class='back'>
							<p></p>
						</div>
					</div>
				</td>
				<td>
					<div class='click panel square'>
						<div class='front'>
							<p class='MILES_CHANGE3'> <?php echo rand(0,9)?> </p>
						</div>
						<div class='back'>
							<p></p>
						</div>
					</div>
				</td>
				<td>
					<div class='click panel square'>
						<div class='front'>
							<p class='MILES_CHANGE4'> <?php echo rand(0,9)?> </p>
						</div>
						<div class='back'>
							<p></p>
						</div>
					</div>
				</td>
				<td>
					<div class='click panel square'>
						<div class='front'>
							<p class='MILES_CHANGE5'> <?php echo rand(0,9)?> </p>
						</div>
						<div class='back'>
							<p></p>
						</div>
					</div>
				</td>
				<td>
					<div class='click panel square'>
						<div class='front'>
							<p class='MILES_CHANGE6'> <?php echo rand(0,9)?> </p>
						</div>
						<div class='back'>
							<p></p>
						</div>
					</div>
				</td>
				<td>
					<div class='click panel square'>
						<div class='front'>
							<p class='MILES_CHANGE7'> <?php echo rand(0,9)?> </p>
						</div>
						<div class='back'>
							<p></p>
						</div>
					</div>
				</td>
				<td>
					<div class='click panel square'>
						<div class='front'>
							<p class='PROGRESS0'> <?php echo rand(0,9)?> </p>
						</div>
						<div class='back'>
							<p></p>
						</div>
					</div>
				</td>
				<td>
					<div class='click panel square'>
						<div class='front'>
							<p class='PROGRESS1'> <?php echo rand(0,9)?> </p>
						</div>
						<div class='back'>
							<p></p>
						</div>
					</div>
				</td>
				<td>
					<div class='click panel square'>
						<div class='front'>
							<p class='PROGRESS2'> <?php echo rand(0,9)?> </p>
						</div>
						<div class='back'>
							<p></p>
						</div>
					</div>
				</td>
				<td>
					<div class='click panel square'>
						<div class='front'>
							<p class='PROGRESS3'> <?php echo rand(0,9)?> </p>
						</div>
						<div class='back'>
							<p></p>
						</div>
					</div>
				</td>
				<td>
					<div class='click panel square'>
						<div class='front'>
							<p class='PROGRESS4'> <?php echo rand(0,9)?> </p>
						</div>
						<div class='back'>
							<p></p>
						</div>
					</div>
				</td>
				<td>
					<div class='click panel square'>
						<div class='front'>
							<p class='PROGRESS5'> <?php echo rand(0,9)?> </p>
						</div>
						<div class='back'>
							<p></p>
						</div>
					</div>
				</td>
				<td>
					<div class='click panel square'>
						<div class='front'>
							<p class='PROGRESS6'> <?php echo rand(0,9)?> </p>
						</div>
						<div class='back'>
							<p></p>
						</div>
					</div>
				</td>
				<td>
					<div class='click panel square'>
						<div class='front'>
							<p class='PROGRESS7'> <?php echo rand(0,9)?> </p>
						</div>
						<div class='back'>
							<p></p>
						</div>
					</div>
				</td>
				<td>
					<div class='click panel square'>
						<div class='front'>
							<p class='STATUS'> status </p>
						</div>
						<div class='back'>
							<p></p>
						</div>
					</div>
				</td>
			</tr>
			<tr class='deposit2'>
				<td>
					<div class='click panel square'>
						<div class='front'>
							<p id="d">D</p>
						</div>
						<div class='back'>
							<p></p>
						</div>
					</div>
				</td>
				<td>
					<div class='click panel square'>
						<div class='front'>
							<p class='NAME'> name </p>
						</div>
						<div class='back'>
							<p></p>
						</div>
					</div>
				</td>
				<td>
					<div class='click panel square'>
						<div class='front'>
							<p class='DESTINATION'> dest </p>
						</div>
						<div class='back'>
							<p></p>
						</div>
					</div>
				</td>
				<td>
					<div class='click panel square'>
						<div class='front'>
							<p class='TRIP_DIST0'> <?php echo rand(0,9)?> </p>
						</div>
						<div class='back'>
							<p></p>
						</div>
					</div>
				</td>
				<td>
					<div class='click panel square'>
						<div class='front'>
							<p class='TRIP_DIST1'> <?php echo rand(0,9)?> </p>
						</div>
						<div class='back'>
							<p></p>
						</div>
					</div>
				</td>
				<td>
					<div class='click panel square'>
						<div class='front'>
							<p class='TRIP_DIST2'> <?php echo rand(0,9)?> </p>
						</div>
						<div class='back'>
							<p></p>
						</div>
					</div>
				</td>
				<td>
					<div class='click panel square'>
						<div class='front'>
							<p class='TRIP_DIST3'> <?php echo rand(0,9)?> </p>
						</div>
						<div class='back'>
							<p></p>
						</div>
					</div>
				</td>
				<td>
					<div class='click panel square'>
						<div class='front'>
							<p class='TRIP_DIST4'> <?php echo rand(0,9)?> </p>
						</div>
						<div class='back'>
							<p></p>
						</div>
					</div>
				</td>
				<td>
					<div class='click panel square'>
						<div class='front'>
							<p class='TRIP_DIST5'> <?php echo rand(0,9)?> </p>
						</div>
						<div class='back'>
							<p></p>
						</div>
					</div>
				</td>
				<td>
					<div class='click panel square'>
						<div class='front'>
							<p class='TRIP_DIST6'> <?php echo rand(0,9)?> </p>
						</div>
						<div class='back'>
							<p></p>
						</div>
					</div>
				</td>
				<td>
					<div class='click panel square'>
						<div class='front'>
							<p class='TRIP_DIST7'> <?php echo rand(0,9)?> </p>
						</div>
						<div class='back'>
							<p></p>
						</div>
					</div>
				</td>
				<td>
					<div class='click panel square'>
						<div class='front'>
							<p class='DURATION0'> <?php echo rand(0,9)?> </p>
						</div>
						<div class='back'>
							<p></p>
						</div>
					</div>
				</td>
				<td>
					<div class='click panel square'>
						<div class='front'>
							<p class='DURATION1'> <?php echo rand(0,9)?> </p>
						</div>
						<div class='back'>
							<p></p>
						</div>
					</div>
				</td>
				<td>
					<div class='click panel square'>
						<div class='front'>
							<p class='DURATION2'> <?php echo rand(0,9)?> </p>
						</div>
						<div class='back'>
							<p></p>
						</div>
					</div>
				</td>
				<td>
					<div class='click panel square'>
						<div class='front'>
							<p class='DURATION3'> <?php echo rand(0,9)?> </p>
						</div>
						<div class='back'>
							<p></p>
						</div>
					</div>
				</td>
				<td>
					<div class='click panel square'>
						<div class='front'>
							<p class='MILES_CHANGE0'> <?php echo rand(0,9)?> </p>
						</div>
						<div class='back'>
							<p></p>
						</div>
					</div>
				</td>
				<td>
					<div class='click panel square'>
						<div class='front'>
							<p class='MILES_CHANGE1'> <?php echo rand(0,9)?> </p>
						</div>
						<div class='back'>
							<p></p>
						</div>
					</div>
				</td>
				<td>
					<div class='click panel square'>
						<div class='front'>
							<p class='MILES_CHANGE2'> <?php echo rand(0,9)?> </p>
						</div>
						<div class='back'>
							<p></p>
						</div>
					</div>
				</td>
				<td>
					<div class='click panel square'>
						<div class='front'>
							<p class='MILES_CHANGE3'> <?php echo rand(0,9)?> </p>
						</div>
						<div class='back'>
							<p></p>
						</div>
					</div>
				</td>
				<td>
					<div class='click panel square'>
						<div class='front'>
							<p class='MILES_CHANGE4'> <?php echo rand(0,9)?> </p>
						</div>
						<div class='back'>
							<p></p>
						</div>
					</div>
				</td>
				<td>
					<div class='click panel square'>
						<div class='front'>
							<p class='MILES_CHANGE5'> <?php echo rand(0,9)?> </p>
						</div>
						<div class='back'>
							<p></p>
						</div>
					</div>
				</td>
				<td>
					<div class='click panel square'>
						<div class='front'>
							<p class='MILES_CHANGE6'> <?php echo rand(0,9)?> </p>
						</div>
						<div class='back'>
							<p></p>
						</div>
					</div>
				</td>
				<td>
					<div class='click panel square'>
						<div class='front'>
							<p class='MILES_CHANGE7'> <?php echo rand(0,9)?> </p>
						</div>
						<div class='back'>
							<p></p>
						</div>
					</div>
				</td>
				<td>
					<div class='click panel square'>
						<div class='front'>
							<p class='PROGRESS0'> <?php echo rand(0,9)?> </p>
						</div>
						<div class='back'>
							<p></p>
						</div>
					</div>
				</td>
				<td>
					<div class='click panel square'>
						<div class='front'>
							<p class='PROGRESS1'> <?php echo rand(0,9)?> </p>
						</div>
						<div class='back'>
							<p></p>
						</div>
					</div>
				</td>
				<td>
					<div class='click panel square'>
						<div class='front'>
							<p class='PROGRESS2'> <?php echo rand(0,9)?> </p>
						</div>
						<div class='back'>
							<p></p>
						</div>
					</div>
				</td>
				<td>
					<div class='click panel square'>
						<div class='front'>
							<p class='PROGRESS3'> <?php echo rand(0,9)?> </p>
						</div>
						<div class='back'>
							<p></p>
						</div>
					</div>
				</td>
				<td>
					<div class='click panel square'>
						<div class='front'>
							<p class='PROGRESS4'> <?php echo rand(0,9)?> </p>
						</div>
						<div class='back'>
							<p></p>
						</div>
					</div>
				</td>
				<td>
					<div class='click panel square'>
						<div class='front'>
							<p class='PROGRESS5'> <?php echo rand(0,9)?> </p>
						</div>
						<div class='back'>
							<p></p>
						</div>
					</div>
				</td>
				<td>
					<div class='click panel square'>
						<div class='front'>
							<p class='PROGRESS6'> <?php echo rand(0,9)?> </p>
						</div>
						<div class='back'>
							<p></p>
						</div>
					</div>
				</td>
				<td>
					<div class='click panel square'>
						<div class='front'>
							<p class='PROGRESS7'> <?php echo rand(0,9)?> </p>
						</div>
						<div class='back'>
							<p></p>
						</div>
					</div>
				</td>
				<td>
					<div class='click panel square'>
						<div class='front'>
							<p class='STATUS'> status </p>
						</div>
						<div class='back'>
							<p></p>
						</div>
					</div>
				</td>
			</tr>
			<tr class='withdrawal0'>
				<td>
					<div class='click panel square'>
						<div class='front'>
							<p id="w">W</p>
						</div>
						<div class='back'>
							<p></p>
						</div>
					</div>
				</td>
				<td>
					<div class='click panel square'>
						<div class='front'>
							<p class='NAME'> name </p>
						</div>
						<div class='back'>
							<p></p>
						</div>
					</div>
				</td>
				<td>
					<div class='click panel square'>
						<div class='front'>
							<p class='DESTINATION'> dest </p>
						</div>
						<div class='back'>
							<p></p>
						</div>
					</div>
				</td>
				<td>
					<div class='click panel square'>
						<div class='front'>
							<p class='TRIP_DIST0'> <?php echo rand(0,9)?> </p>
						</div>
						<div class='back'>
							<p></p>
						</div>
					</div>
				</td>
				<td>
					<div class='click panel square'>
						<div class='front'>
							<p class='TRIP_DIST1'> <?php echo rand(0,9)?> </p>
						</div>
						<div class='back'>
							<p></p>
						</div>
					</div>
				</td>
				<td>
					<div class='click panel square'>
						<div class='front'>
							<p class='TRIP_DIST2'> <?php echo rand(0,9)?> </p>
						</div>
						<div class='back'>
							<p></p>
						</div>
					</div>
				</td>
				<td>
					<div class='click panel square'>
						<div class='front'>
							<p class='TRIP_DIST3'> <?php echo rand(0,9)?> </p>
						</div>
						<div class='back'>
							<p></p>
						</div>
					</div>
				</td>
				<td>
					<div class='click panel square'>
						<div class='front'>
							<p class='TRIP_DIST4'> <?php echo rand(0,9)?> </p>
						</div>
						<div class='back'>
							<p></p>
						</div>
					</div>
				</td>
				<td>
					<div class='click panel square'>
						<div class='front'>
							<p class='TRIP_DIST5'> <?php echo rand(0,9)?> </p>
						</div>
						<div class='back'>
							<p></p>
						</div>
					</div>
				</td>
				<td>
					<div class='click panel square'>
						<div class='front'>
							<p class='TRIP_DIST6'> <?php echo rand(0,9)?> </p>
						</div>
						<div class='back'>
							<p></p>
						</div>
					</div>
				</td>
				<td>
					<div class='click panel square'>
						<div class='front'>
							<p class='TRIP_DIST7'> <?php echo rand(0,9)?> </p>
						</div>
						<div class='back'>
							<p></p>
						</div>
					</div>
				</td>
				<td>
					<div class='click panel square'>
						<div class='front'>
							<p class='DURATION0'> <?php echo rand(0,9)?> </p>
						</div>
						<div class='back'>
							<p></p>
						</div>
					</div>
				</td>
				<td>
					<div class='click panel square'>
						<div class='front'>
							<p class='DURATION1'> <?php echo rand(0,9)?> </p>
						</div>
						<div class='back'>
							<p></p>
						</div>
					</div>
				</td>
				<td>
					<div class='click panel square'>
						<div class='front'>
							<p class='DURATION2'> <?php echo rand(0,9)?> </p>
						</div>
						<div class='back'>
							<p></p>
						</div>
					</div>
				</td>
				<td>
					<div class='click panel square'>
						<div class='front'>
							<p class='DURATION3'> <?php echo rand(0,9)?> </p>
						</div>
						<div class='back'>
							<p></p>
						</div>
					</div>
				</td>
				<td>
					<div class='click panel square'>
						<div class='front'>
							<p class='MILES_CHANGE0'> <?php echo rand(0,9)?> </p>
						</div>
						<div class='back'>
							<p></p>
						</div>
					</div>
				</td>
				<td>
					<div class='click panel square'>
						<div class='front'>
							<p class='MILES_CHANGE1'> <?php echo rand(0,9)?> </p>
						</div>
						<div class='back'>
							<p></p>
						</div>
					</div>
				</td>
				<td>
					<div class='click panel square'>
						<div class='front'>
							<p class='MILES_CHANGE2'> <?php echo rand(0,9)?> </p>
						</div>
						<div class='back'>
							<p></p>
						</div>
					</div>
				</td>
				<td>
					<div class='click panel square'>
						<div class='front'>
							<p class='MILES_CHANGE3'> <?php echo rand(0,9)?> </p>
						</div>
						<div class='back'>
							<p></p>
						</div>
					</div>
				</td>
				<td>
					<div class='click panel square'>
						<div class='front'>
							<p class='MILES_CHANGE4'> <?php echo rand(0,9)?> </p>
						</div>
						<div class='back'>
							<p></p>
						</div>
					</div>
				</td>
				<td>
					<div class='click panel square'>
						<div class='front'>
							<p class='MILES_CHANGE5'> <?php echo rand(0,9)?> </p>
						</div>
						<div class='back'>
							<p></p>
						</div>
					</div>
				</td>
				<td>
					<div class='click panel square'>
						<div class='front'>
							<p class='MILES_CHANGE6'> <?php echo rand(0,9)?> </p>
						</div>
						<div class='back'>
							<p></p>
						</div>
					</div>
				</td>
				<td>
					<div class='click panel square'>
						<div class='front'>
							<p class='MILES_CHANGE7'> <?php echo rand(0,9)?> </p>
						</div>
						<div class='back'>
							<p></p>
						</div>
					</div>
				</td>
				<td>
					<div class='click panel square'>
						<div class='front'>
							<p class='PROGRESS0'> <?php echo rand(0,9)?> </p>
						</div>
						<div class='back'>
							<p></p>
						</div>
					</div>
				</td>
				<td>
					<div class='click panel square'>
						<div class='front'>
							<p class='PROGRESS1'> <?php echo rand(0,9)?> </p>
						</div>
						<div class='back'>
							<p></p>
						</div>
					</div>
				</td>
				<td>
					<div class='click panel square'>
						<div class='front'>
							<p class='PROGRESS2'> <?php echo rand(0,9)?> </p>
						</div>
						<div class='back'>
							<p></p>
						</div>
					</div>
				</td>
				<td>
					<div class='click panel square'>
						<div class='front'>
							<p class='PROGRESS3'> <?php echo rand(0,9)?> </p>
						</div>
						<div class='back'>
							<p></p>
						</div>
					</div>
				</td>
				<td>
					<div class='click panel square'>
						<div class='front'>
							<p class='PROGRESS4'> <?php echo rand(0,9)?> </p>
						</div>
						<div class='back'>
							<p></p>
						</div>
					</div>
				</td>
				<td>
					<div class='click panel square'>
						<div class='front'>
							<p class='PROGRESS5'> <?php echo rand(0,9)?> </p>
						</div>
						<div class='back'>
							<p></p>
						</div>
					</div>
				</td>
				<td>
					<div class='click panel square'>
						<div class='front'>
							<p class='PROGRESS6'> <?php echo rand(0,9)?> </p>
						</div>
						<div class='back'>
							<p></p>
						</div>
					</div>
				</td>
				<td>
					<div class='click panel square'>
						<div class='front'>
							<p class='PROGRESS7'> <?php echo rand(0,9)?> </p>
						</div>
						<div class='back'>
							<p></p>
						</div>
					</div>
				</td>
				<td>
					<div class='click panel square'>
						<div class='front'>
							<p class='STATUS'> status </p>
						</div>
						<div class='back'>
							<p></p>
						</div>
					</div>
				</td>
			</tr>
			<tr class='withdrawal1'>
				<td>
					<div class='click panel square'>
						<div class='front'>
							<p id="w">W</p>
						</div>
						<div class='back'>
							<p></p>
						</div>
					</div>
				</td>
				<td>
					<div class='click panel square'>
						<div class='front'>
							<p class='NAME'> name </p>
						</div>
						<div class='back'>
							<p></p>
						</div>
					</div>
				</td>
				<td>
					<div class='click panel square'>
						<div class='front'>
							<p class='DESTINATION'> dest </p>
						</div>
						<div class='back'>
							<p></p>
						</div>
					</div>
				</td>
				<td>
					<div class='click panel square'>
						<div class='front'>
							<p class='TRIP_DIST0'> <?php echo rand(0,9)?> </p>
						</div>
						<div class='back'>
							<p></p>
						</div>
					</div>
				</td>
				<td>
					<div class='click panel square'>
						<div class='front'>
							<p class='TRIP_DIST1'> <?php echo rand(0,9)?> </p>
						</div>
						<div class='back'>
							<p></p>
						</div>
					</div>
				</td>
				<td>
					<div class='click panel square'>
						<div class='front'>
							<p class='TRIP_DIST2'> <?php echo rand(0,9)?> </p>
						</div>
						<div class='back'>
							<p></p>
						</div>
					</div>
				</td>
				<td>
					<div class='click panel square'>
						<div class='front'>
							<p class='TRIP_DIST3'> <?php echo rand(0,9)?> </p>
						</div>
						<div class='back'>
							<p></p>
						</div>
					</div>
				</td>
				<td>
					<div class='click panel square'>
						<div class='front'>
							<p class='TRIP_DIST4'> <?php echo rand(0,9)?> </p>
						</div>
						<div class='back'>
							<p></p>
						</div>
					</div>
				</td>
				<td>
					<div class='click panel square'>
						<div class='front'>
							<p class='TRIP_DIST5'> <?php echo rand(0,9)?> </p>
						</div>
						<div class='back'>
							<p></p>
						</div>
					</div>
				</td>
				<td>
					<div class='click panel square'>
						<div class='front'>
							<p class='TRIP_DIST6'> <?php echo rand(0,9)?> </p>
						</div>
						<div class='back'>
							<p></p>
						</div>
					</div>
				</td>
				<td>
					<div class='click panel square'>
						<div class='front'>
							<p class='TRIP_DIST7'> <?php echo rand(0,9)?> </p>
						</div>
						<div class='back'>
							<p></p>
						</div>
					</div>
				</td>
				<td>
					<div class='click panel square'>
						<div class='front'>
							<p class='DURATION0'> <?php echo rand(0,9)?> </p>
						</div>
						<div class='back'>
							<p></p>
						</div>
					</div>
				</td>
				<td>
					<div class='click panel square'>
						<div class='front'>
							<p class='DURATION1'> <?php echo rand(0,9)?> </p>
						</div>
						<div class='back'>
							<p></p>
						</div>
					</div>
				</td>
				<td>
					<div class='click panel square'>
						<div class='front'>
							<p class='DURATION2'> <?php echo rand(0,9)?> </p>
						</div>
						<div class='back'>
							<p></p>
						</div>
					</div>
				</td>
				<td>
					<div class='click panel square'>
						<div class='front'>
							<p class='DURATION3'> <?php echo rand(0,9)?> </p>
						</div>
						<div class='back'>
							<p></p>
						</div>
					</div>
				</td>
				<td>
					<div class='click panel square'>
						<div class='front'>
							<p class='MILES_CHANGE0'> <?php echo rand(0,9)?> </p>
						</div>
						<div class='back'>
							<p></p>
						</div>
					</div>
				</td>
				<td>
					<div class='click panel square'>
						<div class='front'>
							<p class='MILES_CHANGE1'> <?php echo rand(0,9)?> </p>
						</div>
						<div class='back'>
							<p></p>
						</div>
					</div>
				</td>
				<td>
					<div class='click panel square'>
						<div class='front'>
							<p class='MILES_CHANGE2'> <?php echo rand(0,9)?> </p>
						</div>
						<div class='back'>
							<p></p>
						</div>
					</div>
				</td>
				<td>
					<div class='click panel square'>
						<div class='front'>
							<p class='MILES_CHANGE3'> <?php echo rand(0,9)?> </p>
						</div>
						<div class='back'>
							<p></p>
						</div>
					</div>
				</td>
				<td>
					<div class='click panel square'>
						<div class='front'>
							<p class='MILES_CHANGE4'> <?php echo rand(0,9)?> </p>
						</div>
						<div class='back'>
							<p></p>
						</div>
					</div>
				</td>
				<td>
					<div class='click panel square'>
						<div class='front'>
							<p class='MILES_CHANGE5'> <?php echo rand(0,9)?> </p>
						</div>
						<div class='back'>
							<p></p>
						</div>
					</div>
				</td>
				<td>
					<div class='click panel square'>
						<div class='front'>
							<p class='MILES_CHANGE6'> <?php echo rand(0,9)?> </p>
						</div>
						<div class='back'>
							<p></p>
						</div>
					</div>
				</td>
				<td>
					<div class='click panel square'>
						<div class='front'>
							<p class='MILES_CHANGE7'> <?php echo rand(0,9)?> </p>
						</div>
						<div class='back'>
							<p></p>
						</div>
					</div>
				</td>
				<td>
					<div class='click panel square'>
						<div class='front'>
							<p class='PROGRESS0'> <?php echo rand(0,9)?> </p>
						</div>
						<div class='back'>
							<p></p>
						</div>
					</div>
				</td>
				<td>
					<div class='click panel square'>
						<div class='front'>
							<p class='PROGRESS1'> <?php echo rand(0,9)?> </p>
						</div>
						<div class='back'>
							<p></p>
						</div>
					</div>
				</td>
				<td>
					<div class='click panel square'>
						<div class='front'>
							<p class='PROGRESS2'> <?php echo rand(0,9)?> </p>
						</div>
						<div class='back'>
							<p></p>
						</div>
					</div>
				</td>
				<td>
					<div class='click panel square'>
						<div class='front'>
							<p class='PROGRESS3'> <?php echo rand(0,9)?> </p>
						</div>
						<div class='back'>
							<p></p>
						</div>
					</div>
				</td>
				<td>
					<div class='click panel square'>
						<div class='front'>
							<p class='PROGRESS4'> <?php echo rand(0,9)?> </p>
						</div>
						<div class='back'>
							<p></p>
						</div>
					</div>
				</td>
				<td>
					<div class='click panel square'>
						<div class='front'>
							<p class='PROGRESS5'> <?php echo rand(0,9)?> </p>
						</div>
						<div class='back'>
							<p></p>
						</div>
					</div>
				</td>
				<td>
					<div class='click panel square'>
						<div class='front'>
							<p class='PROGRESS6'> <?php echo rand(0,9)?> </p>
						</div>
						<div class='back'>
							<p></p>
						</div>
					</div>
				</td>
				<td>
					<div class='click panel square'>
						<div class='front'>
							<p class='PROGRESS7'> <?php echo rand(0,9)?> </p>
						</div>
						<div class='back'>
							<p></p>
						</div>
					</div>
				</td>
				<td>
					<div class='click panel square'>
						<div class='front'>
							<p class='STATUS'> status </p>
						</div>
						<div class='back'>
							<p></p>
						</div>
					</div>
				</td>
			</tr>
			<tr class='withdrawal2'>
				<td>
					<div class='click panel square'>
						<div class='front'>
							<p id="w">W</p>
						</div>
						<div class='back'>
							<p></p>
						</div>
					</div>
				</td>
				<td>
					<div class='click panel square'>
						<div class='front'>
							<p class='NAME'> name </p>
						</div>
						<div class='back'>
							<p></p>
						</div>
					</div>
				</td>
				<td>
					<div class='click panel square'>
						<div class='front'>
							<p class='DESTINATION'> dest </p>
						</div>
						<div class='back'>
							<p></p>
						</div>
					</div>
				</td>
				<td>
					<div class='click panel square'>
						<div class='front'>
							<p class='TRIP_DIST0'> <?php echo rand(0,9)?> </p>
						</div>
						<div class='back'>
							<p></p>
						</div>
					</div>
				</td>
				<td>
					<div class='click panel square'>
						<div class='front'>
							<p class='TRIP_DIST1'> <?php echo rand(0,9)?> </p>
						</div>
						<div class='back'>
							<p></p>
						</div>
					</div>
				</td>
				<td>
					<div class='click panel square'>
						<div class='front'>
							<p class='TRIP_DIST2'> <?php echo rand(0,9)?> </p>
						</div>
						<div class='back'>
							<p></p>
						</div>
					</div>
				</td>
				<td>
					<div class='click panel square'>
						<div class='front'>
							<p class='TRIP_DIST3'> <?php echo rand(0,9)?> </p>
						</div>
						<div class='back'>
							<p></p>
						</div>
					</div>
				</td>
				<td>
					<div class='click panel square'>
						<div class='front'>
							<p class='TRIP_DIST4'> <?php echo rand(0,9)?> </p>
						</div>
						<div class='back'>
							<p></p>
						</div>
					</div>
				</td>
				<td>
					<div class='click panel square'>
						<div class='front'>
							<p class='TRIP_DIST5'> <?php echo rand(0,9)?> </p>
						</div>
						<div class='back'>
							<p></p>
						</div>
					</div>
				</td>
				<td>
					<div class='click panel square'>
						<div class='front'>
							<p class='TRIP_DIST6'> <?php echo rand(0,9)?> </p>
						</div>
						<div class='back'>
							<p></p>
						</div>
					</div>
				</td>
				<td>
					<div class='click panel square'>
						<div class='front'>
							<p class='TRIP_DIST7'> <?php echo rand(0,9)?> </p>
						</div>
						<div class='back'>
							<p></p>
						</div>
					</div>
				</td>
				<td>
					<div class='click panel square'>
						<div class='front'>
							<p class='DURATION0'> <?php echo rand(0,9)?> </p>
						</div>
						<div class='back'>
							<p></p>
						</div>
					</div>
				</td>
				<td>
					<div class='click panel square'>
						<div class='front'>
							<p class='DURATION1'> <?php echo rand(0,9)?> </p>
						</div>
						<div class='back'>
							<p></p>
						</div>
					</div>
				</td>
				<td>
					<div class='click panel square'>
						<div class='front'>
							<p class='DURATION2'> <?php echo rand(0,9)?> </p>
						</div>
						<div class='back'>
							<p></p>
						</div>
					</div>
				</td>
				<td>
					<div class='click panel square'>
						<div class='front'>
							<p class='DURATION3'> <?php echo rand(0,9)?> </p>
						</div>
						<div class='back'>
							<p></p>
						</div>
					</div>
				</td>
				<td>
					<div class='click panel square'>
						<div class='front'>
							<p class='MILES_CHANGE0'> <?php echo rand(0,9)?> </p>
						</div>
						<div class='back'>
							<p></p>
						</div>
					</div>
				</td>
				<td>
					<div class='click panel square'>
						<div class='front'>
							<p class='MILES_CHANGE1'> <?php echo rand(0,9)?> </p>
						</div>
						<div class='back'>
							<p></p>
						</div>
					</div>
				</td>
				<td>
					<div class='click panel square'>
						<div class='front'>
							<p class='MILES_CHANGE2'> <?php echo rand(0,9)?> </p>
						</div>
						<div class='back'>
							<p></p>
						</div>
					</div>
				</td>
				<td>
					<div class='click panel square'>
						<div class='front'>
							<p class='MILES_CHANGE3'> <?php echo rand(0,9)?> </p>
						</div>
						<div class='back'>
							<p></p>
						</div>
					</div>
				</td>
				<td>
					<div class='click panel square'>
						<div class='front'>
							<p class='MILES_CHANGE4'> <?php echo rand(0,9)?> </p>
						</div>
						<div class='back'>
							<p></p>
						</div>
					</div>
				</td>
				<td>
					<div class='click panel square'>
						<div class='front'>
							<p class='MILES_CHANGE5'> <?php echo rand(0,9)?> </p>
						</div>
						<div class='back'>
							<p></p>
						</div>
					</div>
				</td>
				<td>
					<div class='click panel square'>
						<div class='front'>
							<p class='MILES_CHANGE6'> <?php echo rand(0,9)?> </p>
						</div>
						<div class='back'>
							<p></p>
						</div>
					</div>
				</td>
				<td>
					<div class='click panel square'>
						<div class='front'>
							<p class='MILES_CHANGE7'> <?php echo rand(0,9)?> </p>
						</div>
						<div class='back'>
							<p></p>
						</div>
					</div>
				</td>
				<td>
					<div class='click panel square'>
						<div class='front'>
							<p class='PROGRESS0'> <?php echo rand(0,9)?> </p>
						</div>
						<div class='back'>
							<p></p>
						</div>
					</div>
				</td>
				<td>
					<div class='click panel square'>
						<div class='front'>
							<p class='PROGRESS1'> <?php echo rand(0,9)?> </p>
						</div>
						<div class='back'>
							<p></p>
						</div>
					</div>
				</td>
				<td>
					<div class='click panel square'>
						<div class='front'>
							<p class='PROGRESS2'> <?php echo rand(0,9)?> </p>
						</div>
						<div class='back'>
							<p></p>
						</div>
					</div>
				</td>
				<td>
					<div class='click panel square'>
						<div class='front'>
							<p class='PROGRESS3'> <?php echo rand(0,9)?> </p>
						</div>
						<div class='back'>
							<p></p>
						</div>
					</div>
				</td>
				<td>
					<div class='click panel square'>
						<div class='front'>
							<p class='PROGRESS4'> <?php echo rand(0,9)?> </p>
						</div>
						<div class='back'>
							<p></p>
						</div>
					</div>
				</td>
				<td>
					<div class='click panel square'>
						<div class='front'>
							<p class='PROGRESS5'> <?php echo rand(0,9)?> </p>
						</div>
						<div class='back'>
							<p></p>
						</div>
					</div>
				</td>
				<td>
					<div class='click panel square'>
						<div class='front'>
							<p class='PROGRESS6'> <?php echo rand(0,9)?> </p>
						</div>
						<div class='back'>
							<p></p>
						</div>
					</div>
				</td>
				<td>
					<div class='click panel square'>
						<div class='front'>
							<p class='PROGRESS7'> <?php echo rand(0,9)?> </p>
						</div>
						<div class='back'>
							<p></p>
						</div>
					</div>
				</td>
				<td>
					<div class='click panel square'>
						<div class='front'>
							<p class='STATUS'> status </p>
						</div>
						<div class='back'>
							<p></p>
						</div>
					</div>
				</td>
			</tr>
			<tr class='goal0'>
				<td>
					<div class='click panel square'>
						<div class='front'>
							<p id="g">G</p>
						</div>
						<div class='back'>
							<p></p>
						</div>
					</div>
				</td>
				<td>
					<div class='click panel square'>
						<div class='front'>
							<p class='NAME'> name </p>
						</div>
						<div class='back'>
							<p></p>
						</div>
					</div>
				</td>
				<td>
					<div class='click panel square'>
						<div class='front'>
							<p class='DESTINATION'> dest </p>
						</div>
						<div class='back'>
							<p></p>
						</div>
					</div>
				</td>
				<td>
					<div class='click panel square'>
						<div class='front'>
							<p class='TRIP_DIST0'> <?php echo rand(0,9)?> </p>
						</div>
						<div class='back'>
							<p></p>
						</div>
					</div>
				</td>
				<td>
					<div class='click panel square'>
						<div class='front'>
							<p class='TRIP_DIST1'> <?php echo rand(0,9)?> </p>
						</div>
						<div class='back'>
							<p></p>
						</div>
					</div>
				</td>
				<td>
					<div class='click panel square'>
						<div class='front'>
							<p class='TRIP_DIST2'> <?php echo rand(0,9)?> </p>
						</div>
						<div class='back'>
							<p></p>
						</div>
					</div>
				</td>
				<td>
					<div class='click panel square'>
						<div class='front'>
							<p class='TRIP_DIST3'> <?php echo rand(0,9)?> </p>
						</div>
						<div class='back'>
							<p></p>
						</div>
					</div>
				</td>
				<td>
					<div class='click panel square'>
						<div class='front'>
							<p class='TRIP_DIST4'> <?php echo rand(0,9)?> </p>
						</div>
						<div class='back'>
							<p></p>
						</div>
					</div>
				</td>
				<td>
					<div class='click panel square'>
						<div class='front'>
							<p class='TRIP_DIST5'> <?php echo rand(0,9)?> </p>
						</div>
						<div class='back'>
							<p></p>
						</div>
					</div>
				</td>
				<td>
					<div class='click panel square'>
						<div class='front'>
							<p class='TRIP_DIST6'> <?php echo rand(0,9)?> </p>
						</div>
						<div class='back'>
							<p></p>
						</div>
					</div>
				</td>
				<td>
					<div class='click panel square'>
						<div class='front'>
							<p class='TRIP_DIST7'> <?php echo rand(0,9)?> </p>
						</div>
						<div class='back'>
							<p></p>
						</div>
					</div>
				</td>
				<td>
					<div class='click panel square'>
						<div class='front'>
							<p class='DURATION0'> <?php echo rand(0,9)?> </p>
						</div>
						<div class='back'>
							<p></p>
						</div>
					</div>
				</td>
				<td>
					<div class='click panel square'>
						<div class='front'>
							<p class='DURATION1'> <?php echo rand(0,9)?> </p>
						</div>
						<div class='back'>
							<p></p>
						</div>
					</div>
				</td>
				<td>
					<div class='click panel square'>
						<div class='front'>
							<p class='DURATION2'> <?php echo rand(0,9)?> </p>
						</div>
						<div class='back'>
							<p></p>
						</div>
					</div>
				</td>
				<td>
					<div class='click panel square'>
						<div class='front'>
							<p class='DURATION3'> <?php echo rand(0,9)?> </p>
						</div>
						<div class='back'>
							<p></p>
						</div>
					</div>
				</td>
				<td>
					<div class='click panel square'>
						<div class='front'>
							<p class='MILES_CHANGE0'> <?php echo rand(0,9)?> </p>
						</div>
						<div class='back'>
							<p></p>
						</div>
					</div>
				</td>
				<td>
					<div class='click panel square'>
						<div class='front'>
							<p class='MILES_CHANGE1'> <?php echo rand(0,9)?> </p>
						</div>
						<div class='back'>
							<p></p>
						</div>
					</div>
				</td>
				<td>
					<div class='click panel square'>
						<div class='front'>
							<p class='MILES_CHANGE2'> <?php echo rand(0,9)?> </p>
						</div>
						<div class='back'>
							<p></p>
						</div>
					</div>
				</td>
				<td>
					<div class='click panel square'>
						<div class='front'>
							<p class='MILES_CHANGE3'> <?php echo rand(0,9)?> </p>
						</div>
						<div class='back'>
							<p></p>
						</div>
					</div>
				</td>
				<td>
					<div class='click panel square'>
						<div class='front'>
							<p class='MILES_CHANGE4'> <?php echo rand(0,9)?> </p>
						</div>
						<div class='back'>
							<p></p>
						</div>
					</div>
				</td>
				<td>
					<div class='click panel square'>
						<div class='front'>
							<p class='MILES_CHANGE5'> <?php echo rand(0,9)?> </p>
						</div>
						<div class='back'>
							<p></p>
						</div>
					</div>
				</td>
				<td>
					<div class='click panel square'>
						<div class='front'>
							<p class='MILES_CHANGE6'> <?php echo rand(0,9)?> </p>
						</div>
						<div class='back'>
							<p></p>
						</div>
					</div>
				</td>
				<td>
					<div class='click panel square'>
						<div class='front'>
							<p class='MILES_CHANGE7'> <?php echo rand(0,9)?> </p>
						</div>
						<div class='back'>
							<p></p>
						</div>
					</div>
				</td>
				<td>
					<div class='click panel square'>
						<div class='front'>
							<p class='PROGRESS0'> <?php echo rand(0,9)?> </p>
						</div>
						<div class='back'>
							<p></p>
						</div>
					</div>
				</td>
				<td>
					<div class='click panel square'>
						<div class='front'>
							<p class='PROGRESS1'> <?php echo rand(0,9)?> </p>
						</div>
						<div class='back'>
							<p></p>
						</div>
					</div>
				</td>
				<td>
					<div class='click panel square'>
						<div class='front'>
							<p class='PROGRESS2'> <?php echo rand(0,9)?> </p>
						</div>
						<div class='back'>
							<p></p>
						</div>
					</div>
				</td>
				<td>
					<div class='click panel square'>
						<div class='front'>
							<p class='PROGRESS3'> <?php echo rand(0,9)?> </p>
						</div>
						<div class='back'>
							<p></p>
						</div>
					</div>
				</td>
				<td>
					<div class='click panel square'>
						<div class='front'>
							<p class='PROGRESS4'> <?php echo rand(0,9)?> </p>
						</div>
						<div class='back'>
							<p></p>
						</div>
					</div>
				</td>
				<td>
					<div class='click panel square'>
						<div class='front'>
							<p class='PROGRESS5'> <?php echo rand(0,9)?> </p>
						</div>
						<div class='back'>
							<p></p>
						</div>
					</div>
				</td>
				<td>
					<div class='click panel square'>
						<div class='front'>
							<p class='PROGRESS6'> <?php echo rand(0,9)?> </p>
						</div>
						<div class='back'>
							<p></p>
						</div>
					</div>
				</td>
				<td>
					<div class='click panel square'>
						<div class='front'>
							<p class='PROGRESS7'> <?php echo rand(0,9)?> </p>
						</div>
						<div class='back'>
							<p></p>
						</div>
					</div>
				</td>
				<td>
					<div class='click panel square'>
						<div class='front'>
							<p class='STATUS'> status </p>
						</div>
						<div class='back'>
							<p></p>
						</div>
					</div>
				</td>
			</tr>
			<tr class='goal1'>
				<td>
					<div class='click panel square'>
						<div class='front'>
							<p id="g">G</p>
						</div>
						<div class='back'>
							<p></p>
						</div>
					</div>
				</td>
				<td>
					<div class='click panel square'>
						<div class='front'>
							<p class='NAME'> name </p>
						</div>
						<div class='back'>
							<p></p>
						</div>
					</div>
				</td>
				<td>
					<div class='click panel square'>
						<div class='front'>
							<p class='DESTINATION'> dest </p>
						</div>
						<div class='back'>
							<p></p>
						</div>
					</div>
				</td>
				<td>
					<div class='click panel square'>
						<div class='front'>
							<p class='TRIP_DIST0'> <?php echo rand(0,9)?> </p>
						</div>
						<div class='back'>
							<p></p>
						</div>
					</div>
				</td>
				<td>
					<div class='click panel square'>
						<div class='front'>
							<p class='TRIP_DIST1'> <?php echo rand(0,9)?> </p>
						</div>
						<div class='back'>
							<p></p>
						</div>
					</div>
				</td>
				<td>
					<div class='click panel square'>
						<div class='front'>
							<p class='TRIP_DIST2'> <?php echo rand(0,9)?> </p>
						</div>
						<div class='back'>
							<p></p>
						</div>
					</div>
				</td>
				<td>
					<div class='click panel square'>
						<div class='front'>
							<p class='TRIP_DIST3'> <?php echo rand(0,9)?> </p>
						</div>
						<div class='back'>
							<p></p>
						</div>
					</div>
				</td>
				<td>
					<div class='click panel square'>
						<div class='front'>
							<p class='TRIP_DIST4'> <?php echo rand(0,9)?> </p>
						</div>
						<div class='back'>
							<p></p>
						</div>
					</div>
				</td>
				<td>
					<div class='click panel square'>
						<div class='front'>
							<p class='TRIP_DIST5'> <?php echo rand(0,9)?> </p>
						</div>
						<div class='back'>
							<p></p>
						</div>
					</div>
				</td>
				<td>
					<div class='click panel square'>
						<div class='front'>
							<p class='TRIP_DIST6'> <?php echo rand(0,9)?> </p>
						</div>
						<div class='back'>
							<p></p>
						</div>
					</div>
				</td>
				<td>
					<div class='click panel square'>
						<div class='front'>
							<p class='TRIP_DIST7'> <?php echo rand(0,9)?> </p>
						</div>
						<div class='back'>
							<p></p>
						</div>
					</div>
				</td>
				<td>
					<div class='click panel square'>
						<div class='front'>
							<p class='DURATION0'> <?php echo rand(0,9)?> </p>
						</div>
						<div class='back'>
							<p></p>
						</div>
					</div>
				</td>
				<td>
					<div class='click panel square'>
						<div class='front'>
							<p class='DURATION1'> <?php echo rand(0,9)?> </p>
						</div>
						<div class='back'>
							<p></p>
						</div>
					</div>
				</td>
				<td>
					<div class='click panel square'>
						<div class='front'>
							<p class='DURATION2'> <?php echo rand(0,9)?> </p>
						</div>
						<div class='back'>
							<p></p>
						</div>
					</div>
				</td>
				<td>
					<div class='click panel square'>
						<div class='front'>
							<p class='DURATION3'> <?php echo rand(0,9)?> </p>
						</div>
						<div class='back'>
							<p></p>
						</div>
					</div>
				</td>
				<td>
					<div class='click panel square'>
						<div class='front'>
							<p class='MILES_CHANGE0'> <?php echo rand(0,9)?> </p>
						</div>
						<div class='back'>
							<p></p>
						</div>
					</div>
				</td>
				<td>
					<div class='click panel square'>
						<div class='front'>
							<p class='MILES_CHANGE1'> <?php echo rand(0,9)?> </p>
						</div>
						<div class='back'>
							<p></p>
						</div>
					</div>
				</td>
				<td>
					<div class='click panel square'>
						<div class='front'>
							<p class='MILES_CHANGE2'> <?php echo rand(0,9)?> </p>
						</div>
						<div class='back'>
							<p></p>
						</div>
					</div>
				</td>
				<td>
					<div class='click panel square'>
						<div class='front'>
							<p class='MILES_CHANGE3'> <?php echo rand(0,9)?> </p>
						</div>
						<div class='back'>
							<p></p>
						</div>
					</div>
				</td>
				<td>
					<div class='click panel square'>
						<div class='front'>
							<p class='MILES_CHANGE4'> <?php echo rand(0,9)?> </p>
						</div>
						<div class='back'>
							<p></p>
						</div>
					</div>
				</td>
				<td>
					<div class='click panel square'>
						<div class='front'>
							<p class='MILES_CHANGE5'> <?php echo rand(0,9)?> </p>
						</div>
						<div class='back'>
							<p></p>
						</div>
					</div>
				</td>
				<td>
					<div class='click panel square'>
						<div class='front'>
							<p class='MILES_CHANGE6'> <?php echo rand(0,9)?> </p>
						</div>
						<div class='back'>
							<p></p>
						</div>
					</div>
				</td>
				<td>
					<div class='click panel square'>
						<div class='front'>
							<p class='MILES_CHANGE7'> <?php echo rand(0,9)?> </p>
						</div>
						<div class='back'>
							<p></p>
						</div>
					</div>
				</td>
				<td>
					<div class='click panel square'>
						<div class='front'>
							<p class='PROGRESS0'> <?php echo rand(0,9)?> </p>
						</div>
						<div class='back'>
							<p></p>
						</div>
					</div>
				</td>
				<td>
					<div class='click panel square'>
						<div class='front'>
							<p class='PROGRESS1'> <?php echo rand(0,9)?> </p>
						</div>
						<div class='back'>
							<p></p>
						</div>
					</div>
				</td>
				<td>
					<div class='click panel square'>
						<div class='front'>
							<p class='PROGRESS2'> <?php echo rand(0,9)?> </p>
						</div>
						<div class='back'>
							<p></p>
						</div>
					</div>
				</td>
				<td>
					<div class='click panel square'>
						<div class='front'>
							<p class='PROGRESS3'> <?php echo rand(0,9)?> </p>
						</div>
						<div class='back'>
							<p></p>
						</div>
					</div>
				</td>
				<td>
					<div class='click panel square'>
						<div class='front'>
							<p class='PROGRESS4'> <?php echo rand(0,9)?> </p>
						</div>
						<div class='back'>
							<p></p>
						</div>
					</div>
				</td>
				<td>
					<div class='click panel square'>
						<div class='front'>
							<p class='PROGRESS5'> <?php echo rand(0,9)?> </p>
						</div>
						<div class='back'>
							<p></p>
						</div>
					</div>
				</td>
				<td>
					<div class='click panel square'>
						<div class='front'>
							<p class='PROGRESS6'> <?php echo rand(0,9)?> </p>
						</div>
						<div class='back'>
							<p></p>
						</div>
					</div>
				</td>
				<td>
					<div class='click panel square'>
						<div class='front'>
							<p class='PROGRESS7'> <?php echo rand(0,9)?> </p>
						</div>
						<div class='back'>
							<p></p>
						</div>
					</div>
				</td>
				<td>
					<div class='click panel square'>
						<div class='front'>
							<p class='STATUS'> status </p>
						</div>
						<div class='back'>
							<p></p>
						</div>
					</div>
				</td>
			</tr>
			<tr class='goal2'>
				<td>
					<div class='click panel square'>
						<div class='front'>
							<p id="g">G</p>
						</div>
						<div class='back'>
							<p></p>
						</div>
					</div>
				</td>
				<td>
					<div class='click panel square'>
						<div class='front'>
							<p class='NAME'> name </p>
						</div>
						<div class='back'>
							<p></p>
						</div>
					</div>
				</td>
				<td>
					<div class='click panel square'>
						<div class='front'>
							<p class='DESTINATION'> dest </p>
						</div>
						<div class='back'>
							<p></p>
						</div>
					</div>
				</td>
				<td>
					<div class='click panel square'>
						<div class='front'>
							<p class='TRIP_DIST0'> <?php echo rand(0,9)?> </p>
						</div>
						<div class='back'>
							<p></p>
						</div>
					</div>
				</td>
				<td>
					<div class='click panel square'>
						<div class='front'>
							<p class='TRIP_DIST1'> <?php echo rand(0,9)?> </p>
						</div>
						<div class='back'>
							<p></p>
						</div>
					</div>
				</td>
				<td>
					<div class='click panel square'>
						<div class='front'>
							<p class='TRIP_DIST2'> <?php echo rand(0,9)?> </p>
						</div>
						<div class='back'>
							<p></p>
						</div>
					</div>
				</td>
				<td>
					<div class='click panel square'>
						<div class='front'>
							<p class='TRIP_DIST3'> <?php echo rand(0,9)?> </p>
						</div>
						<div class='back'>
							<p></p>
						</div>
					</div>
				</td>
				<td>
					<div class='click panel square'>
						<div class='front'>
							<p class='TRIP_DIST4'> <?php echo rand(0,9)?> </p>
						</div>
						<div class='back'>
							<p></p>
						</div>
					</div>
				</td>
				<td>
					<div class='click panel square'>
						<div class='front'>
							<p class='TRIP_DIST5'> <?php echo rand(0,9)?> </p>
						</div>
						<div class='back'>
							<p></p>
						</div>
					</div>
				</td>
				<td>
					<div class='click panel square'>
						<div class='front'>
							<p class='TRIP_DIST6'> <?php echo rand(0,9)?> </p>
						</div>
						<div class='back'>
							<p></p>
						</div>
					</div>
				</td>
				<td>
					<div class='click panel square'>
						<div class='front'>
							<p class='TRIP_DIST7'> <?php echo rand(0,9)?> </p>
						</div>
						<div class='back'>
							<p></p>
						</div>
					</div>
				</td>
				<td>
					<div class='click panel square'>
						<div class='front'>
							<p class='DURATION0'> <?php echo rand(0,9)?> </p>
						</div>
						<div class='back'>
							<p></p>
						</div>
					</div>
				</td>
				<td>
					<div class='click panel square'>
						<div class='front'>
							<p class='DURATION1'> <?php echo rand(0,9)?> </p>
						</div>
						<div class='back'>
							<p></p>
						</div>
					</div>
				</td>
				<td>
					<div class='click panel square'>
						<div class='front'>
							<p class='DURATION2'> <?php echo rand(0,9)?> </p>
						</div>
						<div class='back'>
							<p></p>
						</div>
					</div>
				</td>
				<td>
					<div class='click panel square'>
						<div class='front'>
							<p class='DURATION3'> <?php echo rand(0,9)?> </p>
						</div>
						<div class='back'>
							<p></p>
						</div>
					</div>
				</td>
				<td>
					<div class='click panel square'>
						<div class='front'>
							<p class='MILES_CHANGE0'> <?php echo rand(0,9)?> </p>
						</div>
						<div class='back'>
							<p></p>
						</div>
					</div>
				</td>
				<td>
					<div class='click panel square'>
						<div class='front'>
							<p class='MILES_CHANGE1'> <?php echo rand(0,9)?> </p>
						</div>
						<div class='back'>
							<p></p>
						</div>
					</div>
				</td>
				<td>
					<div class='click panel square'>
						<div class='front'>
							<p class='MILES_CHANGE2'> <?php echo rand(0,9)?> </p>
						</div>
						<div class='back'>
							<p></p>
						</div>
					</div>
				</td>
				<td>
					<div class='click panel square'>
						<div class='front'>
							<p class='MILES_CHANGE3'> <?php echo rand(0,9)?> </p>
						</div>
						<div class='back'>
							<p></p>
						</div>
					</div>
				</td>
				<td>
					<div class='click panel square'>
						<div class='front'>
							<p class='MILES_CHANGE4'> <?php echo rand(0,9)?> </p>
						</div>
						<div class='back'>
							<p></p>
						</div>
					</div>
				</td>
				<td>
					<div class='click panel square'>
						<div class='front'>
							<p class='MILES_CHANGE5'> <?php echo rand(0,9)?> </p>
						</div>
						<div class='back'>
							<p></p>
						</div>
					</div>
				</td>
				<td>
					<div class='click panel square'>
						<div class='front'>
							<p class='MILES_CHANGE6'> <?php echo rand(0,9)?> </p>
						</div>
						<div class='back'>
							<p></p>
						</div>
					</div>
				</td>
				<td>
					<div class='click panel square'>
						<div class='front'>
							<p class='MILES_CHANGE7'> <?php echo rand(0,9)?> </p>
						</div>
						<div class='back'>
							<p></p>
						</div>
					</div>
				</td>
				<td>
					<div class='click panel square'>
						<div class='front'>
							<p class='PROGRESS0'> <?php echo rand(0,9)?> </p>
						</div>
						<div class='back'>
							<p></p>
						</div>
					</div>
				</td>
				<td>
					<div class='click panel square'>
						<div class='front'>
							<p class='PROGRESS1'> <?php echo rand(0,9)?> </p>
						</div>
						<div class='back'>
							<p></p>
						</div>
					</div>
				</td>
				<td>
					<div class='click panel square'>
						<div class='front'>
							<p class='PROGRESS2'> <?php echo rand(0,9)?> </p>
						</div>
						<div class='back'>
							<p></p>
						</div>
					</div>
				</td>
				<td>
					<div class='click panel square'>
						<div class='front'>
							<p class='PROGRESS3'> <?php echo rand(0,9)?> </p>
						</div>
						<div class='back'>
							<p></p>
						</div>
					</div>
				</td>
				<td>
					<div class='click panel square'>
						<div class='front'>
							<p class='PROGRESS4'> <?php echo rand(0,9)?> </p>
						</div>
						<div class='back'>
							<p></p>
						</div>
					</div>
				</td>
				<td>
					<div class='click panel square'>
						<div class='front'>
							<p class='PROGRESS5'> <?php echo rand(0,9)?> </p>
						</div>
						<div class='back'>
							<p></p>
						</div>
					</div>
				</td>
				<td>
					<div class='click panel square'>
						<div class='front'>
							<p class='PROGRESS6'> <?php echo rand(0,9)?> </p>
						</div>
						<div class='back'>
							<p></p>
						</div>
					</div>
				</td>
				<td>
					<div class='click panel square'>
						<div class='front'>
							<p class='PROGRESS7'> <?php echo rand(0,9)?> </p>
						</div>
						<div class='back'>
							<p></p>
						</div>
					</div>
				</td>
				<td>
					<div class='click panel square'>
						<div class='front'>
							<p class='STATUS'> status </p>
						</div>
						<div class='back'>
							<p></p>
						</div>
					</div>
				</td>
			</tr>
		</table>
	</div>

<script src="http://code.jquery.com/jquery-1.7.1.min.js"></script>
<script>

setInterval(function(){ 

	$.getJSON('TrainData.php', function(data) {


	for (var i in data.TransObject) {

		var rowData = data.TransObject[i];

		for(var k in rowData){
			var $pToUpdate = $(rowData["selector"] + ' p.' + k);

			// setting the value of rowData's k into the selector for that k
			var old = $pToUpdate.html();

		 	if(old != rowData[k]){
				$pToUpdate.html(rowData[k]); // definitely works
				// setTimeout(function(){
				$pToUpdate.parent().parent().toggleClass('flip');

			}

		}
	}
	});
}, 10000);

</script>

	</body>
</html>