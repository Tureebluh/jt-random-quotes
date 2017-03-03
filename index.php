<!DOCTYPE html>
<html lang="en">
    <head>
        <title>Random Quote Generator</title>
        <meta charset="UTF-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        
        <!-- Bootstrap core CSS -->
		<link href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-BVYiiSIFeK1dGmJRAkycuHAHRg32OmUcww7on3RYdg4Va+PmSTsz/K68vbdEjh4u" crossorigin="anonymous">

        <!-- Custom styles for this template -->
        <link href="css/styles.css" rel="stylesheet">
    </head>
	
    <body>
        <div class="container text-center quote-container">
			<h1>Random Quote Generator</h1>
			<input class="btn btn-primary" type="button" value="Will fate find you?" id="quoteGenerator">
			
			<p class="quote" id="quote-content"></p>
			<p class="quote" id="quote-author"></p>
			<p class="quote" id="quote-source"></p>
			<input id="twitter-btn" class="btn" type="button"></input>
		</div>
		
        <!-- JQuery Plugin -->
		<script src="https://code.jquery.com/jquery-3.1.1.min.js" integrity="sha256-hVVnYaiADRTO2PzUGmuLJr8BLUSjGIZsDYGmIJLv2b8=" crossorigin="anonymous"></script>
	
		<!-- Bootstrap JS Plugin -->
		<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js" integrity="sha384-Tc5IQib027qvyjSMfHjOMaLkfuWVxZxUPnCJA7l2mCWNIpG9mGCD8wGNIcPD7Txa" crossorigin="anonymous"></script>

        <!-- Custom JS -->
        <script src="js/custom.js"></script>
    </body>
</html>
