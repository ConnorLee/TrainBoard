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
<<<<<<< HEAD
        		
        			<th>TYPE</th>
        		
        			<th>NAME</th>
        		
        			<th>DESTINATION</th>
        	
        			<th colspan= "8">TRIP DISTANCE</th>
        		
        			<th colspan = "4">DURATION</th>
        		
        			<th colspan = "8">MILES CHANGE</th>
        		
        			<th colspan ="8">PROGRESS</th>
        		
        			<th>STATUS</th>
        		
=======
        		<td>
        			<h2>TYPE</h2>
        		</td>
        		<td colspan = "12">
        			<h2>NAME</h2>
        		</td>
        		<td>
        			<h2>DESTINATION</h2>
        		</td>
        		<td colspan = "8">
        			<h2>TRIP DISTANCE</h2>
        		</td>
        		<td colspan = "4">
        			<h2>DURATION</h2>
        		</td>
        		<td colspan = "8">
        			<h2>MILES CHANGE</h2>
        		</td>
        		<td colspan = "8">
        			<h2>PROGRESS</h2>
        		</td>
        		<td>
        			<h2>STATUS</h2>
        		</td>
>>>>>>> 8109e41f1f267cc9fbc1c8fa4fa716bf870e30b7
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
							<p class='NAME0'> n </p>
						</div>
						<div class='back'>
							<p></p>
						</div>
					</div>
				</td>
								<td>
					<div class='click panel square'>
						<div class='front'>
							<p class='NAME1'> a </p>
						</div>
						<div class='back'>
							<p></p>
						</div>
					</div>
				</td>
								<td>
					<div class='click panel square'>
						<div class='front'>
<<<<<<< HEAD
							<p class='TRIP_DIST0'> <?php echo rand(0,9)?> </p>
=======
							<p class='NAME2'> m </p>
>>>>>>> 8109e41f1f267cc9fbc1c8fa4fa716bf870e30b7
						</div>
						<div class='back'>
							<p></p>
						</div>
					</div>
				</td>
								<td>
					<div class='click panel square'>
						<div class='front'>
<<<<<<< HEAD
							<p class='TRIP_DIST1'> <?php echo rand(0,9)?> </p>
=======
							<p class='NAME3'> e </p>
>>>>>>> 8109e41f1f267cc9fbc1c8fa4fa716bf870e30b7
						</div>
						<div class='back'>
							<p></p>
						</div>
					</div>
				</td>
								<td>
					<div class='click panel square'>
						<div class='front'>
<<<<<<< HEAD
							<p class='TRIP_DIST2'> <?php echo rand(0,9)?> </p>
=======
							<p class='NAME4'> n </p>
>>>>>>> 8109e41f1f267cc9fbc1c8fa4fa716bf870e30b7
						</div>
						<div class='back'>
							<p></p>
						</div>
					</div>
				</td>
								<td>
					<div class='click panel square'>
						<div class='front'>
<<<<<<< HEAD
							<p class='TRIP_DIST3'> <?php echo rand(0,9)?> </p>
=======
							<p class='NAME5'> a </p>
>>>>>>> 8109e41f1f267cc9fbc1c8fa4fa716bf870e30b7
						</div>
						<div class='back'>
							<p></p>
						</div>
					</div>
				</td>
								<td>
					<div class='click panel square'>
						<div class='front'>
<<<<<<< HEAD
							<p class='TRIP_DIST4'> <?php echo rand(0,9)?> </p>
=======
							<p class='NAME6'> m </p>
>>>>>>> 8109e41f1f267cc9fbc1c8fa4fa716bf870e30b7
						</div>
						<div class='back'>
							<p></p>
						</div>
					</div>
				</td>
								<td>
					<div class='click panel square'>
						<div class='front'>
<<<<<<< HEAD
							<p class='TRIP_DIST5'> <?php echo rand(0,9)?> </p>
=======
							<p class='NAME7'> e </p>
>>>>>>> 8109e41f1f267cc9fbc1c8fa4fa716bf870e30b7
						</div>
						<div class='back'>
							<p></p>
						</div>
					</div>
				</td>
								<td>
					<div class='click panel square'>
						<div class='front'>
<<<<<<< HEAD
							<p class='TRIP_DIST6'> <?php echo rand(0,9)?> </p>
=======
							<p class='NAME8'> n </p>
>>>>>>> 8109e41f1f267cc9fbc1c8fa4fa716bf870e30b7
						</div>
						<div class='back'>
							<p></p>
						</div>
					</div>
				</td>
								<td>
					<div class='click panel square'>
						<div class='front'>
<<<<<<< HEAD
							<p class='TRIP_DIST7'> <?php echo rand(0,9)?> </p>
=======
							<p class='NAME9'> a </p>
>>>>>>> 8109e41f1f267cc9fbc1c8fa4fa716bf870e30b7
						</div>
						<div class='back'>
							<p></p>
						</div>
					</div>
				</td>
								<td>
					<div class='click panel square'>
						<div class='front'>
<<<<<<< HEAD
							<p class='DURATION0'> <?php echo rand(0,9)?> </p>
=======
							<p class='NAME10'> m </p>
>>>>>>> 8109e41f1f267cc9fbc1c8fa4fa716bf870e30b7
						</div>
						<div class='back'>
							<p></p>
						</div>
					</div>
				</td>
								<td>
					<div class='click panel square'>
						<div class='front'>
<<<<<<< HEAD
							<p class='DURATION1'> <?php echo rand(0,9)?> </p>
=======
							<p class='NAME11'> e </p>
>>>>>>> 8109e41f1f267cc9fbc1c8fa4fa716bf870e30b7
						</div>
						<div class='back'>
							<p></p>
						</div>
					</div>
				</td>
				<td>
					<div class='click panel square'>
						<div class='front'>
<<<<<<< HEAD
							<p class='DURATION2'> <?php echo rand(0,9)?> </p>
=======
							<p class='DESTINATION'> dest </p>
>>>>>>> 8109e41f1f267cc9fbc1c8fa4fa716bf870e30b7
						</div>
						<div class='back'>
							<p></p>
						</div>
					</div>
				</td>
				<td>
					<div class='click panel square'>
						<div class='front'>
<<<<<<< HEAD
							<p class='DURATION3'> <?php echo rand(0,9)?> </p>
=======
							<p class='TRIP_DIST0'> 0 </p>
>>>>>>> 8109e41f1f267cc9fbc1c8fa4fa716bf870e30b7
						</div>
						<div class='back'>
							<p></p>
						</div>
					</div>
				</td>
				<td>
					<div class='click panel square'>
						<div class='front'>
<<<<<<< HEAD
							<p class='MILES_CHANGE0'> <?php echo rand(0,9)?> </p>
=======
							<p class='TRIP_DIST1'> 1 </p>
>>>>>>> 8109e41f1f267cc9fbc1c8fa4fa716bf870e30b7
						</div>
						<div class='back'>
							<p></p>
						</div>
					</div>
				</td>
				<td>
					<div class='click panel square'>
						<div class='front'>
<<<<<<< HEAD
							<p class='MILES_CHANGE1'> <?php echo rand(0,9)?> </p>
=======
							<p class='TRIP_DIST2'> 2 </p>
>>>>>>> 8109e41f1f267cc9fbc1c8fa4fa716bf870e30b7
						</div>
						<div class='back'>
							<p></p>
						</div>
					</div>
				</td>
				<td>
					<div class='click panel square'>
						<div class='front'>
<<<<<<< HEAD
							<p class='MILES_CHANGE2'> <?php echo rand(0,9)?> </p>
=======
							<p class='TRIP_DIST3'> 3 </p>
>>>>>>> 8109e41f1f267cc9fbc1c8fa4fa716bf870e30b7
						</div>
						<div class='back'>
							<p></p>
						</div>
					</div>
				</td>
				<td>
					<div class='click panel square'>
						<div class='front'>
<<<<<<< HEAD
							<p class='MILES_CHANGE3'> <?php echo rand(0,9)?> </p>
=======
							<p class='TRIP_DIST4'> 4 </p>
>>>>>>> 8109e41f1f267cc9fbc1c8fa4fa716bf870e30b7
						</div>
						<div class='back'>
							<p></p>
						</div>
					</div>
				</td>
				<td>
					<div class='click panel square'>
						<div class='front'>
<<<<<<< HEAD
							<p class='MILES_CHANGE4'> <?php echo rand(0,9)?> </p>
=======
							<p class='TRIP_DIST5'> 5 </p>
>>>>>>> 8109e41f1f267cc9fbc1c8fa4fa716bf870e30b7
						</div>
						<div class='back'>
							<p></p>
						</div>
					</div>
				</td>
				<td>
					<div class='click panel square'>
						<div class='front'>
<<<<<<< HEAD
							<p class='MILES_CHANGE5'> <?php echo rand(0,9)?> </p>
=======
							<p class='TRIP_DIST6'> 6 </p>
>>>>>>> 8109e41f1f267cc9fbc1c8fa4fa716bf870e30b7
						</div>
						<div class='back'>
							<p></p>
						</div>
					</div>
				</td>
				<td>
					<div class='click panel square'>
						<div class='front'>
<<<<<<< HEAD
							<p class='MILES_CHANGE6'> <?php echo rand(0,9)?> </p>
=======
							<p class='TRIP_DIST7'> 7 </p>
>>>>>>> 8109e41f1f267cc9fbc1c8fa4fa716bf870e30b7
						</div>
						<div class='back'>
							<p></p>
						</div>
					</div>
				</td>
				<td>
					<div class='click panel square'>
						<div class='front'>
<<<<<<< HEAD
							<p class='MILES_CHANGE7'> <?php echo rand(0,9)?> </p>
=======
							<p class='DURATION0'> 0 </p>
>>>>>>> 8109e41f1f267cc9fbc1c8fa4fa716bf870e30b7
						</div>
						<div class='back'>
							<p></p>
						</div>
					</div>
				</td>
				<td>
					<div class='click panel square'>
						<div class='front'>
