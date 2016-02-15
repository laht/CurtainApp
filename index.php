<!DOCTYPE html> 
<html>
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <title></title>
        <meta name="description" content="">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <script src="scripts/jquery-2.2.0.min.js"></script>
    </head>
    <body>
    	<div class="container">
    		<div class="jumbotron">
    			<div class="center">
		    		<input id="RollDown" class="btn btn-primary" type="button" value="Ner" />
		    		<input id="RollUp" class="btn btn-primary" type="button" value="Upp" />
	    		</div>
    		</div>    		
    	</div>
    	<script>
			$("#RollUp").mousedown(function(e) {
				$.ajax({
					url: "functions.php?direction=up",
					type: "GET"
				});
			});

			$("#RollDown").mousedown(function(e) {
				$.ajax({
					url: "functions.php?direction=down",
					type: "GET"
				});
			});

			$("#RollDown").mouseup(function(e) {
				$.ajax({
					url: "functions.php?direction=stop",
					type: "GET"
				});
			});

			$("#RollUp").mouseup(function(e) {
				$.ajax({
					url: "functions.php?direction=stop",
					type: "GET"
				});
			});
		</script>
    </body>
</html>
