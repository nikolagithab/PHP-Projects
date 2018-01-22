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
<link href="https://fonts.googleapis.com/css?family=Baloo|Chewy|Fredoka+One|Kaushan+Script|Modak|Pacifico|Rock+Salt|Russo+One" rel="stylesheet">

<link href="css/main.css" rel="stylesheet" type="text/css">

<link href="css/games.css" rel="stylesheet">

</head>
<body>
	<header>
		<h3>Tic Tac Toe</h3>
	</header>
	<main>
		<!-- The main element source: [Nikola Petrovski assign1 SYST10199] -->
		<h3 id="message">Welcome</h3>
		<table>
			<tr>
				<td id="s1" class="SQ" onclick="nextMove(this);"></td>
				<td id="s2" class="SQ" onclick="nextMove(this);"></td>
				<td id="s3" class="SQ" onclick="nextMove(this);"></td>
			</tr>
			<tr>
				<td id="s4" class="SQ" onclick="nextMove(this);"></td>
				<td id="s5" class="SQ" onclick="nextMove(this);"></td>
				<td id="s6" class="SQ" onclick="nextMove(this);"></td>
			</tr>
			<tr>
				<td id="s7" class="SQ" onclick="nextMove(this);"></td>
				<td id="s8" class="SQ" onclick="nextMove(this);"></td>
				<td id="s9" class="SQ" onclick="nextMove(this);"></td>
			</tr>        
		</table>
		<p><button onclick="startGame();">Start A Game</button></p>
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


<script src="js/ttt.js" defer></script>	

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