<<<<<<< HEAD
							<p class='PROGRESS0'> <?php echo rand(0,9)?> </p>
=======
							<p class='DURATION1'> 1 </p>
>>>>>>> 8109e41f1f267cc9fbc1c8fa4fa716bf870e30b7
						</div>
						<div class='back'>
							<p></p>
						</div>
					</div>
				</td>
				<td>
					<div class='click panel square'>
						<div class='front'>
<<<<<<< HEAD
							<p class='PROGRESS1'> <?php echo rand(0,9)?> </p>
=======
							<p class='DURATION2'> 2 </p>
>>>>>>> 8109e41f1f267cc9fbc1c8fa4fa716bf870e30b7
						</div>
						<div class='back'>
							<p></p>
						</div>
					</div>
				</td>
				<td>
					<div class='click panel square'>
						<div class='front'>
<<<<<<< HEAD
							<p class='PROGRESS2'> <?php echo rand(0,9)?> </p>
=======
							<p class='DURATION3'> 3 </p>
>>>>>>> 8109e41f1f267cc9fbc1c8fa4fa716bf870e30b7
						</div>
						<div class='back'>
							<p></p>
						</div>
					</div>
				</td>
				<td>
					<div class='click panel square'>
						<div class='front'>
<<<<<<< HEAD
							<p class='PROGRESS3'> <?php echo rand(0,9)?> </p>
=======
							<p class='MILES_CHANGE0'> 0 </p>
>>>>>>> 8109e41f1f267cc9fbc1c8fa4fa716bf870e30b7
						</div>
						<div class='back'>
							<p></p>
						</div>
					</div>
				</td>
				<td>
					<div class='click panel square'>
						<div class='front'>
<<<<<<< HEAD
							<p class='PROGRESS4'> <?php echo rand(0,9)?> </p>
=======
							<p class='MILES_CHANGE1'> 1 </p>
>>>>>>> 8109e41f1f267cc9fbc1c8fa4fa716bf870e30b7
						</div>
						<div class='back'>
							<p></p>
						</div>
					</div>
				</td>
				<td>
					<div class='click panel square'>
						<div class='front'>
<<<<<<< HEAD
							<p class='PROGRESS5'> <?php echo rand(0,9)?> </p>
=======
							<p class='MILES_CHANGE2'> 2 </p>
>>>>>>> 8109e41f1f267cc9fbc1c8fa4fa716bf870e30b7
						</div>
						<div class='back'>
							<p></p>
						</div>
					</div>
				</td>
				<td>
					<div class='click panel square'>
						<div class='front'>
<<<<<<< HEAD
							<p class='PROGRESS6'> <?php echo rand(0,9)?> </p>
=======
							<p class='MILES_CHANGE3'> 3 </p>
>>>>>>> 8109e41f1f267cc9fbc1c8fa4fa716bf870e30b7
						</div>
						<div class='back'>
							<p></p>
						</div>
					</div>
				</td>
				<td>
					<div class='click panel square'>
						<div class='front'>
<<<<<<< HEAD
							<p class='PROGRESS7'> <?php echo rand(0,9)?> </p>
=======
							<p class='MILES_CHANGE4'> 4 </p>
>>>>>>> 8109e41f1f267cc9fbc1c8fa4fa716bf870e30b7
						</div>
						<div class='back'>
							<p></p>
						</div>
					</div>
				</td>
				<td>
					<div class='click panel square'>
						<div class='front'>
							<p class='MILES_CHANGE5'> 5 </p>
						</div>
						<div class='back'>
							<p></p>
						</div>
					</div>
				</td>
				<td>
					<div class='click panel square'>
						<div class='front'>
							<p class='MILES_CHANGE6'> 6 </p>
						</div>
						<div class='back'>
							<p></p>
						</div>
					</div>
				</td>
				<td>
					<div class='click panel square'>
						<div class='front'>
							<p class='MILES_CHANGE7'> 7 </p>
						</div>
						<div class='back'>
							<p></p>
						</div>
					</div>
				</td>
				<td>
					<div class='click panel square'>
						<div class='front'>
							<p class='PROGRESS0'> 0 </p>
						</div>
						<div class='back'>
							<p></p>
						</div>
					</div>
				</td>
				<td>
					<div class='click panel square'>
						<div class='front'>
<<<<<<< HEAD
							<p class='TRIP_DIST0'> <?php echo rand(0,9)?> </p>
=======
							<p class='PROGRESS1'> 1 </p>
>>>>>>> 8109e41f1f267cc9fbc1c8fa4fa716bf870e30b7
						</div>
						<div class='back'>
							<p></p>
						</div>
					</div>
				</td>
				<td>
					<div class='click panel square'>
						<div class='front'>
<<<<<<< HEAD
							<p class='TRIP_DIST1'> <?php echo rand(0,9)?> </p>
=======
							<p class='PROGRESS2'> 2 </p>
>>>>>>> 8109e41f1f267cc9fbc1c8fa4fa716bf870e30b7
						</div>
						<div class='back'>
							<p></p>
						</div>
					</div>
				</td>
				<td>
					<div class='click panel square'>
						<div class='front'>
<<<<<<< HEAD
							<p class='TRIP_DIST2'> <?php echo rand(0,9)?> </p>
=======
							<p class='PROGRESS3'> 3 </p>
>>>>>>> 8109e41f1f267cc9fbc1c8fa4fa716bf870e30b7
						</div>
						<div class='back'>
							<p></p>
						</div>
					</div>
				</td>
				<td>
					<div class='click panel square'>
						<div class='front'>
<<<<<<< HEAD
							<p class='TRIP_DIST3'> <?php echo rand(0,9)?> </p>
=======
							<p class='PROGRESS4'> 4 </p>
>>>>>>> 8109e41f1f267cc9fbc1c8fa4fa716bf870e30b7
						</div>
						<div class='back'>
							<p></p>
						</div>
					</div>
				</td>
				<td>
					<div class='click panel square'>
						<div class='front'>
<<<<<<< HEAD
							<p class='TRIP_DIST4'> <?php echo rand(0,9)?> </p>
=======
							<p class='PROGRESS5'> 5 </p>
>>>>>>> 8109e41f1f267cc9fbc1c8fa4fa716bf870e30b7
						</div>
						<div class='back'>
							<p></p>
						</div>
					</div>
				</td>
				<td>
					<div class='click panel square'>
						<div class='front'>
<<<<<<< HEAD
							<p class='TRIP_DIST5'> <?php echo rand(0,9)?> </p>
=======
							<p class='PROGRESS6'> 6 </p>
>>>>>>> 8109e41f1f267cc9fbc1c8fa4fa716bf870e30b7
						</div>
						<div class='back'>
							<p></p>
						</div>
					</div>
				</td>
				<td>
					<div class='click panel square'>
						<div class='front'>
<<<<<<< HEAD
							<p class='TRIP_DIST6'> <?php echo rand(0,9)?> </p>
=======
							<p class='PROGRESS7'> 7 </p>
>>>>>>> 8109e41f1f267cc9fbc1c8fa4fa716bf870e30b7
						</div>
						<div class='back'>
							<p></p>
						</div>
					</div>
				</td>
				<td>
					<div class='click panel square'>
						<div class='front'>
<<<<<<< HEAD
							<p class='TRIP_DIST7'> <?php echo rand(0,9)?> </p>
=======
							<p class='STATUS'> status </p>
>>>>>>> 8109e41f1f267cc9fbc1c8fa4fa716bf870e30b7
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
<<<<<<< HEAD
							<p class='DURATION0'> <?php echo rand(0,9)?> </p>
=======
							<p id="d">D</p>
>>>>>>> 8109e41f1f267cc9fbc1c8fa4fa716bf870e30b7
						</div>
						<div class='back'>
							<p></p>
						</div>
					</div>
				</td>
				<td>
					<div class='click panel square'>
						<div class='front'>
<<<<<<< HEAD
							<p class='DURATION1'> <?php echo rand(0,9)?> </p>
=======
							<p class='NAME0'> n </p>
>>>>>>> 8109e41f1f267cc9fbc1c8fa4fa716bf870e30b7
						</div>
						<div class='back'>
							<p></p>
						</div>
					</div>
				</td>
								<td>
					<div class='click panel square'>
						<div class='front'>
<<<<<<< HEAD
							<p class='DURATION2'> <?php echo rand(0,9)?> </p>
=======
							<p class='NAME1'> a </p>
>>>>>>> 8109e41f1f267cc9fbc1c8fa4fa716bf870e30b7
						</div>
						<div class='back'>
							<p></p>
						</div>
					</div>
				</td>
								<td>
					<div class='click panel square'>
						<div class='front'>
<<<<<<< HEAD
							<p class='DURATION3'> <?php echo rand(0,9)?> </p>
=======
							<p class='NAME2'> m </p>
>>>>>>> 8109e41f1f267cc9fbc1c8fa4fa716bf870e30b7
						</div>
						<div class='back'>
							<p></p>
						</div>
					</div>
				</td>
								<td>
					<div class='click panel square'>
						<div class='front'>
<<<<<<< HEAD
							<p class='MILES_CHANGE0'> <?php echo rand(0,9)?> </p>
=======
							<p class='NAME3'> e </p>
>>>>>>> 8109e41f1f267cc9fbc1c8fa4fa716bf870e30b7
						</div>
						<div class='back'>
							<p></p>
						</div>
					</div>
				</td>
								<td>
					<div class='click panel square'>
						<div class='front'>
<<<<<<< HEAD
							<p class='MILES_CHANGE1'> <?php echo rand(0,9)?> </p>
=======
							<p class='NAME4'> n </p>
>>>>>>> 8109e41f1f267cc9fbc1c8fa4fa716bf870e30b7
						</div>
						<div class='back'>
							<p></p>
						</div>
					</div>
				</td>
								<td>
					<div class='click panel square'>
						<div class='front'>
<<<<<<< HEAD
							<p class='MILES_CHANGE2'> <?php echo rand(0,9)?> </p>
=======
							<p class='NAME5'> a </p>
