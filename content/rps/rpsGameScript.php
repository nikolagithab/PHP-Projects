<!DOCTYPE html>
<html>
<head>
<title>New Layout Template</title>
<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1">
<!-- 
Author: 	Ellen Bajcar et al
Program: 	anyGame.html
Date: 		Summer 2017
Update: 		 
Version: 	a7.s2017.27.07
Purpose: 	template for Assignment 7 SYST10199 Web Development
Source: 	various
Copyright: 
    This work is the intellectual property of Sheridan College. 
    Any further copying and distribution outside of class must be within 
    the copyright law. Posting to commercial sites for profit is prohibited.
Dependencies:
	bg3.jpg canvasLogo.js games.css loginForm.html template.html anyGame.html
Description:
    see instructions.html
-->	
<link href="https://fonts.googleapis.com/css?family=Baloo" rel="stylesheet">

<link href="css/main.css" rel="stylesheet" type="text/css">

<!-- <link href="css/games.css" rel="stylesheet">
-->
</head>
<body>
	<header>
		<h1>Welcome to Rock-Paper-Scissors</h1>
		<h2 id="result">User vs. Computer</h2>
		<h3>Please Select One of the Items to Play</h3>
		</header>
	<main>
		<div id="userSelection">
			
			<button type="button" id="rock" onclick="playWith('rock')">
			<strong>Rock &#9729;</strong></button>
			
			<button type="button" id="paper" onclick="playWith('paper')">
			<strong>Paper &#128196;</strong></button>
			
			<button type="button" id="scissors" 
			onclick="playWith('scissors')">
			<strong>Scissors &#9988;</strong></button>
		
		</div>
		<button type="button" id="play" onclick="startGame();">Play</button>
		<!--<a href="../../index.html" class="button" role="button">Close</a>
		-->
	</main>
	
	<nav>
		<a href="http://bajcar.dev.fast.sheridanc.on.ca/web10199/content/code/assign8/anygame.html#">stats</a>
		<a href="http://bajcar.dev.fast.sheridanc.on.ca/web10199/content/code/assign8/anygame.html#">help</a>
		<a href="../../index.php">close</a>		
	</nav>	
	<footer>
		<address>Web Programming @ Sheridan College &copy; <?php echo date("Y"); ?> Copyright.</address>
		<small>ver.0.0.1</small>
	</footer>
	
<section id="messg" class="stats">
	<h5>stats display here</h5>
	<p>Lorem ipsum...</p>
</section>

<section id="help" class="help">
	<h5>Provide help here.</h5>
	<p>Lorem ipsum...</p>
</section>	


<script src="js/rps.js" defer></script>	

<script>
/* 
	events: setup overlays 
*/		
var overStats = document.getElementsByClassName("stats")[0];
var overHelp = document.getElementsByClassName("help")[0];
overStats.addEventListener("click", function() { (overStats.style.display == "block") ? overStats.style.display = "none" : overStats.style.display = "block"; } );	
overHelp.addEventListener("click", function() { (overHelp.style.display == "block") ? overHelp.style.display = "none" : overHelp.style.display = "block"; } );
/* 
	events: setup for navigation
*/		
var btnStats = document.getElementsByTagName("a")[0];
var btnHelp = document.getElementsByTagName("a")[1]
var btnClose = document.getElementsByTagName("a")[2];  //TODO: will return to the home page of the games website
btnStats.addEventListener("click", function() { (overStats.style.display == "block") ? overStats.style.display = "none" : overStats.style.display = "block"; } );
btnHelp.addEventListener("click", function() { (overHelp.style.display == "block") ? overHelp.style.display = "none" : overHelp.style.display = "block"; } );
//TODO: load js on DOMContentLoaded
</script>
</body>
</html>
