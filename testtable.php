<html>
	<head>
		<title>JavaScript/CSS3 Departure Board</title>
		<link rel="stylesheet" href="departure-board.css" />

		<!-- IMPORT SCRIPT HERE -->
		<script src="//ajax.googleapis.com/ajax/libs/jquery/1.9.1/jquery.min.js">
		</script>
		<!-- ANIMATION SCRIPT -->
		<script>
		$(document).ready(function(){
		    $("#tdRow").fadeTo("slow", 0.15);
		    $("#tdRow").fadeTo("slow", 1);
		    $("#tdRow").fadeTo("slow", 0.15);
		    $("#tdRow").fadeTo("slow", 1);
		    $("#tdRow").fadeTo("slow", 0.15);
		    $("#tdRow").fadeTo("slow", 1);
		});
		</script>
	</head>

	<body onLoad = "buildHtmlTable()">
		<h1 id = "title1">ALL ABOARD BETTERMENT</h1>

		<!-- THIS IS THE ACTUAL TABLE.  -->
		<!-- <table class="tableSorter sortBy" id="placeholder"></table> -->
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
				<td>(1,1)</td>
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

		<!-- Test animation for table above-->
		<script>
			$('#table').fadein("slow");
		</script>

	</body>
</html>