>>>>>>> 8109e41f1f267cc9fbc1c8fa4fa716bf870e30b7
						</div>
						<div class='back'>
							<p></p>
						</div>
					</div>
				</td>
								<td>
					<div class='click panel square'>
						<div class='front'>
<<<<<<< HEAD
							<p class='MILES_CHANGE3'> <?php echo rand(0,9)?> </p>
=======
							<p class='NAME6'> m </p>
>>>>>>> 8109e41f1f267cc9fbc1c8fa4fa716bf870e30b7
						</div>
						<div class='back'>
							<p></p>
						</div>
					</div>
				</td>
								<td>
					<div class='click panel square'>
						<div class='front'>
<<<<<<< HEAD
							<p class='MILES_CHANGE4'> <?php echo rand(0,9)?> </p>
=======
							<p class='NAME7'> e </p>
>>>>>>> 8109e41f1f267cc9fbc1c8fa4fa716bf870e30b7
						</div>
						<div class='back'>
							<p></p>
						</div>
					</div>
				</td>
								<td>
					<div class='click panel square'>
						<div class='front'>
<<<<<<< HEAD
							<p class='MILES_CHANGE5'> <?php echo rand(0,9)?> </p>
=======
							<p class='NAME8'> n </p>
>>>>>>> 8109e41f1f267cc9fbc1c8fa4fa716bf870e30b7
						</div>
						<div class='back'>
							<p></p>
						</div>
					</div>
				</td>
								<td>
					<div class='click panel square'>
						<div class='front'>
<<<<<<< HEAD
							<p class='MILES_CHANGE6'> <?php echo rand(0,9)?> </p>
=======
							<p class='NAME9'> a </p>
>>>>>>> 8109e41f1f267cc9fbc1c8fa4fa716bf870e30b7
						</div>
						<div class='back'>
							<p></p>
						</div>
					</div>
				</td>
								<td>
					<div class='click panel square'>
						<div class='front'>
<<<<<<< HEAD
							<p class='MILES_CHANGE7'> <?php echo rand(0,9)?> </p>
=======
							<p class='NAME10'> m </p>
>>>>>>> 8109e41f1f267cc9fbc1c8fa4fa716bf870e30b7
						</div>
						<div class='back'>
							<p></p>
						</div>
					</div>
				</td>
								<td>
					<div class='click panel square'>
						<div class='front'>
<<<<<<< HEAD
							<p class='PROGRESS0'> <?php echo rand(0,9)?> </p>
=======
							<p class='NAME11'> e </p>
>>>>>>> 8109e41f1f267cc9fbc1c8fa4fa716bf870e30b7
						</div>
						<div class='back'>
							<p></p>
						</div>
					</div>
				</td>
				<td>
					<div class='click panel square'>
						<div class='front'>
<<<<<<< HEAD
							<p class='PROGRESS1'> <?php echo rand(0,9)?> </p>
=======
							<p class='DESTINATION'> dest </p>
>>>>>>> 8109e41f1f267cc9fbc1c8fa4fa716bf870e30b7
						</div>
						<div class='back'>
							<p></p>
						</div>
					</div>
				</td>
				<td>
					<div class='click panel square'>
						<div class='front'>
<<<<<<< HEAD
							<p class='PROGRESS2'> <?php echo rand(0,9)?> </p>
=======
							<p class='TRIP_DIST0'> 0 </p>
>>>>>>> 8109e41f1f267cc9fbc1c8fa4fa716bf870e30b7
						</div>
						<div class='back'>
							<p></p>
						</div>
					</div>
				</td>
				<td>
					<div class='click panel square'>
						<div class='front'>
<<<<<<< HEAD
							<p class='PROGRESS3'> <?php echo rand(0,9)?> </p>
=======
							<p class='TRIP_DIST1'> 1 </p>
>>>>>>> 8109e41f1f267cc9fbc1c8fa4fa716bf870e30b7
						</div>
						<div class='back'>
							<p></p>
						</div>
					</div>
				</td>
				<td>
					<div class='click panel square'>
						<div class='front'>
<<<<<<< HEAD
							<p class='PROGRESS4'> <?php echo rand(0,9)?> </p>
=======
							<p class='TRIP_DIST2'> 2 </p>
>>>>>>> 8109e41f1f267cc9fbc1c8fa4fa716bf870e30b7
						</div>
						<div class='back'>
							<p></p>
						</div>
					</div>
				</td>
				<td>
					<div class='click panel square'>
						<div class='front'>
<<<<<<< HEAD
							<p class='PROGRESS5'> <?php echo rand(0,9)?> </p>
=======
							<p class='TRIP_DIST3'> 3 </p>
>>>>>>> 8109e41f1f267cc9fbc1c8fa4fa716bf870e30b7
						</div>
						<div class='back'>
							<p></p>
						</div>
					</div>
				</td>
				<td>
					<div class='click panel square'>
						<div class='front'>
<<<<<<< HEAD
							<p class='PROGRESS6'> <?php echo rand(0,9)?> </p>
=======
							<p class='TRIP_DIST4'> 4 </p>
>>>>>>> 8109e41f1f267cc9fbc1c8fa4fa716bf870e30b7
						</div>
						<div class='back'>
							<p></p>
						</div>
					</div>
				</td>
				<td>
					<div class='click panel square'>
						<div class='front'>
<<<<<<< HEAD
							<p class='PROGRESS7'> <?php echo rand(0,9)?> </p>
=======
							<p class='TRIP_DIST5'> 5 </p>
>>>>>>> 8109e41f1f267cc9fbc1c8fa4fa716bf870e30b7
						</div>
						<div class='back'>
							<p></p>
						</div>
					</div>
				</td>
				<td>
					<div class='click panel square'>
						<div class='front'>
							<p class='TRIP_DIST6'> 6 </p>
						</div>
						<div class='back'>
							<p></p>
						</div>
					</div>
				</td>
				<td>
					<div class='click panel square'>
						<div class='front'>
							<p class='TRIP_DIST7'> 7 </p>
						</div>
						<div class='back'>
							<p></p>
						</div>
					</div>
				</td>
				<td>
					<div class='click panel square'>
						<div class='front'>
							<p class='DURATION0'> 0 </p>
						</div>
						<div class='back'>
							<p></p>
						</div>
					</div>
				</td>
				<td>
					<div class='click panel square'>
						<div class='front'>
							<p class='DURATION1'> 1 </p>
						</div>
						<div class='back'>
							<p></p>
						</div>
					</div>
				</td>
				<td>
					<div class='click panel square'>
						<div class='front'>
<<<<<<< HEAD
							<p class='TRIP_DIST0'> <?php echo rand(0,9)?> </p>
=======
							<p class='DURATION2'> 2 </p>
>>>>>>> 8109e41f1f267cc9fbc1c8fa4fa716bf870e30b7
						</div>
						<div class='back'>
							<p></p>
						</div>
					</div>
				</td>
				<td>
					<div class='click panel square'>
						<div class='front'>
<<<<<<< HEAD
							<p class='TRIP_DIST1'> <?php echo rand(0,9)?> </p>
=======
							<p class='DURATION3'> 3 </p>
>>>>>>> 8109e41f1f267cc9fbc1c8fa4fa716bf870e30b7
						</div>
						<div class='back'>
							<p></p>
						</div>
					</div>
				</td>
				<td>
					<div class='click panel square'>
						<div class='front'>
<<<<<<< HEAD
							<p class='TRIP_DIST2'> <?php echo rand(0,9)?> </p>
=======
							<p class='MILES_CHANGE0'> 0 </p>
>>>>>>> 8109e41f1f267cc9fbc1c8fa4fa716bf870e30b7
						</div>
						<div class='back'>
							<p></p>
						</div>
					</div>
				</td>
				<td>
					<div class='click panel square'>
						<div class='front'>
<<<<<<< HEAD
							<p class='TRIP_DIST3'> <?php echo rand(0,9)?> </p>
=======
							<p class='MILES_CHANGE1'> 1 </p>
>>>>>>> 8109e41f1f267cc9fbc1c8fa4fa716bf870e30b7
						</div>
						<div class='back'>
							<p></p>
						</div>
					</div>
				</td>
				<td>
					<div class='click panel square'>
						<div class='front'>
<<<<<<< HEAD
							<p class='TRIP_DIST4'> <?php echo rand(0,9)?> </p>
=======
							<p class='MILES_CHANGE2'> 2 </p>
>>>>>>> 8109e41f1f267cc9fbc1c8fa4fa716bf870e30b7
						</div>
						<div class='back'>
							<p></p>
						</div>
					</div>
				</td>
				<td>
					<div class='click panel square'>
						<div class='front'>
<<<<<<< HEAD
							<p class='TRIP_DIST5'> <?php echo rand(0,9)?> </p>
=======
							<p class='MILES_CHANGE3'> 3 </p>
>>>>>>> 8109e41f1f267cc9fbc1c8fa4fa716bf870e30b7
						</div>
						<div class='back'>
							<p></p>
						</div>
					</div>
				</td>
				<td>
					<div class='click panel square'>
						<div class='front'>
<<<<<<< HEAD
							<p class='TRIP_DIST6'> <?php echo rand(0,9)?> </p>
=======
							<p class='MILES_CHANGE4'> 4 </p>
>>>>>>> 8109e41f1f267cc9fbc1c8fa4fa716bf870e30b7
						</div>
						<div class='back'>
							<p></p>
						</div>
					</div>
				</td>
				<td>
					<div class='click panel square'>
						<div class='front'>
<<<<<<< HEAD
							<p class='TRIP_DIST7'> <?php echo rand(0,9)?> </p>
=======
							<p class='MILES_CHANGE5'> 5 </p>
>>>>>>> 8109e41f1f267cc9fbc1c8fa4fa716bf870e30b7
						</div>
						<div class='back'>
							<p></p>
						</div>
					</div>
				</td>
				<td>
					<div class='click panel square'>
						<div class='front'>
<<<<<<< HEAD
							<p class='DURATION0'> <?php echo rand(0,9)?> </p>
