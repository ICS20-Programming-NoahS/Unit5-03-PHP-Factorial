<!DOCTYPE html>
<!-- Unit5-03-PHP-Factorial -->
<html lang="en-ca">
  <head>
    <meta charset="utf-8">
    <meta name="description" content="Factorial">
    <meta name="keywords" content="immaculata, ICS2O">
    <meta name="author" content="Noah Smith">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
  
  	<!-- Favicon -->
  	<link rel="apple-touch-icon" sizes="180x180" href="./fav_index/apple-touch-icon.png">
  	<link rel="icon" type="image/png" sizes="32x32" href="./fav_index/favicon-32x32.png">
  	<link rel="icon" type="image/png" sizes="16x16" href="./fav_index/favicon-16x16.png">
  	<link rel="manifest" href="./fav_index/site.webmanifest">
  
  	<!-- Link to CSS file -->
  	<link rel="stylesheet" href="./css/style.css">
  
  	<!-- Google's MDL -->
  	<link rel="stylesheet" href="https://code.getmdl.io/1.3.0/material.red-blue.min.css">
  	<link href="https://fonts.googleapis.com/css?family=Roboto:300,400,500,700" rel="stylesheet" type="text/css">

    <!-- Title -->
  	<title>Calculate the factorial of a number</title>
  
  </head>
  <body>
    
    <!-- JavaScript -->
  	<script defer src="https://code.getmdl.io/1.3.0/material.min.js"></script>
  	<script src="./js/script.js"></script>

    <!-- Header -->
  	<div class="mdl-layout mdl-js-layout mdl-layout--fixed-header">
  		<header class="mdl-layout__header">
  			<div class="mdl-layout__header-row">
  				<span class="mdl-layout-title">Calculate the factorial of a number</span>
  			</div>
  		</header>
  	</div>
  	<main class="mdl-layout__content">
  		<br>
      <br>
      <br>
      <img src="./images/factorial.jpg" alt="math" height="250" width="200">
      <h5>This program will calculate the factorial of the number the user enters:</h5>

      <!-- Enter a positive integer -->
      <h6>Enter a positive integer:</h6>
  		<form action="./results.php" method="post" target="results">
      <label for="user-number">Enter and integer:</label>
      <input type="number" id="user-number" placeholder="Enter an integer..."  name="user-number">
      <br>
      <input type="submit" value="Calculate Factorial">
    </form>
      <p>
        <iframe id="results" name="results">
        </iframe>
  		</p>
    </main>
  </body>
</html>