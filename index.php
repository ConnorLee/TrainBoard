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
				
			});
		</script>

	</head>

	<body>
		<h1 id="title1">ALL ABOARD BETTERMENT</h1>

		<!-- THIS IS THE ACTUAL TABLE.  -->
		<!-- <table id="placeholder"></table> -->
		<script src="./js/json-to-table.js"></script>
		<script src="http://code.jquery.com/jquery-1.7.1.min.js"></script>
		<script>
			$.getJSON('TrainDataMerged.json', function(data){
				var output = ConvertJsonToTable(data, 'placeholder');
				document.getElementById("placeholder").innerHTML=output;
			});
		</script>

		<!-- TEST TABLE for Animation Experimentation -->
		<table id="table">
			<tr id="row1">
				<td>
					<div class="click panel square">
						<div class="front">
							<h2>Front (click)</h2>
						</div>
						<div class="back">
							<h2>Back (click)</h2>
						</div>
					</div>
				</td>
				<td>(1,2)</td>
				<td>(1,3)</td>
			</tr>
			<tr id="row2">
				<td>(2,1)</td>
				<td>(2,2)</td>
				<td>(2,3)</td>
			</tr>
			<tr id="row3">
				<td>(3,1)</td>
				<td>(3,2)</td>
				<td>(3,3)</td>
			</tr>
		</table>

	</body>
</html>