=======
							<p class='MILES_CHANGE6'> 6 </p>
>>>>>>> 8109e41f1f267cc9fbc1c8fa4fa716bf870e30b7
						</div>
						<div class='back'>
							<p></p>
						</div>
					</div>
				</td>
				<td>
					<div class='click panel square'>
						<div class='front'>
<<<<<<< HEAD
							<p class='DURATION1'> <?php echo rand(0,9)?> </p>
=======
							<p class='MILES_CHANGE7'> 7 </p>
>>>>>>> 8109e41f1f267cc9fbc1c8fa4fa716bf870e30b7
						</div>
						<div class='back'>
							<p></p>
						</div>
					</div>
				</td>
				<td>
					<div class='click panel square'>
						<div class='front'>
<<<<<<< HEAD
							<p class='DURATION2'> <?php echo rand(0,9)?> </p>
=======
							<p class='PROGRESS0'> 0 </p>
>>>>>>> 8109e41f1f267cc9fbc1c8fa4fa716bf870e30b7
						</div>
						<div class='back'>
							<p></p>
						</div>
					</div>
				</td>
				<td>
					<div class='click panel square'>
						<div class='front'>
<<<<<<< HEAD
							<p class='DURATION3'> <?php echo rand(0,9)?> </p>
=======
							<p class='PROGRESS1'> 1 </p>
>>>>>>> 8109e41f1f267cc9fbc1c8fa4fa716bf870e30b7
						</div>
						<div class='back'>
							<p></p>
						</div>
					</div>
				</td>
				<td>
					<div class='click panel square'>
						<div class='front'>
<<<<<<< HEAD
							<p class='MILES_CHANGE0'> <?php echo rand(0,9)?> </p>
=======
							<p class='PROGRESS2'> 2 </p>
>>>>>>> 8109e41f1f267cc9fbc1c8fa4fa716bf870e30b7
						</div>
						<div class='back'>
							<p></p>
						</div>
					</div>
				</td>
				<td>
					<div class='click panel square'>
						<div class='front'>
<<<<<<< HEAD
							<p class='MILES_CHANGE1'> <?php echo rand(0,9)?> </p>
=======
							<p class='PROGRESS3'> 3 </p>
>>>>>>> 8109e41f1f267cc9fbc1c8fa4fa716bf870e30b7
						</div>
						<div class='back'>
							<p></p>
						</div>
					</div>
				</td>
				<td>
					<div class='click panel square'>
						<div class='front'>
<<<<<<< HEAD
							<p class='MILES_CHANGE2'> <?php echo rand(0,9)?> </p>
=======
							<p class='PROGRESS4'> 4 </p>
>>>>>>> 8109e41f1f267cc9fbc1c8fa4fa716bf870e30b7
						</div>
						<div class='back'>
							<p></p>
						</div>
					</div>
				</td>
				<td>
					<div class='click panel square'>
						<div class='front'>
<<<<<<< HEAD
							<p class='MILES_CHANGE3'> <?php echo rand(0,9)?> </p>
=======
							<p class='PROGRESS5'> 5 </p>
>>>>>>> 8109e41f1f267cc9fbc1c8fa4fa716bf870e30b7
						</div>
						<div class='back'>
							<p></p>
						</div>
					</div>
				</td>
				<td>
					<div class='click panel square'>
						<div class='front'>
<<<<<<< HEAD
							<p class='MILES_CHANGE4'> <?php echo rand(0,9)?> </p>
=======
							<p class='PROGRESS6'> 6 </p>
>>>>>>> 8109e41f1f267cc9fbc1c8fa4fa716bf870e30b7
						</div>
						<div class='back'>
							<p></p>
						</div>
					</div>
				</td>
				<td>
					<div class='click panel square'>
						<div class='front'>
<<<<<<< HEAD
							<p class='MILES_CHANGE5'> <?php echo rand(0,9)?> </p>
=======
							<p class='PROGRESS7'> 7 </p>
>>>>>>> 8109e41f1f267cc9fbc1c8fa4fa716bf870e30b7
						</div>
						<div class='back'>
							<p></p>
						</div>
					</div>
				</td>
				<td>
					<div class='click panel square'>
						<div class='front'>
<<<<<<< HEAD
							<p class='MILES_CHANGE6'> <?php echo rand(0,9)?> </p>
=======
							<p class='STATUS'> status </p>
>>>>>>> 8109e41f1f267cc9fbc1c8fa4fa716bf870e30b7
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
<<<<<<< HEAD
							<p class='MILES_CHANGE7'> <?php echo rand(0,9)?> </p>
=======
							<p id="d">D</p>
>>>>>>> 8109e41f1f267cc9fbc1c8fa4fa716bf870e30b7
						</div>
						<div class='back'>
							<p></p>
						</div>
					</div>
				</td>
				<td>
					<div class='click panel square'>
						<div class='front'>
<<<<<<< HEAD
							<p class='PROGRESS0'> <?php echo rand(0,9)?> </p>
=======
							<p class='NAME0'> n </p>
>>>>>>> 8109e41f1f267cc9fbc1c8fa4fa716bf870e30b7
						</div>
						<div class='back'>
							<p></p>
						</div>
					</div>
				</td>
								<td>
					<div class='click panel square'>
						<div class='front'>
<<<<<<< HEAD
							<p class='PROGRESS1'> <?php echo rand(0,9)?> </p>
=======
							<p class='NAME1'> a </p>
>>>>>>> 8109e41f1f267cc9fbc1c8fa4fa716bf870e30b7
						</div>
						<div class='back'>
							<p></p>
						</div>
					</div>
				</td>
								<td>
					<div class='click panel square'>
						<div class='front'>
<<<<<<< HEAD
							<p class='PROGRESS2'> <?php echo rand(0,9)?> </p>
=======
							<p class='NAME2'> m </p>
>>>>>>> 8109e41f1f267cc9fbc1c8fa4fa716bf870e30b7
						</div>
						<div class='back'>
							<p></p>
						</div>
					</div>
				</td>
								<td>
					<div class='click panel square'>
						<div class='front'>
<<<<<<< HEAD
							<p class='PROGRESS3'> <?php echo rand(0,9)?> </p>
=======
							<p class='NAME3'> e </p>
>>>>>>> 8109e41f1f267cc9fbc1c8fa4fa716bf870e30b7
						</div>
						<div class='back'>
							<p></p>
						</div>
					</div>
				</td>
								<td>
					<div class='click panel square'>
						<div class='front'>
<<<<<<< HEAD
							<p class='PROGRESS4'> <?php echo rand(0,9)?> </p>
=======
							<p class='NAME4'> n </p>
>>>>>>> 8109e41f1f267cc9fbc1c8fa4fa716bf870e30b7
						</div>
						<div class='back'>
							<p></p>
						</div>
					</div>
				</td>
								<td>
					<div class='click panel square'>
						<div class='front'>
<<<<<<< HEAD
							<p class='PROGRESS5'> <?php echo rand(0,9)?> </p>
=======
							<p class='NAME5'> a </p>
>>>>>>> 8109e41f1f267cc9fbc1c8fa4fa716bf870e30b7
						</div>
						<div class='back'>
							<p></p>
						</div>
					</div>
				</td>
								<td>
					<div class='click panel square'>
						<div class='front'>
<<<<<<< HEAD
							<p class='PROGRESS6'> <?php echo rand(0,9)?> </p>
=======
							<p class='NAME6'> m </p>
>>>>>>> 8109e41f1f267cc9fbc1c8fa4fa716bf870e30b7
						</div>
						<div class='back'>
							<p></p>
						</div>
					</div>
				</td>
								<td>
					<div class='click panel square'>
						<div class='front'>
<<<<<<< HEAD
							<p class='PROGRESS7'> <?php echo rand(0,9)?> </p>
=======
							<p class='NAME7'> e </p>
>>>>>>> 8109e41f1f267cc9fbc1c8fa4fa716bf870e30b7
						</div>
						<div class='back'>
							<p></p>
						</div>
					</div>
				</td>
								<td>
					<div class='click panel square'>
						<div class='front'>
							<p class='NAME8'> n </p>
						</div>
						<div class='back'>
							<p></p>
						</div>
					</div>
				</td>
								<td>
					<div class='click panel square'>
						<div class='front'>
							<p class='NAME9'> a </p>
						</div>
						<div class='back'>
							<p></p>
						</div>
					</div>
				</td>
								<td>
					<div class='click panel square'>
						<div class='front'>
							<p class='NAME10'> m </p>
						</div>
						<div class='back'>
							<p></p>
						</div>
					</div>
				</td>
								<td>
					<div class='click panel square'>
						<div class='front'>
							<p class='NAME11'> e </p>
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
							<p class='NAME0'> n </p>
						</div>
						<div class='back'>
							<p></p>
						</div>
					</div>
				</td>
								<td>
					<div class='click panel square'>
						<div class='front'>
							<p class='NAME1'> a </p>
						</div>
						<div class='back'>
							<p></p>
						</div>
					</div>
				</td>
								<td>
					<div class='click panel square'>
						<div class='front'>
<<<<<<< HEAD
							<p class='TRIP_DIST0'> <?php echo rand(0,9)?> </p>
=======
							<p class='NAME2'> m </p>
>>>>>>> 8109e41f1f267cc9fbc1c8fa4fa716bf870e30b7
						</div>
						<div class='back'>
							<p></p>
						</div>
					</div>
				</td>
								<td>
					<div class='click panel square'>
						<div class='front'>
<<<<<<< HEAD
							<p class='TRIP_DIST1'> <?php echo rand(0,9)?> </p>
=======
							<p class='NAME3'> e </p>
>>>>>>> 8109e41f1f267cc9fbc1c8fa4fa716bf870e30b7
						</div>
						<div class='back'>
							<p></p>
						</div>
					</div>
				</td>
								<td>
					<div class='click panel square'>
						<div class='front'>
<<<<<<< HEAD
							<p class='TRIP_DIST2'> <?php echo rand(0,9)?> </p>
=======
							<p class='NAME4'> n </p>
