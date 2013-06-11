<html>
	<head>
		<title>JavaScript/CSS3 Departure Board</title>
		<link rel="stylesheet" href="departure-board.css" />
	</head>
	
	<body onLoad = "buildHtmlTable()">
		<h1>All Aboard Betterment</h1>
		<div id="animation"></div>
		
		<!-- TODO: (1) Import JSON data from TrainData.json (2) Write each dep/wd/goal as an aligned string on board.setValue() -->
		<script>
		$.getJSON('TrainData.json', function (json){
			var array = [];
			for (var key in json.DepositObject) {
				if(json.DepositObject.hasOwnProperty(key)) {
					var item = json.DepositObject[key];
					array.push({
						fullName: item.fullName;
						goalName: item.goalName;
						goalAmount: item.goalAmount;
						goalLength: item.goalLength;
						amount: item.amount;
						balance: item.balance;
						onOffTrack: item.onOffTrack;
					});
				}
			}
		};
		console.log(array);
		</script>

		<!-- Old Departure Board -->
		<script src="./js/departure-board.js"></script>
		<script>
			var board = new DepartureBoard (document.getElementById ('animation'), { rowCount: 1, letterCount: 40 }); 
			var board2 = new DepartureBoard (document.getElementById ('animation'), { rowCount: 1, letterCount: 40 }); 
			
			board.setValue ( 
				 [ 'Name      type  track    destination',
				 // 'Connor Lee  Goal    Vacation  40,000', 'Trisha M Clough    Goal         Roth IRA      $200,000', 'Arif Mansuri       Goal         Education     $50,000', 'Louise P Hines     Deposit      Vacation      $90,000', 'Aaron Didier       Goal         Retirement    $40,000', 'Lawrence Abas      Deposit      House         $40,000', 'Ioan Ailoae        Goal         Wedding       $40,000', 'Stephen Schruhl    Deposit      Car           $40,000', 'John Woods         Goal         Wealth        $40,000', 'Lawrence Abas      Deposit      House         $40,000', 'Ioan Ailoae        Goal         Wedding       $40,000', 'Stephen Schruhl    Deposit      Car           $40,000', 'John Woods         Goal         Wealth        $40,000'

				]);

			board2.setValue ( 
				 [ 'Name2     type  track    destination',
				 // 'Connor Lee  Goal    Vacation  40,000', 'Trisha M Clough    Goal         Roth IRA      $200,000', 'Arif Mansuri       Goal         Education     $50,000', 'Louise P Hines     Deposit      Vacation      $90,000', 'Aaron Didier       Goal         Retirement    $40,000', 'Lawrence Abas      Deposit      House         $40,000', 'Ioan Ailoae        Goal         Wedding       $40,000', 'Stephen Schruhl    Deposit      Car           $40,000', 'John Woods         Goal         Wealth        $40,000', 'Lawrence Abas      Deposit      House         $40,000', 'Ioan Ailoae        Goal         Wedding       $40,000', 'Stephen Schruhl    Deposit      Car           $40,000', 'John Woods         Goal         Wealth        $40,000'

				]);
			// 
			// window.setTimeout (function () {
			//  	board.setValue ('19:42 Sheffield');
			// }, 12000);
		</script>
	</body>
</html>