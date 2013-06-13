<html>
	<head>
		<title>JavaScript/CSS3 Departure Board</title>
		<link rel="stylesheet" href="departure-board.css" />
	</head>
	
	<body onLoad = "buildHtmlTable()", onLoad = "">
		<h1 id = "title1">ALL ABOARD BETTERMENT</h1>
		<div id="animation"></div>
		
		<table id="placeholder"></table>
		<script src="./js/json-to-table.js"></script>
		<script src="http://code.jquery.com/jquery-1.7.1.min.js"></script>
	    <script src="./js/Flip-jQuery/jquery.flip.js"></script>
		<script src="./js/departure-board.js"></script>

		<script>
			$.getJSON('TrainDataMerged.json', function(data){
				var output = ConvertJsonToTable(data, 'placeholder');
				document.getElementById("placeholder").innerHTML=output;
			});

		$("#tdRow").flip({
	direction:'tb',
	onBefore: function(){
			console.log('before starting the animation');
	},
	onAnimation: function(){
			console.log('in the middle of the animation');
	},
	onEnd: function(){
			console.log('when the animation has already ended');
	}

    },1000);


		</script>

	</body>
</html>