>>>>>>> 8109e41f1f267cc9fbc1c8fa4fa716bf870e30b7
						</div>
						<div class='back'>
							<p></p>
						</div>
					</div>
				</td>
								<td>
					<div class='click panel square'>
						<div class='front'>
<<<<<<< HEAD
							<p class='TRIP_DIST3'> <?php echo rand(0,9)?> </p>
=======
							<p class='NAME5'> a </p>
>>>>>>> 8109e41f1f267cc9fbc1c8fa4fa716bf870e30b7
						</div>
						<div class='back'>
							<p></p>
						</div>
					</div>
				</td>
								<td>
					<div class='click panel square'>
						<div class='front'>
<<<<<<< HEAD
							<p class='TRIP_DIST4'> <?php echo rand(0,9)?> </p>
=======
							<p class='NAME6'> m </p>
>>>>>>> 8109e41f1f267cc9fbc1c8fa4fa716bf870e30b7
						</div>
						<div class='back'>
							<p></p>
						</div>
					</div>
				</td>
								<td>
					<div class='click panel square'>
						<div class='front'>
<<<<<<< HEAD
							<p class='TRIP_DIST5'> <?php echo rand(0,9)?> </p>
=======
							<p class='NAME7'> e </p>
>>>>>>> 8109e41f1f267cc9fbc1c8fa4fa716bf870e30b7
						</div>
						<div class='back'>
							<p></p>
						</div>
					</div>
				</td>
								<td>
					<div class='click panel square'>
						<div class='front'>
<<<<<<< HEAD
							<p class='TRIP_DIST6'> <?php echo rand(0,9)?> </p>
=======
							<p class='NAME8'> n </p>
>>>>>>> 8109e41f1f267cc9fbc1c8fa4fa716bf870e30b7
						</div>
						<div class='back'>
							<p></p>
						</div>
					</div>
				</td>
								<td>
					<div class='click panel square'>
						<div class='front'>
<<<<<<< HEAD
							<p class='TRIP_DIST7'> <?php echo rand(0,9)?> </p>
=======
							<p class='NAME9'> a </p>
>>>>>>> 8109e41f1f267cc9fbc1c8fa4fa716bf870e30b7
						</div>
						<div class='back'>
							<p></p>
						</div>
					</div>
				</td>
								<td>
					<div class='click panel square'>
						<div class='front'>
<<<<<<< HEAD
							<p class='DURATION0'> <?php echo rand(0,9)?> </p>
=======
							<p class='NAME10'> m </p>
>>>>>>> 8109e41f1f267cc9fbc1c8fa4fa716bf870e30b7
						</div>
						<div class='back'>
							<p></p>
						</div>
					</div>
				</td>
								<td>
					<div class='click panel square'>
						<div class='front'>
<<<<<<< HEAD
							<p class='DURATION1'> <?php echo rand(0,9)?> </p>
=======
							<p class='NAME11'> e </p>
>>>>>>> 8109e41f1f267cc9fbc1c8fa4fa716bf870e30b7
						</div>
						<div class='back'>
							<p></p>
						</div>
					</div>
				</td>
				<td>
					<div class='click panel square'>
						<div class='front'>
<<<<<<< HEAD
							<p class='DURATION2'> <?php echo rand(0,9)?> </p>
=======
							<p class='DESTINATION'> dest </p>
>>>>>>> 8109e41f1f267cc9fbc1c8fa4fa716bf870e30b7
						</div>
						<div class='back'>
							<p></p>
						</div>
					</div>
				</td>
				<td>
					<div class='click panel square'>
						<div class='front'>
<<<<<<< HEAD
							<p class='DURATION3'> <?php echo rand(0,9)?> </p>
=======
							<p class='TRIP_DIST0'> 0 </p>
>>>>>>> 8109e41f1f267cc9fbc1c8fa4fa716bf870e30b7
						</div>
						<div class='back'>
							<p></p>
						</div>
					</div>
				</td>
				<td>
					<div class='click panel square'>
						<div class='front'>
<<<<<<< HEAD
							<p class='MILES_CHANGE0'> <?php echo rand(0,9)?> </p>
=======
							<p class='TRIP_DIST1'> 1 </p>
>>>>>>> 8109e41f1f267cc9fbc1c8fa4fa716bf870e30b7
						</div>
						<div class='back'>
							<p></p>
						</div>
					</div>
				</td>
				<td>
					<div class='click panel square'>
						<div class='front'>
<<<<<<< HEAD
							<p class='MILES_CHANGE1'> <?php echo rand(0,9)?> </p>
=======
							<p class='TRIP_DIST2'> 2 </p>
>>>>>>> 8109e41f1f267cc9fbc1c8fa4fa716bf870e30b7
						</div>
						<div class='back'>
							<p></p>
						</div>
					</div>
				</td>
				<td>
					<div class='click panel square'>
						<div class='front'>
<<<<<<< HEAD
							<p class='MILES_CHANGE2'> <?php echo rand(0,9)?> </p>
=======
							<p class='TRIP_DIST3'> 3 </p>
>>>>>>> 8109e41f1f267cc9fbc1c8fa4fa716bf870e30b7
						</div>
						<div class='back'>
							<p></p>
						</div>
					</div>
				</td>
				<td>
					<div class='click panel square'>
						<div class='front'>
<<<<<<< HEAD
							<p class='MILES_CHANGE3'> <?php echo rand(0,9)?> </p>
=======
							<p class='TRIP_DIST4'> 4 </p>
>>>>>>> 8109e41f1f267cc9fbc1c8fa4fa716bf870e30b7
						</div>
						<div class='back'>
							<p></p>
						</div>
					</div>
				</td>
				<td>
					<div class='click panel square'>
						<div class='front'>
<<<<<<< HEAD
							<p class='MILES_CHANGE4'> <?php echo rand(0,9)?> </p>
=======
							<p class='TRIP_DIST5'> 5 </p>
>>>>>>> 8109e41f1f267cc9fbc1c8fa4fa716bf870e30b7
						</div>
						<div class='back'>
							<p></p>
						</div>
					</div>
				</td>
				<td>
					<div class='click panel square'>
						<div class='front'>
<<<<<<< HEAD
							<p class='MILES_CHANGE5'> <?php echo rand(0,9)?> </p>
=======
							<p class='TRIP_DIST6'> 6 </p>
>>>>>>> 8109e41f1f267cc9fbc1c8fa4fa716bf870e30b7
						</div>
						<div class='back'>
							<p></p>
						</div>
					</div>
				</td>
				<td>
					<div class='click panel square'>
						<div class='front'>
<<<<<<< HEAD
							<p class='MILES_CHANGE6'> <?php echo rand(0,9)?> </p>
=======
							<p class='TRIP_DIST7'> 7 </p>
>>>>>>> 8109e41f1f267cc9fbc1c8fa4fa716bf870e30b7
						</div>
						<div class='back'>
							<p></p>
						</div>
					</div>
				</td>
				<td>
					<div class='click panel square'>
						<div class='front'>
<<<<<<< HEAD
							<p class='MILES_CHANGE7'> <?php echo rand(0,9)?> </p>
=======
							<p class='DURATION0'> 0 </p>
>>>>>>> 8109e41f1f267cc9fbc1c8fa4fa716bf870e30b7
						</div>
						<div class='back'>
							<p></p>
						</div>
					</div>
				</td>
				<td>
					<div class='click panel square'>
						<div class='front'>
<<<<<<< HEAD
							<p class='PROGRESS0'> <?php echo rand(0,9)?> </p>
=======
							<p class='DURATION1'> 1 </p>
>>>>>>> 8109e41f1f267cc9fbc1c8fa4fa716bf870e30b7
						</div>
						<div class='back'>
							<p></p>
						</div>
					</div>
				</td>
				<td>
					<div class='click panel square'>
						<div class='front'>
<<<<<<< HEAD
							<p class='PROGRESS1'> <?php echo rand(0,9)?> </p>
=======
							<p class='DURATION2'> 2 </p>
>>>>>>> 8109e41f1f267cc9fbc1c8fa4fa716bf870e30b7
						</div>
						<div class='back'>
							<p></p>
						</div>
					</div>
				</td>
				<td>
					<div class='click panel square'>
						<div class='front'>
<<<<<<< HEAD
							<p class='PROGRESS2'> <?php echo rand(0,9)?> </p>
