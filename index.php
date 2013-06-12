<html>
	<head>
		<title>JavaScript/CSS3 Departure Board</title>
		<link rel="stylesheet" href="departure-board.css" />
	</head>
	
	<body onLoad = "buildHtmlTable()">
		<h1>All Aboard Betterment</h1>
		<div id="animation"></div>

		<table id="placeholder"></table>
		<script src="./js/json-to-table.js"></script>
		<script src="http://code.jquery.com/jquery-1.7.1.min.js"></script>
		<script>
			$.getJSON('TrainDataMerged.json', function(data){
				var output = ConvertJsonToTable(data, 'placeholder');
				document.getElementById("placeholder").innerHTML=output;
			});
		</script>

		<!-- TODO: (1) Import data from TrainData.json (2) Write each dep/wd/goal as an aligned string on board.setValue() -->

		<!-- Old Departure Board -->
		<script src="./js/departure-board.js"></script>
		<script>
			var board = new DepartureBoard (document.getElementById ('animation'), { rowCount: 1, letterCount: 40 }); 
			
			board.setValue ( 
				 [ 'Name      type  track    destination',
				 // 'Connor Lee  Goal    Vacation  40,000', 'Trisha M Clough    Goal         Roth IRA      $200,000', 'Arif Mansuri       Goal         Education     $50,000', 'Louise P Hines     Deposit      Vacation      $90,000', 'Aaron Didier       Goal         Retirement    $40,000', 'Lawrence Abas      Deposit      House         $40,000', 'Ioan Ailoae        Goal         Wedding       $40,000', 'Stephen Schruhl    Deposit      Car           $40,000', 'John Woods         Goal         Wealth        $40,000', 'Lawrence Abas      Deposit      House         $40,000', 'Ioan Ailoae        Goal         Wedding       $40,000', 'Stephen Schruhl    Deposit      Car           $40,000', 'John Woods         Goal         Wealth        $40,000'

				]);
		</script>
	</body>
</html>