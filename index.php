<html>
	<head>
		<title>JavaScript/CSS3 Departure Board</title>
		<link rel="stylesheet" href="departure-board.css" />
		<link rel="stylesheet" href="flip.css" />

		<!-- IMPORT SCRIPT HERE -->
		<script src="//ajax.googleapis.com/ajax/libs/jquery/1.9.1/jquery.min.js">
		</script>

		<!-- Rotation Script-->
		<script type="text/javascript">
			$(document).ready(function(){
				// set up hover panels
				// although this can be done without JavaScript, we've attached these events
				// because it causes the hover to be triggered when the element is tapped on a touch device

				window.addEvents = function() {

					$('.hover').hover(function(){
						$(this).addClass('flip');
					},function(){
						$(this).removeClass('flip');
					});

					// set up click/tap panels
					$('.click').toggle(function(){
						$(this).addClass('flip');
					},function(){
						$(this).removeClass('flip');
					});

					// set up block configuration
					$('.block .action').click(function(){
						$('.block').addClass('flip');
					});
					$('.block .edit-submit').click(function(e){
						$('.block').removeClass('flip');

						// why not update that list for fun?
						$('#list-title').text($('#form_title').val());
						$('#list-items').empty();
						for (var num = 1; num <= $('#form_items').val(); num++) {
							$('#list-items').append('<li>Name '+num+'</li>');
						}
						e.preventDefault();
					});

					// set up contact form link
					$('.contact .action').click(function(e){
						$('.contact').addClass('flip');
						e.preventDefault();
					});
					$('.contact .edit-submit').click(function(e){
						$('.contact').removeClass('flip');
						// just for effect we'll update the content
						e.preventDefault();
					});
				}

			});
		</script>

	</head>

	<body>
		<h1 id="title1">ALL ABOARD BETTERMENT</h1>

		<div id="placeholder"></div>
    	
        <table id='table'>
        	<tr>
        		<td>
        			<h2>NAME</h2>
        		</td>
        		<td>
        			<h2>DESTINATION</h2>
        		</td>
        		<td>
        			<h2>TRIP DISTANCE</h2>
        		</td>
        		<td>
        			<h2>DURATION</h2>
        		</td>
        		<td>
        			<h2>MILES CHANGE</h2>
        		</td>
        		<td>
        			<h2>PROGRESS</h2>
        		</td>
        		<td>
        			<h2>STATUS</h2>
        		</td>
        	</tr>
			<tr class='deposit0'>
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
							<p class='TRIP_DISTANCE'> distance </p>
						</div>
						<div class='back'>
							<p></p>
						</div>
					</div>
				</td>
				<td>
					<div class='click panel square'>
						<div class='front'>
							<p class='DURATION'> duration </p>
						</div>
						<div class='back'>
							<p></p>
						</div>
					</div>
				</td>
				<td>
					<div class='click panel square'>
						<div class='front'>
							<p class='MILES_CHANGE'> miles change</p>
						</div>
						<div class='back'>
							<p></p>
						</div>
					</div>
				</td>
				<td>
					<div class='click panel square'>
						<div class='front'>
							<p class='PROGRESS'> progress </p>
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
							<p class='TRIP_DISTANCE'> distance </p>
						</div>
						<div class='back'>
							<p></p>
						</div>
					</div>
				</td>
				<td>
					<div class='click panel square'>
						<div class='front'>
							<p class='DURATION'> duration </p>
						</div>
						<div class='back'>
							<p></p>
						</div>
					</div>
				</td>
				<td>
					<div class='click panel square'>
						<div class='front'>
							<p class='MILES_CHANGE'> miles change</p>
						</div>
						<div class='back'>
							<p></p>
						</div>
					</div>
				</td>
				<td>
					<div class='click panel square'>
						<div class='front'>
							<p class='PROGRESS'> progress </p>
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
							<p class='TRIP_DISTANCE'> distance </p>
						</div>
						<div class='back'>
							<p></p>
						</div>
					</div>
				</td>
				<td>
					<div class='click panel square'>
						<div class='front'>
							<p class='DURATION'> duration </p>
						</div>
						<div class='back'>
							<p></p>
						</div>
					</div>
				</td>
				<td>
					<div class='click panel square'>
						<div class='front'>
							<p class='MILES_CHANGE'> miles change</p>
						</div>
						<div class='back'>
							<p></p>
						</div>
					</div>
				</td>
				<td>
					<div class='click panel square'>
						<div class='front'>
							<p class='PROGRESS'> progress </p>
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
							<p class='TRIP_DISTANCE'> distance </p>
						</div>
						<div class='back'>
							<p></p>
						</div>
					</div>
				</td>
				<td>
					<div class='click panel square'>
						<div class='front'>
							<p class='DURATION'> duration </p>
						</div>
						<div class='back'>
							<p></p>
						</div>
					</div>
				</td>
				<td>
					<div class='click panel square'>
						<div class='front'>
							<p class='MILES_CHANGE'> miles change</p>
						</div>
						<div class='back'>
							<p></p>
						</div>
					</div>
				</td>
				<td>
					<div class='click panel square'>
						<div class='front'>
							<p class='PROGRESS'> progress </p>
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
							<p class='TRIP_DISTANCE'> distance </p>
						</div>
						<div class='back'>
							<p></p>
						</div>
					</div>
				</td>
				<td>
					<div class='click panel square'>
						<div class='front'>
							<p class='DURATION'> duration </p>
						</div>
						<div class='back'>
							<p></p>
						</div>
					</div>
				</td>
				<td>
					<div class='click panel square'>
						<div class='front'>
							<p class='MILES_CHANGE'> miles change</p>
						</div>
						<div class='back'>
							<p></p>
						</div>
					</div>
				</td>
				<td>
					<div class='click panel square'>
						<div class='front'>
							<p class='PROGRESS'> progress </p>
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
							<p class='TRIP_DISTANCE'> distance </p>
						</div>
						<div class='back'>
							<p></p>
						</div>
					</div>
				</td>
				<td>
					<div class='click panel square'>
						<div class='front'>
							<p class='DURATION'> duration </p>
						</div>
						<div class='back'>
							<p></p>
						</div>
					</div>
				</td>
				<td>
					<div class='click panel square'>
						<div class='front'>
							<p class='MILES_CHANGE'> miles change</p>
						</div>
						<div class='back'>
							<p></p>
						</div>
					</div>
				</td>
				<td>
					<div class='click panel square'>
						<div class='front'>
							<p class='PROGRESS'> progress </p>
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
							<p class='TRIP_DISTANCE'> distance </p>
						</div>
						<div class='back'>
							<p></p>
						</div>
					</div>
				</td>
				<td>
					<div class='click panel square'>
						<div class='front'>
							<p class='DURATION'> duration </p>
						</div>
						<div class='back'>
							<p></p>
						</div>
					</div>
				</td>
				<td>
					<div class='click panel square'>
						<div class='front'>
							<p class='MILES_CHANGE'> miles change</p>
						</div>
						<div class='back'>
							<p></p>
						</div>
					</div>
				</td>
				<td>
					<div class='click panel square'>
						<div class='front'>
							<p class='PROGRESS'> progress </p>
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
							<p class='TRIP_DISTANCE'> distance </p>
						</div>
						<div class='back'>
							<p></p>
						</div>
					</div>
				</td>
				<td>
					<div class='click panel square'>
						<div class='front'>
							<p class='DURATION'> duration </p>
						</div>
						<div class='back'>
							<p></p>
						</div>
					</div>
				</td>
				<td>
					<div class='click panel square'>
						<div class='front'>
							<p class='MILES_CHANGE'> miles change</p>
						</div>
						<div class='back'>
							<p></p>
						</div>
					</div>
				</td>
				<td>
					<div class='click panel square'>
						<div class='front'>
							<p class='PROGRESS'> progress </p>
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
							<p class='TRIP_DISTANCE'> distance </p>
						</div>
						<div class='back'>
							<p></p>
						</div>
					</div>
				</td>
				<td>
					<div class='click panel square'>
						<div class='front'>
							<p class='DURATION'> duration </p>
						</div>
						<div class='back'>
							<p></p>
						</div>
					</div>
				</td>
				<td>
					<div class='click panel square'>
						<div class='front'>
							<p class='MILES_CHANGE'> miles change</p>
						</div>
						<div class='back'>
							<p></p>
						</div>
					</div>
				</td>
				<td>
					<div class='click panel square'>
						<div class='front'>
							<p class='PROGRESS'> progress </p>
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

<script src="http://code.jquery.com/jquery-1.7.1.min.js"></script>
<script>

$.getJSON('TrainDataMerged.json', function(data) {

for (var i in data.TransObject) {

	var rowData = data.TransObject[i];
	
	for(var k in rowData){
		var selectorString = rowData["selector"] + ' p.' + k;
		$(selectorString).html(rowData[k]);

		console.log("hi");
	}
}
        addEvents();
  		});
        	
    </script>

	</body>
</html>