=======
							<p class='DURATION3'> 3 </p>
						</div>
						<div class='back'>
							<p></p>
						</div>
					</div>
				</td>
				<td>
					<div class='click panel square'>
						<div class='front'>
							<p class='MILES_CHANGE0'> 0 </p>
						</div>
						<div class='back'>
							<p></p>
						</div>
					</div>
				</td>
				<td>
					<div class='click panel square'>
						<div class='front'>
							<p class='MILES_CHANGE1'> 1 </p>
						</div>
						<div class='back'>
							<p></p>
						</div>
					</div>
				</td>
				<td>
					<div class='click panel square'>
						<div class='front'>
							<p class='MILES_CHANGE2'> 2 </p>
						</div>
						<div class='back'>
							<p></p>
						</div>
					</div>
				</td>
				<td>
					<div class='click panel square'>
						<div class='front'>
							<p class='MILES_CHANGE3'> 3 </p>
						</div>
						<div class='back'>
							<p></p>
						</div>
					</div>
				</td>
				<td>
					<div class='click panel square'>
						<div class='front'>
							<p class='MILES_CHANGE4'> 4 </p>
						</div>
						<div class='back'>
							<p></p>
						</div>
					</div>
				</td>
				<td>
					<div class='click panel square'>
						<div class='front'>
							<p class='MILES_CHANGE5'> 5 </p>
						</div>
						<div class='back'>
							<p></p>
						</div>
					</div>
				</td>
				<td>
					<div class='click panel square'>
						<div class='front'>
							<p class='MILES_CHANGE6'> 6 </p>
						</div>
						<div class='back'>
							<p></p>
						</div>
					</div>
				</td>
				<td>
					<div class='click panel square'>
						<div class='front'>
							<p class='MILES_CHANGE7'> 7 </p>
						</div>
						<div class='back'>
							<p></p>
						</div>
					</div>
				</td>
				<td>
					<div class='click panel square'>
						<div class='front'>
							<p class='PROGRESS0'> 0 </p>
						</div>
						<div class='back'>
							<p></p>
						</div>
					</div>
				</td>
				<td>
					<div class='click panel square'>
						<div class='front'>
							<p class='PROGRESS1'> 1 </p>
						</div>
						<div class='back'>
							<p></p>
						</div>
					</div>
				</td>
				<td>
					<div class='click panel square'>
						<div class='front'>
							<p class='PROGRESS2'> 2 </p>
						</div>
						<div class='back'>
							<p></p>
						</div>
					</div>
				</td>
				<td>
					<div class='click panel square'>
						<div class='front'>
							<p class='PROGRESS3'> 3 </p>
						</div>
						<div class='back'>
							<p></p>
						</div>
					</div>
				</td>
				<td>
					<div class='click panel square'>
						<div class='front'>
							<p class='PROGRESS4'> 4 </p>
						</div>
						<div class='back'>
							<p></p>
						</div>
					</div>
				</td>
				<td>
					<div class='click panel square'>
						<div class='front'>
							<p class='PROGRESS5'> 5 </p>
						</div>
						<div class='back'>
							<p></p>
						</div>
					</div>
				</td>
				<td>
					<div class='click panel square'>
						<div class='front'>
							<p class='PROGRESS6'> 6 </p>
						</div>
						<div class='back'>
							<p></p>
						</div>
					</div>
				</td>
				<td>
					<div class='click panel square'>
						<div class='front'>
							<p class='PROGRESS7'> 7 </p>
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
							<p class='NAME0'> n </p>
						</div>
						<div class='back'>
							<p></p>
						</div>
					</div>
				</td>
								<td>
					<div class='click panel square'>
						<div class='front'>
							<p class='NAME1'> a </p>
						</div>
						<div class='back'>
							<p></p>
						</div>
					</div>
				</td>
								<td>
					<div class='click panel square'>
						<div class='front'>
							<p class='NAME2'> m </p>
						</div>
						<div class='back'>
							<p></p>
						</div>
					</div>
				</td>
								<td>
					<div class='click panel square'>
						<div class='front'>
							<p class='NAME3'> e </p>
						</div>
						<div class='back'>
							<p></p>
						</div>
					</div>
				</td>
								<td>
					<div class='click panel square'>
						<div class='front'>
							<p class='NAME4'> n </p>
						</div>
						<div class='back'>
							<p></p>
						</div>
					</div>
				</td>
								<td>
					<div class='click panel square'>
						<div class='front'>
							<p class='NAME5'> a </p>
						</div>
						<div class='back'>
							<p></p>
						</div>
					</div>
				</td>
								<td>
					<div class='click panel square'>
						<div class='front'>
							<p class='NAME6'> m </p>
						</div>
						<div class='back'>
							<p></p>
						</div>
					</div>
				</td>
								<td>
					<div class='click panel square'>
						<div class='front'>
							<p class='NAME7'> e </p>
						</div>
						<div class='back'>
							<p></p>
						</div>
					</div>
				</td>
								<td>
					<div class='click panel square'>
						<div class='front'>
							<p class='NAME8'> n </p>
						</div>
						<div class='back'>
							<p></p>
						</div>
					</div>
				</td>
								<td>
					<div class='click panel square'>
						<div class='front'>
							<p class='NAME9'> a </p>
						</div>
						<div class='back'>
							<p></p>
						</div>
					</div>
				</td>
								<td>
					<div class='click panel square'>
						<div class='front'>
							<p class='NAME10'> m </p>
						</div>
						<div class='back'>
							<p></p>
						</div>
					</div>
				</td>
								<td>
					<div class='click panel square'>
						<div class='front'>
							<p class='NAME11'> e </p>
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
							<p class='TRIP_DIST0'> 0 </p>
						</div>
						<div class='back'>
							<p></p>
						</div>
					</div>
				</td>
				<td>
					<div class='click panel square'>
						<div class='front'>
							<p class='TRIP_DIST1'> 1 </p>
						</div>
						<div class='back'>
							<p></p>
						</div>
					</div>
				</td>
				<td>
					<div class='click panel square'>
						<div class='front'>
							<p class='TRIP_DIST2'> 2 </p>
						</div>
						<div class='back'>
							<p></p>
						</div>
					</div>
				</td>
				<td>
					<div class='click panel square'>
						<div class='front'>
							<p class='TRIP_DIST3'> 3 </p>
						</div>
						<div class='back'>
							<p></p>
						</div>
					</div>
				</td>
				<td>
					<div class='click panel square'>
						<div class='front'>
							<p class='TRIP_DIST4'> 4 </p>
						</div>
						<div class='back'>
							<p></p>
						</div>
					</div>
				</td>
				<td>
					<div class='click panel square'>
						<div class='front'>
							<p class='TRIP_DIST5'> 5 </p>
						</div>
						<div class='back'>
							<p></p>
						</div>
					</div>
				</td>
				<td>
					<div class='click panel square'>
						<div class='front'>
							<p class='TRIP_DIST6'> 6 </p>
						</div>
						<div class='back'>
							<p></p>
						</div>
					</div>
				</td>
				<td>
					<div class='click panel square'>
						<div class='front'>
							<p class='TRIP_DIST7'> 7 </p>
						</div>
						<div class='back'>
							<p></p>
						</div>
					</div>
				</td>
				<td>
					<div class='click panel square'>
						<div class='front'>
							<p class='DURATION0'> 0 </p>
						</div>
						<div class='back'>
							<p></p>
						</div>
					</div>
				</td>
				<td>
					<div class='click panel square'>
						<div class='front'>
							<p class='DURATION1'> 1 </p>
						</div>
						<div class='back'>
							<p></p>
						</div>
					</div>
				</td>
				<td>
					<div class='click panel square'>
						<div class='front'>
							<p class='DURATION2'> 2 </p>
						</div>
						<div class='back'>
							<p></p>
						</div>
					</div>
				</td>
				<td>
					<div class='click panel square'>
						<div class='front'>
							<p class='DURATION3'> 3 </p>
						</div>
						<div class='back'>
							<p></p>
						</div>
					</div>
				</td>
				<td>
					<div class='click panel square'>
						<div class='front'>
							<p class='MILES_CHANGE0'> 0 </p>
						</div>
						<div class='back'>
							<p></p>
						</div>
					</div>
				</td>
				<td>
					<div class='click panel square'>
						<div class='front'>
							<p class='MILES_CHANGE1'> 1 </p>
						</div>
						<div class='back'>
							<p></p>
						</div>
					</div>
				</td>
				<td>
					<div class='click panel square'>
						<div class='front'>
							<p class='MILES_CHANGE2'> 2 </p>
						</div>
						<div class='back'>
							<p></p>
						</div>
					</div>
				</td>
				<td>
					<div class='click panel square'>
						<div class='front'>
							<p class='MILES_CHANGE3'> 3 </p>
						</div>
						<div class='back'>
							<p></p>
						</div>
					</div>
				</td>
				<td>
					<div class='click panel square'>
						<div class='front'>
							<p class='MILES_CHANGE4'> 4 </p>
						</div>
						<div class='back'>
							<p></p>
						</div>
					</div>
				</td>
				<td>
					<div class='click panel square'>
						<div class='front'>
							<p class='MILES_CHANGE5'> 5 </p>
						</div>
						<div class='back'>
							<p></p>
						</div>
					</div>
				</td>
				<td>
					<div class='click panel square'>
						<div class='front'>
							<p class='MILES_CHANGE6'> 6 </p>
						</div>
						<div class='back'>
							<p></p>
						</div>
					</div>
				</td>
				<td>
					<div class='click panel square'>
						<div class='front'>
							<p class='MILES_CHANGE7'> 7 </p>
						</div>
						<div class='back'>
							<p></p>
						</div>
					</div>
				</td>
				<td>
					<div class='click panel square'>
						<div class='front'>
							<p class='PROGRESS0'> 0 </p>
						</div>
						<div class='back'>
							<p></p>
						</div>
					</div>
				</td>
				<td>
					<div class='click panel square'>
						<div class='front'>
							<p class='PROGRESS1'> 1 </p>
						</div>
						<div class='back'>
							<p></p>
						</div>
					</div>
				</td>
				<td>
					<div class='click panel square'>
						<div class='front'>
							<p class='PROGRESS2'> 2 </p>
>>>>>>> 8109e41f1f267cc9fbc1c8fa4fa716bf870e30b7
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
<<<<<<< HEAD
							<p class='PROGRESS6'> <?php echo rand(0,9)?> </p>
