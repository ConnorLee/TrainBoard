<html>
	<head>
		<title>JavaScript/CSS3 Departure Board</title>
		<link rel="stylesheet" href="departure-board.css" />
	</head>
	
	<body onLoad = "buildHtmlTable()">
		<h1>All Aboard Betterment</h1>
		<div id="animation"></div>
		
		<table id="jsonTable"></table>
		
		<script src="./js/json-to-table.js"></script>
		<script>
			var objectArray = [{
		        "Total": "34",
		        "Version": "1.0.4",
		        "Office": "New York"
		    }, {
		        "Total": "67",
		        "Version": "1.1.0",
		        "Office": "Paris"
		    }];
		    var jsonHtmlTable = ConvertJsonToTable(objectArray, 'jsonTable');
		    document.write(jsonHtmlTable);    
		</script>

		<script src="./js/departure-board.js"></script>

		<script type="text/javascript" src="http://ajax.googleapis.com/ajax/libs/jquery/1.6.2/jquery.min.js"> </script>
		<script>
			var board = new DepartureBoard (document.getElementById ('animation'), { rowCount: 1, letterCount: 40 }); 
			var board2 = new DepartureBoard (document.getElementById ('animation'), { rowCount: 1, letterCount: 40 }); 
			
			board.setValue ( 
				 [ 'Name      type  track    destination',
				]);
ø
			board2.setValue ( 
				 [ 'Name2     type  track    destination',
				]);
			// 
			// window.setTimeout (function () {
			//  	board.setValue ('19:42 Sheffield');
			// }, 12000);
		</script>
	</body>
</html>