=======
							<p class='PROGRESS6'> 6 </p>
						</div>
						<div class='back'>
							<p></p>
						</div>
					</div>
				</td>
				<td>
					<div class='click panel square'>
						<div class='front'>
							<p class='PROGRESS7'> 7 </p>
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
							<p class='NAME0'> n </p>
						</div>
						<div class='back'>
							<p></p>
						</div>
					</div>
				</td>
								<td>
					<div class='click panel square'>
						<div class='front'>
							<p class='NAME1'> a </p>
						</div>
						<div class='back'>
							<p></p>
						</div>
					</div>
				</td>
								<td>
					<div class='click panel square'>
						<div class='front'>
							<p class='NAME2'> m </p>
						</div>
						<div class='back'>
							<p></p>
						</div>
					</div>
				</td>
								<td>
					<div class='click panel square'>
						<div class='front'>
							<p class='NAME3'> e </p>
						</div>
						<div class='back'>
							<p></p>
						</div>
					</div>
				</td>
								<td>
					<div class='click panel square'>
						<div class='front'>
							<p class='NAME4'> n </p>
						</div>
						<div class='back'>
							<p></p>
						</div>
					</div>
				</td>
								<td>
					<div class='click panel square'>
						<div class='front'>
							<p class='NAME5'> a </p>
						</div>
						<div class='back'>
							<p></p>
						</div>
					</div>
				</td>
								<td>
					<div class='click panel square'>
						<div class='front'>
							<p class='NAME6'> m </p>
						</div>
						<div class='back'>
							<p></p>
						</div>
					</div>
				</td>
								<td>
					<div class='click panel square'>
						<div class='front'>
							<p class='NAME7'> e </p>
						</div>
						<div class='back'>
							<p></p>
						</div>
					</div>
				</td>
								<td>
					<div class='click panel square'>
						<div class='front'>
							<p class='NAME8'> n </p>
						</div>
						<div class='back'>
							<p></p>
						</div>
					</div>
				</td>
								<td>
					<div class='click panel square'>
						<div class='front'>
							<p class='NAME9'> a </p>
						</div>
						<div class='back'>
							<p></p>
						</div>
					</div>
				</td>
								<td>
					<div class='click panel square'>
						<div class='front'>
							<p class='NAME10'> m </p>
						</div>
						<div class='back'>
							<p></p>
						</div>
					</div>
				</td>
								<td>
					<div class='click panel square'>
						<div class='front'>
							<p class='NAME11'> e </p>
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
							<p class='TRIP_DIST0'> 0 </p>
						</div>
						<div class='back'>
							<p></p>
						</div>
					</div>
				</td>
				<td>
					<div class='click panel square'>
						<div class='front'>
							<p class='TRIP_DIST1'> 1 </p>
						</div>
						<div class='back'>
							<p></p>
						</div>
					</div>
				</td>
				<td>
					<div class='click panel square'>
						<div class='front'>
							<p class='TRIP_DIST2'> 2 </p>
						</div>
						<div class='back'>
							<p></p>
						</div>
					</div>
				</td>
				<td>
					<div class='click panel square'>
						<div class='front'>
							<p class='TRIP_DIST3'> 3 </p>
						</div>
						<div class='back'>
							<p></p>
						</div>
					</div>
				</td>
				<td>
					<div class='click panel square'>
						<div class='front'>
							<p class='TRIP_DIST4'> 4 </p>
						</div>
						<div class='back'>
							<p></p>
						</div>
					</div>
				</td>
				<td>
					<div class='click panel square'>
						<div class='front'>
							<p class='TRIP_DIST5'> 5 </p>
>>>>>>> 8109e41f1f267cc9fbc1c8fa4fa716bf870e30b7
						</div>
						<div class='back'>
							<p></p>
						</div>
					</div>
				</td>
				<td>
					<div class='click panel square'>
						<div class='front'>
<<<<<<< HEAD
							<p class='PROGRESS7'> <?php echo rand(0,9)?> </p>
=======
							<p class='TRIP_DIST6'> 6 </p>
>>>>>>> 8109e41f1f267cc9fbc1c8fa4fa716bf870e30b7
						</div>
						<div class='back'>
							<p></p>
						</div>
					</div>
				</td>
				<td>
					<div class='click panel square'>
						<div class='front'>
							<p class='TRIP_DIST7'> 7 </p>
						</div>
						<div class='back'>
							<p></p>
						</div>
					</div>
				</td>
				<td>
					<div class='click panel square'>
						<div class='front'>
							<p class='DURATION0'> 0 </p>
						</div>
						<div class='back'>
							<p></p>
						</div>
					</div>
				</td>
				<td>
					<div class='click panel square'>
						<div class='front'>
							<p class='DURATION1'> 1 </p>
						</div>
						<div class='back'>
							<p></p>
						</div>
					</div>
				</td>
				<td>
					<div class='click panel square'>
						<div class='front'>
							<p class='DURATION2'> 2 </p>
						</div>
						<div class='back'>
							<p></p>
						</div>
					</div>
				</td>
				<td>
					<div class='click panel square'>
						<div class='front'>
<<<<<<< HEAD
							<p class='TRIP_DIST0'> <?php echo rand(0,9)?> </p>
=======
							<p class='DURATION3'> 3 </p>
>>>>>>> 8109e41f1f267cc9fbc1c8fa4fa716bf870e30b7
						</div>
						<div class='back'>
							<p></p>
						</div>
					</div>
				</td>
				<td>
					<div class='click panel square'>
						<div class='front'>
<<<<<<< HEAD
							<p class='TRIP_DIST1'> <?php echo rand(0,9)?> </p>
=======
							<p class='MILES_CHANGE0'> 0 </p>
>>>>>>> 8109e41f1f267cc9fbc1c8fa4fa716bf870e30b7
						</div>
						<div class='back'>
							<p></p>
						</div>
					</div>
				</td>
				<td>
					<div class='click panel square'>
						<div class='front'>
<<<<<<< HEAD
							<p class='TRIP_DIST2'> <?php echo rand(0,9)?> </p>
=======
							<p class='MILES_CHANGE1'> 1 </p>
>>>>>>> 8109e41f1f267cc9fbc1c8fa4fa716bf870e30b7
						</div>
						<div class='back'>
							<p></p>
						</div>
					</div>
				</td>
				<td>
					<div class='click panel square'>
						<div class='front'>
<<<<<<< HEAD
							<p class='TRIP_DIST3'> <?php echo rand(0,9)?> </p>
=======
							<p class='MILES_CHANGE2'> 2 </p>
>>>>>>> 8109e41f1f267cc9fbc1c8fa4fa716bf870e30b7
						</div>
						<div class='back'>
							<p></p>
						</div>
					</div>
				</td>
				<td>
					<div class='click panel square'>
						<div class='front'>
<<<<<<< HEAD
							<p class='TRIP_DIST4'> <?php echo rand(0,9)?> </p>
=======
							<p class='MILES_CHANGE3'> 3 </p>
>>>>>>> 8109e41f1f267cc9fbc1c8fa4fa716bf870e30b7
						</div>
						<div class='back'>
							<p></p>
						</div>
					</div>
				</td>
				<td>
					<div class='click panel square'>
						<div class='front'>
<<<<<<< HEAD
							<p class='TRIP_DIST5'> <?php echo rand(0,9)?> </p>
=======
							<p class='MILES_CHANGE4'> 4 </p>
>>>>>>> 8109e41f1f267cc9fbc1c8fa4fa716bf870e30b7
						</div>
						<div class='back'>
							<p></p>
						</div>
					</div>
				</td>
				<td>
					<div class='click panel square'>
						<div class='front'>
<<<<<<< HEAD
							<p class='TRIP_DIST6'> <?php echo rand(0,9)?> </p>
=======
							<p class='MILES_CHANGE5'> 5 </p>
>>>>>>> 8109e41f1f267cc9fbc1c8fa4fa716bf870e30b7
						</div>
						<div class='back'>
							<p></p>
						</div>
					</div>
				</td>
				<td>
					<div class='click panel square'>
						<div class='front'>
<<<<<<< HEAD
							<p class='TRIP_DIST7'> <?php echo rand(0,9)?> </p>
=======
							<p class='MILES_CHANGE6'> 6 </p>
>>>>>>> 8109e41f1f267cc9fbc1c8fa4fa716bf870e30b7
						</div>
						<div class='back'>
							<p></p>
						</div>
					</div>
				</td>
				<td>
					<div class='click panel square'>
						<div class='front'>
<<<<<<< HEAD
							<p class='DURATION0'> <?php echo rand(0,9)?> </p>
=======
							<p class='MILES_CHANGE7'> 7 </p>
>>>>>>> 8109e41f1f267cc9fbc1c8fa4fa716bf870e30b7
						</div>
						<div class='back'>
							<p></p>
						</div>
					</div>
				</td>
				<td>
					<div class='click panel square'>
						<div class='front'>
<<<<<<< HEAD
							<p class='DURATION1'> <?php echo rand(0,9)?> </p>
=======
							<p class='PROGRESS0'> 0 </p>
>>>>>>> 8109e41f1f267cc9fbc1c8fa4fa716bf870e30b7
						</div>
						<div class='back'>
							<p></p>
						</div>
					</div>
				</td>
				<td>
					<div class='click panel square'>
						<div class='front'>
<<<<<<< HEAD
							<p class='DURATION2'> <?php echo rand(0,9)?> </p>
=======
							<p class='PROGRESS1'> 1 </p>
>>>>>>> 8109e41f1f267cc9fbc1c8fa4fa716bf870e30b7
						</div>
						<div class='back'>
							<p></p>
						</div>
					</div>
				</td>
				<td>
					<div class='click panel square'>
						<div class='front'>
<<<<<<< HEAD
							<p class='DURATION3'> <?php echo rand(0,9)?> </p>
=======
							<p class='PROGRESS2'> 2 </p>
>>>>>>> 8109e41f1f267cc9fbc1c8fa4fa716bf870e30b7
						</div>
						<div class='back'>
							<p></p>
						</div>
					</div>
				</td>
				<td>
					<div class='click panel square'>
						<div class='front'>
<<<<<<< HEAD
							<p class='MILES_CHANGE0'> <?php echo rand(0,9)?> </p>
=======
							<p class='PROGRESS3'> 3 </p>
>>>>>>> 8109e41f1f267cc9fbc1c8fa4fa716bf870e30b7
						</div>
						<div class='back'>
							<p></p>
						</div>
					</div>
				</td>
				<td>
					<div class='click panel square'>
						<div class='front'>
<<<<<<< HEAD
							<p class='MILES_CHANGE1'> <?php echo rand(0,9)?> </p>
=======
							<p class='PROGRESS4'> 4 </p>
>>>>>>> 8109e41f1f267cc9fbc1c8fa4fa716bf870e30b7
						</div>
						<div class='back'>
							<p></p>
						</div>
					</div>
				</td>
				<td>
					<div class='click panel square'>
						<div class='front'>
<<<<<<< HEAD
							<p class='MILES_CHANGE2'> <?php echo rand(0,9)?> </p>
=======
							<p class='PROGRESS5'> 5 </p>
>>>>>>> 8109e41f1f267cc9fbc1c8fa4fa716bf870e30b7
						</div>
						<div class='back'>
							<p></p>
						</div>
					</div>
				</td>
				<td>
					<div class='click panel square'>
						<div class='front'>
<<<<<<< HEAD
							<p class='MILES_CHANGE3'> <?php echo rand(0,9)?> </p>
=======
							<p class='PROGRESS6'> 6 </p>
>>>>>>> 8109e41f1f267cc9fbc1c8fa4fa716bf870e30b7
						</div>
						<div class='back'>
							<p></p>
						</div>
					</div>
				</td>
				<td>
					<div class='click panel square'>
						<div class='front'>
<<<<<<< HEAD
							<p class='MILES_CHANGE4'> <?php echo rand(0,9)?> </p>
=======
							<p class='PROGRESS7'> 7 </p>
>>>>>>> 8109e41f1f267cc9fbc1c8fa4fa716bf870e30b7
						</div>
						<div class='back'>
							<p></p>
						</div>
					</div>
				</td>
				<td>
					<div class='click panel square'>
						<div class='front'>
<<<<<<< HEAD
							<p class='MILES_CHANGE5'> <?php echo rand(0,9)?> </p>
=======
							<p class='STATUS'> status </p>
>>>>>>> 8109e41f1f267cc9fbc1c8fa4fa716bf870e30b7
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
<<<<<<< HEAD
							<p class='MILES_CHANGE6'> <?php echo rand(0,9)?> </p>
=======
							<p id="g">G</p>
>>>>>>> 8109e41f1f267cc9fbc1c8fa4fa716bf870e30b7
						</div>
						<div class='back'>
							<p></p>
						</div>
					</div>
				</td>
				<td>
					<div class='click panel square'>
						<div class='front'>
<<<<<<< HEAD
							<p class='MILES_CHANGE7'> <?php echo rand(0,9)?> </p>
=======
							<p class='NAME0'> n </p>
>>>>>>> 8109e41f1f267cc9fbc1c8fa4fa716bf870e30b7
						</div>
						<div class='back'>
							<p></p>
						</div>
					</div>
				</td>
								<td>
					<div class='click panel square'>
						<div class='front'>
<<<<<<< HEAD
							<p class='PROGRESS0'> <?php echo rand(0,9)?> </p>
=======
							<p class='NAME1'> a </p>
>>>>>>> 8109e41f1f267cc9fbc1c8fa4fa716bf870e30b7
						</div>
						<div class='back'>
							<p></p>
						</div>
					</div>
				</td>
								<td>
					<div class='click panel square'>
						<div class='front'>
<<<<<<< HEAD
							<p class='PROGRESS1'> <?php echo rand(0,9)?> </p>
=======
							<p class='NAME2'> m </p>
>>>>>>> 8109e41f1f267cc9fbc1c8fa4fa716bf870e30b7
						</div>
						<div class='back'>
							<p></p>
						</div>
					</div>
				</td>
								<td>
					<div class='click panel square'>
						<div class='front'>
<<<<<<< HEAD
							<p class='PROGRESS2'> <?php echo rand(0,9)?> </p>
=======
							<p class='NAME3'> e </p>
>>>>>>> 8109e41f1f267cc9fbc1c8fa4fa716bf870e30b7
						</div>
						<div class='back'>
							<p></p>
						</div>
					</div>
				</td>
								<td>
					<div class='click panel square'>
						<div class='front'>
<<<<<<< HEAD
							<p class='PROGRESS3'> <?php echo rand(0,9)?> </p>
=======
							<p class='NAME4'> n </p>
>>>>>>> 8109e41f1f267cc9fbc1c8fa4fa716bf870e30b7
						</div>
						<div class='back'>
							<p></p>
						</div>
					</div>
				</td>
								<td>
					<div class='click panel square'>
						<div class='front'>
<<<<<<< HEAD
							<p class='PROGRESS4'> <?php echo rand(0,9)?> </p>
=======
							<p class='NAME5'> a </p>
>>>>>>> 8109e41f1f267cc9fbc1c8fa4fa716bf870e30b7
						</div>
						<div class='back'>
							<p></p>
						</div>
					</div>
				</td>
								<td>
					<div class='click panel square'>
						<div class='front'>
<<<<<<< HEAD
							<p class='PROGRESS5'> <?php echo rand(0,9)?> </p>
=======
							<p class='NAME6'> m </p>
>>>>>>> 8109e41f1f267cc9fbc1c8fa4fa716bf870e30b7
						</div>
						<div class='back'>
							<p></p>
						</div>
					</div>
				</td>
								<td>
					<div class='click panel square'>
						<div class='front'>
<<<<<<< HEAD
							<p class='PROGRESS6'> <?php echo rand(0,9)?> </p>
=======
							<p class='NAME7'> e </p>
>>>>>>> 8109e41f1f267cc9fbc1c8fa4fa716bf870e30b7
						</div>
						<div class='back'>
							<p></p>
						</div>
					</div>
				</td>
								<td>
					<div class='click panel square'>
						<div class='front'>
<<<<<<< HEAD
							<p class='PROGRESS7'> <?php echo rand(0,9)?> </p>
=======
							<p class='NAME8'> n </p>
>>>>>>> 8109e41f1f267cc9fbc1c8fa4fa716bf870e30b7
						</div>
						<div class='back'>
							<p></p>
						</div>
					</div>
				</td>
								<td>
					<div class='click panel square'>
						<div class='front'>
							<p class='NAME9'> a </p>
						</div>
						<div class='back'>
							<p></p>
						</div>
					</div>
				</td>
								<td>
					<div class='click panel square'>
						<div class='front'>
							<p class='NAME10'> m </p>
						</div>
						<div class='back'>
							<p></p>
						</div>
					</div>
				</td>
								<td>
					<div class='click panel square'>
						<div class='front'>
							<p class='NAME11'> e </p>
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
							<p class='NAME0'> n </p>
						</div>
						<div class='back'>
							<p></p>
						</div>
					</div>
				</td>
								<td>
					<div class='click panel square'>
						<div class='front'>
							<p class='NAME1'> a </p>
						</div>
						<div class='back'>
							<p></p>
						</div>
					</div>
				</td>
								<td>
					<div class='click panel square'>
						<div class='front'>
							<p class='NAME2'> m </p>
						</div>
						<div class='back'>
							<p></p>
						</div>
					</div>
				</td>
								<td>
					<div class='click panel square'>
						<div class='front'>
							<p class='NAME3'> e </p>
						</div>
						<div class='back'>
							<p></p>
						</div>
					</div>
				</td>
								<td>
					<div class='click panel square'>
						<div class='front'>
							<p class='NAME4'> n </p>
						</div>
						<div class='back'>
							<p></p>
						</div>
					</div>
				</td>
								<td>
					<div class='click panel square'>
						<div class='front'>
							<p class='NAME5'> a </p>
						</div>
						<div class='back'>
							<p></p>
						</div>
					</div>
				</td>
								<td>
					<div class='click panel square'>
						<div class='front'>
							<p class='NAME6'> m </p>
						</div>
						<div class='back'>
							<p></p>
						</div>
					</div>
				</td>
								<td>
					<div class='click panel square'>
						<div class='front'>
							<p class='NAME7'> e </p>
						</div>
						<div class='back'>
							<p></p>
						</div>
					</div>
				</td>
								<td>
					<div class='click panel square'>
						<div class='front'>
							<p class='NAME8'> n </p>
						</div>
						<div class='back'>
							<p></p>
						</div>
					</div>
				</td>
								<td>
					<div class='click panel square'>
						<div class='front'>
							<p class='NAME9'> a </p>
						</div>
						<div class='back'>
							<p></p>
						</div>
					</div>
				</td>
								<td>
					<div class='click panel square'>
						<div class='front'>
							<p class='NAME10'> m </p>
						</div>
						<div class='back'>
							<p></p>
						</div>
					</div>
				</td>
								<td>
					<div class='click panel square'>
						<div class='front'>
							<p class='NAME11'> e </p>
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
							<p class='NAME0'> n </p>
						</div>
						<div class='back'>
							<p></p>
						</div>
					</div>
				</td>
								<td>
					<div class='click panel square'>
						<div class='front'>
							<p class='NAME1'> a </p>
						</div>
						<div class='back'>
							<p></p>
						</div>
					</div>
				</td>
								<td>
					<div class='click panel square'>
						<div class='front'>
							<p class='NAME2'> m </p>
						</div>
						<div class='back'>
							<p></p>
						</div>
					</div>
				</td>
								<td>
					<div class='click panel square'>
						<div class='front'>
							<p class='NAME3'> e </p>
						</div>
						<div class='back'>
							<p></p>
						</div>
					</div>
				</td>
								<td>
					<div class='click panel square'>
						<div class='front'>
							<p class='NAME4'> n </p>
						</div>
						<div class='back'>
							<p></p>
						</div>
					</div>
				</td>
								<td>
					<div class='click panel square'>
						<div class='front'>
							<p class='NAME5'> a </p>
						</div>
						<div class='back'>
							<p></p>
						</div>
					</div>
				</td>
								<td>
					<div class='click panel square'>
						<div class='front'>
							<p class='NAME6'> m </p>
						</div>
						<div class='back'>
							<p></p>
						</div>
					</div>
				</td>
								<td>
					<div class='click panel square'>
						<div class='front'>
							<p class='NAME7'> e </p>
						</div>
						<div class='back'>
							<p></p>
						</div>
					</div>
				</td>
								<td>
					<div class='click panel square'>
						<div class='front'>
							<p class='NAME8'> n </p>
						</div>
						<div class='back'>
							<p></p>
						</div>
					</div>
				</td>
								<td>
					<div class='click panel square'>
						<div class='front'>
							<p class='NAME9'> a </p>
						</div>
						<div class='back'>
							<p></p>
						</div>
					</div>
				</td>
								<td>
					<div class='click panel square'>
						<div class='front'>
							<p class='NAME10'> m </p>
						</div>
						<div class='back'>
							<p></p>
						</div>
					</div>
				</td>
								<td>
					<div class='click panel square'>
						<div class='front'>
							<p class='NAME11'> e </p>
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